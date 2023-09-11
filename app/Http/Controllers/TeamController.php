<?php

namespace App\Http\Controllers;

use App\Models\Team;
use Illuminate\Http\Request;
use Intervention\Image\ImageManagerStatic as Image;


// namespace Intervention\Image\Facades;


class TeamController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {

        $teams = Team::orderBy('id', 'DESC')->get();
        // dd($teams);
        return view('admin.pages.team.index', compact('teams'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        // dd(public_path());
        return view('admin.pages.team.create');
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
            'name' => 'required',
            'designation' => 'required',
            'image' => 'required|image|max:2048', // max file size of 2MB
        ]);
        $image = $request->file('image');
        $imageName = time() . '.' . $image->extension();

        $img = Image::make($image->path());
        $img->fit(270, 270); // resize the image to fit within 380x310 while preserving aspect ratio
        $img->encode('jpg', 80); // convert image to JPEG format with 80% quality and reduce file size to 80kb
        $img->save(base_path('/uploads/teams/') . $imageName);
        $data['image'] = $imageName;
        $lastTeam = Team::orderByDesc('order')->first();
        if ($lastTeam) {
            $data['order'] = $lastTeam->order + 1;
        } else {
            $data['order'] = 1;
        }
        $team = Team::create($data);

        if ($team) {
            return redirect()->route('teams.index')->with('success', 'Team created successfully.');
            # code...
        } else {
            return back()->with('error', 'Team creating showing error.');
        }
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Team  $team
     * @return \Illuminate\Http\Response
     */
    public function show(Team $team)
    {
        return view('admin.pages.team.view', compact('team'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Team  $team
     * @return \Illuminate\Http\Response
     */
    public function edit(Team $team)
    {
        return view('admin.pages.team.edit', compact('team'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Team  $team
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Team $team)
    {
        $data = $request->validate([
            'name' => 'required',
            'order' => 'required',
            'designation' => 'required',

        ]);

        if ($request->hasFile('image')) {
            $image = $request->file('image');
            $imageName = time() . '.' . $image->extension();

            $img = Image::make($image->path());
            $img->fit(270, 270); // resize the image to fit within 380x310 while preserving aspect ratio
            $img->encode('jpg', 80); // convert image to JPEG format with 80% quality and reduce file size to 80kb
            $img->save(base_path('/uploads/teams/') . $imageName);

            $data['image'] = $imageName;
        }

        $team = $team->update($data);



        if ($team) {
            return redirect()->route('teams.index')->with('success', 'Team Updated successfully.');
            # code...
        } else {
            return back()->with('error', 'Team Update showing error.');
        }
    }


    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Team  $team
     * @return \Illuminate\Http\Response
     */
    public function destroy(Team $team)
    {
        // delete the team's image file, if it exists

        if ($team->image && file_exists(asset('uploads/teams/' . $team->image))) {
            unlink(asset('uploads/teams/' . $team->image));
        }

        // delete the team from the database
        $team->delete();

        return redirect()->route('teams.index')->with('success', 'Team deleted successfully.');
    }



    /**
     * Active the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Team  $team
     * @return \Illuminate\Http\Response
     */
    public function Active(Team $team)
    {

        $team->status = '1';
        if ($team->save()) {
            return redirect()->route('teams.index')->with('success', 'team Activated successfully.');
        } else {
            return back()->with('error', 'team Activation Unsuccessfull');
        }
    }
    /**
     * Inactive  the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Team  $team
     * @return \Illuminate\Http\Response
     */
    public function Inactive(Team $team)

    {
        // dd($team->status);
        $team->status = '0';
        if ($team->save()) {
            return redirect()->route('teams.index')->with('success', 'team Deactivated successfully.');
        } else {
            return back()->with('error', 'team Dactivation Unsuccessfull.');
        }
    }
}
