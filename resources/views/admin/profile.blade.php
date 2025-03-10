@extends('template/layout_admin')
@section('title_web', 'Profile Admin | KolaBora')
@section('content')
    <div class="page-header">
        <h3 class="page-title">
            Profile Admin
        </h3>
        <nav aria-label="breadcrumb">
            <ol class="breadcrumb">
                <li class="breadcrumb-item active" aria-current="page">Profile</li>
            </ol>
        </nav>
    </div>
    <div class="card">
        <div class="card-body">
            <div class="row">
                <div class="col-md-4">
                    <div class="border-bottom text-center pb-4">
                        <img src="{{ asset('uploads/profile/' . auth()->user()->profile_img) }}" alt="profile"
                            class="img-lg rounded-circle mb-3" />
                        <h5>{{ auth()->user()->name ?? '-' }}</h5>
                        <p>{{ auth()->user()->email ?? '-' }}</p>
                        <div class="d-grid ">
                            @if (auth()->user()->status == 1)
                                <p class="btn btn-sm btn-inverse-success">Active</p>
                            @else
                                <p class="btn btn-sm btn-inverse-danger">Not Active</p>
                            @endif
                            <p class="btn btn-sm btn-inverse-success">{{ auth()->user()->role }}</p>
                        </div>
                    </div>
                </div>
                <div class="col-md-8">
                    <form action="{{ route('updateProfileAdmin', auth()->user()->id) }}" class="row forms-sample"
                        method="POST" enctype="multipart/form-data">
                        @csrf
                        @method('PUT')
                        <div class="form-group col-md-12">
                            <label for="name">Name</label>
                            <input type="text" autocomplete="off" name="name" value="{{ auth()->user()->name }}"
                                class="form-control" id="name" placeholder="Name">
                        </div>
                        <div class="form-group col-md-6 col-sm-12">
                            <label for="email">Email</label>
                            <input type="email" autocomplete="off" name="email" value="{{ auth()->user()->email }}"
                                class="form-control" id="email" placeholder="Email">
                        </div>
                        <div class="form-group col-md-6 col-sm-12 ">
                            <label for="username">Username</label>
                            <input type="text" autocomplete="off" name="username" value="{{ auth()->user()->username }}"
                                class="form-control" id="username" placeholder="Username">
                        </div>
                        <div class="form-group col-md-6 col-sm-12 ">
                            <label for="password">Password</label>
                            <input type="text" autocomplete="off" name="password" class="form-control" id="password"
                                placeholder="Password">
                        </div>
                        <div class="form-group col-md-6 col-sm-12 ">
                            <label for="gender">Gender</label>
                            <select autocomplete="off" name="gender" class="form-control form-control-lg" id="gender">
                                <option>Choice gender</option>
                                <option {{ auth()->user()->gender == 'male' ? 'selected' : '' }} value="male">Male
                                </option>
                                <option {{ auth()->user()->gender == 'female' ? 'selected' : '' }} value="female">Female
                                </option>
                            </select>
                        </div>
                        <div class="form-group col-md-6 col-sm-12 ">
                            <label>Upload Profile</label>
                            <input type="file" autocomplete="off" name="profile_img" class="file-upload-default">
                            <div class="input-group col-xs-12">
                                <input type="text" autocomplete="off" name="profile_img"
                                    class="form-control file-upload-info" disabled placeholder="Upload Profile">
                                <span class="input-group-append">
                                    <button class="file-upload-browse btn btn-sm btn-primary" type="button">Upload</button>
                                </span>
                            </div>
                        </div>
                        <div class="form-group col-md-6 col-sm-12">
                            <label for="status">Status Account</label>
                            <select autocomplete="off" name="status" class="form-control form-control-lg" id="status">
                                <option {{ auth()->user()->status == 1 ? 'selected' : '' }} value="1">Active</option>
                                <option {{ auth()->user()->status == 2 ? 'selected' : '' }} value="2">Not Active
                                </option>
                            </select>
                        </div>
                        <div class="form-group col-md-12">
                            <label for="address">Address</label>
                            <textarea autocomplete="off" name="address" class="form-control" id="address" rows="4">{{ auth()->user()->address }}</textarea>
                        </div>
                        <div class="d-grid gap-2 col-12">
                            <button type="submit" class="btn btn-warning mr-2">Update</button>
                            <button type="reset" class="btn btn-light">Reset</button>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
@endsection
