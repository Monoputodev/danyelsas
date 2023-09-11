<?php

namespace App\Http\Controllers;

use App\Models\Certification;
use Illuminate\Http\Request;
use Intervention\Image\ImageManagerStatic as Image;

// namespace Intervention\Image\Facades;


class CertificationController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {

        $certifications = Certification::orderBy('id', 'DESC')->get();
        // dd($certifications);
        return view('admin.pages.certification.index', compact('certifications'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        // dd(public_path());
        return view('admin.pages.certification.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        //  dd($request->all());
        $data = $request->validate([
            'title' => 'required',
            'image' => 'required|image|max:2048', // max file size of 2MB
        ]);
        $image = $request->file('image');
        $imageName = time() . '.' . $image->extension();

        $img = Image::make($image->path());

        $img->encode('jpg', 80); // convert image to JPEG format with 80% quality and reduce file size to 80kb
        $img->save(base_path('/uploads/certifications/') . $imageName);
        $data['image'] = $imageName;
        $lastCertification = Certification::orderByDesc('order')->first();
        if ($lastCertification) {
            $data['order'] = $lastCertification->order + 1;
        } else {
            $data['order'] = 1;
        }
        $certification = Certification::create($data);

        if ($certification) {
            return redirect()->route('certifications.index')->with('success', 'Certification created successfully.');
            # code...
        } else {
            return back()->with('error', 'Certification creating showing error.');
        }
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Certification  $certification
     * @return \Illuminate\Http\Response
     */
    public function show(Certification $certification)
    {
        return view('admin.pages.certification.view', compact('certification'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Certification  $certification
     * @return \Illuminate\Http\Response
     */
    public function edit(Certification $certification)
    {
        return view('admin.pages.certification.edit', compact('certification'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Certification  $certification
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Certification $certification)
    {
        // dd($request->all());
        $data = $request->validate([
            'title' => 'required',
            'order' => 'required',

        ]);

        if ($request->hasFile('image')) {
            $image = $request->file('image');
            $imageName = time() . '.' . $image->extension();

            $img = Image::make($image->path());
            $img->fit(205, 235); // resize the image to fit within 380x310 while preserving aspect ratio
            $img->encode('jpg', 80); // convert image to JPEG format with 80% quality and reduce file size to 80kb
            $img->save(base_path('/uploads/certifications/') . $imageName);

            $data['image'] = $imageName;
        }

        $certification = $certification->update($data);



        if ($certification) {
            return redirect()->route('certifications.index')->with('success', 'Certification Updated successfully.');
            # code...
        } else {
            return back()->with('error', 'Certification Update showing error.');
        }
    }


    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Certification  $certification
     * @return \Illuminate\Http\Response
     */
    public function destroy(Certification $certification)
    {
        // delete the certification's image file, if it exists

        if ($certification->image && file_exists(asset('uploads/certifications/' . $certification->image))) {
            unlink(asset('uploads/certifications/' . $certification->image));
        }

        // delete the certification from the database
        $certification->delete();

        return redirect()->route('certifications.index')->with('success', 'Certification deleted successfully.');
    }



    /**
     * Active the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Certification  $certification
     * @return \Illuminate\Http\Response
     */
    public function Active(Certification $certification)
    {

        $certification->status = '1';
        if ($certification->save()) {
            return redirect()->route('certifications.index')->with('success', 'certification Activated successfully.');
        } else {
            return back()->with('error', 'certification Activation Unsuccessfull');
        }
    }
    /**
     * Inactive  the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Certification  $certification
     * @return \Illuminate\Http\Response
     */
    public function Inactive(Certification $certification)

    {
        // dd($certification->status);
        $certification->status = '0';
        if ($certification->save()) {
            return redirect()->route('certifications.index')->with('success', 'certification Deactivated successfully.');
        } else {
            return back()->with('error', 'certification Dactivation Unsuccessfull.');
        }
    }
}
