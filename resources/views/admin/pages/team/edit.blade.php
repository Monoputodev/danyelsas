@extends('admin.app.app')
@section('main-content')
    <div class="main-content">

        <div class="page-content">
            <div class="container-fluid">

                <!-- start page title -->
                <div class="row">
                    <div class="col-12">
                        <div class="page-title-box d-sm-flex align-items-center justify-content-between">
                            <h4 class="mb-sm-0 font-size-18">Edit Team</h4>

                            <div class="page-title-right">
                                <ol class="breadcrumb m-0">
                                    <li class="breadcrumb-item"><a href="javascript: void(0);">team</a></li>
                                    <li class="breadcrumb-item active">Edit Team</li>
                                </ol>
                            </div>

                        </div>
                    </div>
                </div>
                <!-- end page title -->


                <div class="row">
                    <div class="col-xl-12">
                        <div class="card">
                            <div class="card-body">
                                <form method="POST" action="{{ route('teams.update', $team->id) }}"
                                    enctype="multipart/form-data">
                                    @method('PUT')
                                    @csrf

                                    <div class="row g-3">
                                        <div class="col-md-6">
                                            <label for="order" class="form-label">Item Order</label>
                                            <input type="text" class="form-control" id="order"
                                                value="{{ $team->order }}" name="order" required>
                                        </div>
                                        <div class="col-md-6">
                                            <label for="name" class="form-label">name</label>
                                            <input type="text" class="form-control" id="name" name="name"
                                                value="{{ $team->name }}" required>
                                        </div>

                                        <div class="col-md-6">
                                            <label for="designation" class="form-label">designation</label>
                                            <input type="text" class="form-control" id="designation" name="designation"
                                                value="{{ $team->designation }}" required>
                                        </div>

                                        <div class="col-md-6">
                                            <label for="image" class="form-label">Image</label>
                                            <input type="file" class="form-control dropify" id="image" name="image"
                                                data-default-file="{{ asset('uploads/teams/' . $team->image) }}">
                                        </div
                                        <div class="col-md-12 mt-3">
                                            <button type="submit" class="btn btn-primary">Submit</button>
                                        </div>

                                    </div>
                                </form>

                            </div>
                        </div>
                    </div>
                </div>

            </div> <!-- container-fluid -->
        </div> <!-- page-content -->


        {{-- </div> --}}
    @endsection
