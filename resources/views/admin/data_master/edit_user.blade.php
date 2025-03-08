@extends('template/layout_admin')
@section('title_web', 'Edit Users | KolaBora')
@section('content')
    <div class="page-header">
        <h3 class="page-title">
            Edit Users
        </h3>
        <nav aria-label="breadcrumb">
            <ol class="breadcrumb">
                <li class="breadcrumb-item">Data Master</li>
                <li class="breadcrumb-item">Data Users</li>
                <li class="breadcrumb-item active" aria-current="page">Edit Users</li>
            </ol>
        </nav>
    </div>
    <div class="card">
        <div class="card-body">
            <form action="{{ route('updateUsers', $users->id) }}" class="row forms-sample" method="POST"
                enctype="multipart/form-data">
                @csrf
                @method('PUT')
                <div class="form-group col-md-6 col-sm-12">
                    <label for="name">Name</label>
                    <input type="text" autocomplete="off" name="name" value="{{ $users->name }}" class="form-control"
                        id="name" placeholder="Name">
                </div>
                <div class="form-group col-md-6 col-sm-12">
                    <label for="email">Email</label>
                    <input type="email" autocomplete="off" name="email" value="{{ $users->email }}" class="form-control"
                        id="email" placeholder="Email">
                </div>
                <div class="form-group col-md-4 col-sm-12">
                    <label for="username">Username</label>
                    <input type="text" autocomplete="off" name="username" value="{{ $users->username }}"
                        class="form-control" id="username" placeholder="Username">
                </div>
                <div class="form-group col-md-4 col-sm-12">
                    <label for="password">Password</label>
                    <input type="text" autocomplete="off" name="password" class="form-control" id="password"
                        placeholder="Password">
                </div>
                <div class="form-group col-md-4 col-sm-12">
                    <label for="gender">Gender</label>
                    <select autocomplete="off" name="gender" class="form-control form-control-lg" id="gender">
                        <option>Choice gender</option>
                        <option {{ $users->gender == 'male' ? 'selected' : '' }} value="male">Male</option>
                        <option {{ $users->gender == 'female' ? 'selected' : '' }} value="female">Female</option>
                    </select>
                </div>
                <div class="form-group col-md-4 col-sm-12">
                    <label for="born_birth">Born Birth</label>
                    <input type="text" autocomplete="off" name="born_birth" value="{{ $users->born_birth }}"
                        class="form-control" id="born_birth" placeholder="Born Birth">
                </div>
                <div class="form-group col-md-4 col-sm-12">
                    <label for="date_birth">Date Birth</label>
                    <input type="date" autocomplete="off" name="date_birth" value="{{ $users->date_birth }}"
                        class="form-control" id="date_birth">
                </div>
                <div class="form-group col-md-4 col-sm-12">
                    <label for="no_telp">No Telp</label>
                    <input type="number" autocomplete="off" name="no_telp" value="{{ $users->no_telp }}"
                        class="form-control" id="no_telp" placeholder="No Telp">
                </div>
                <div class="form-group col-md-4 col-sm-12">
                    <label>Upload Profile</label>
                    <input type="file" autocomplete="off" name="img[]" class="file-upload-default">
                    <div class="input-group col-xs-12">
                        <input type="text" autocomplete="off" name="profile_img" class="form-control file-upload-info"
                            disabled placeholder="Upload Profile">
                        <span class="input-group-append">
                            <button class="file-upload-browse btn btn-sm btn-primary" type="button">Upload</button>
                        </span>
                    </div>
                </div>
                <div class="form-group col-md-4 col-sm-12">
                    <label for="last_education">Last Education</label>
                    <select autocomplete="off" name="last_education" class="form-control form-control-lg"
                        id="last_education">
                        <option value="">Choice last education</option>
                        <option {{ $users->last_education == 'not' ? 'selected' : '' }} value="not">Tidak/Belum Sekolah
                        </option>
                        <option {{ $users->last_education == 'sd' ? 'selected' : '' }} value="sd">SD/Sederajat
                        </option>
                        <option {{ $users->last_education == 'smp' ? 'selected' : '' }} value="smp">SMP/Sederajat
                        </option>
                        <option {{ $users->last_education == 'sma_smk' ? 'selected' : '' }} value="sma_smk">
                            SMA/SMK/Sederajat</option>
                        <option {{ $users->last_education == 'd1_d3' ? 'selected' : '' }} value="d1_d3">
                            DI/DI/DIII/Sederajat</option>
                        <option {{ $users->last_education == 's1_d4' ? 'selected' : '' }} value="s1_d4">S1/DIV/Sederajat
                        </option>
                        <option {{ $users->last_education == 's2' ? 'selected' : '' }} value="s2">S2/Sederajat
                        </option>
                        <option {{ $users->last_education == 's2' ? 'selected' : '' }} value="s3">S3/Sederajat
                        </option>
                    </select>
                </div>
                <div class="form-group col-md-4 col-sm-12">
                    <label for="status">Status Account</label>
                    <select autocomplete="off" name="status" class="form-control form-control-lg" id="status">
                        <option {{ $users->status == 1 ? 'selected' : '' }} value="1">Active</option>
                        <option {{ $users->status == 2 ? 'selected' : '' }} value="2">Not Active</option>
                    </select>
                </div>
                <div class="form-group col-md-6 col-sm-12">
                    <label for="bio">Bio</label>
                    <textarea autocomplete="off" name="bio" class="form-control" id="bio" rows="4">{{ $users->bio }}</textarea>
                </div>
                <div class="form-group col-md-6 col-sm-12">
                    <label for="address">Address</label>
                    <textarea autocomplete="off" name="address" class="form-control" id="address" rows="4">{{ $users->address }}</textarea>
                </div>
                <div class="d-grid gap-2 col-12">
                    <button type="submit" class="btn btn-warning mr-2">Update</button>
                    <button type="reset" class="btn btn-light">Reset</button>
                </div>
            </form>
        </div>
    </div>
@endsection
