@extends('template/layout_admin')
@section('title_web', 'Show Users | KolaBora')
@section('content')
    <div class="page-header">
        <h3 class="page-title">
            Show Users
        </h3>
        <nav aria-label="breadcrumb">
            <ol class="breadcrumb">
                <li class="breadcrumb-item">Data Master</li>
                <li class="breadcrumb-item">Data Users</li>
                <li class="breadcrumb-item active" aria-current="page">Show Users</li>
            </ol>
        </nav>
    </div>
    <div class="card">
        <div class="card-body">
            <div class="row">
                <div class="d-flex flex-row col-12 mb-3">
                    <img src="{{ asset('uploads/profile/' . $users->profile_img) }}" class="img-lg rounded"
                        alt="profile image" />
                    <div class="ml-3">
                        <h6>{{ $users->name }}</h6>
                        <p class="text-muted">{{ $users->email }}</p>
                        <p class="mt-2 text-white font-weight-bold" style="letter-spacing: 1.2px; font-size: 0.7rem">
                            @if ($users->status == 1)
                                <span class="p-1 bg-success">Active</span>
                            @else
                                <span class="p-1 bg-danger">Not Active</span>
                            @endif
                        </p>
                    </div>
                </div>
                <div class="form-group col-md-6 col-sm-12">
                    <label for="username">Username</label>
                    <p class="form-control mb-0">{{ $users->username }}</p>
                </div>
                <div class="form-group col-md-6 col-sm-12">
                    <label for="gender">Gender</label>
                    @if ($users->gender == 'male')
                        <p class="form-control mb-0">Male</p>
                    @elseif ($users->gender == 'female')
                        <p class="form-control mb-0">Female</p>
                    @endif
                </div>
                <div class="form-group col-md-6 col-sm-12">
                    <label for="born_birth">Born Birth</label>
                    <p class="form-control mb-0">{{ $users->born_birth }}</p>
                </div>
                <div class="form-group col-md-6 col-sm-12">
                    <label for="date_birth">Date Birth</label>
                    <p class="form-control mb-0">{{ date('j F Y', strtotime($users->date_birth)) }}</p>
                </div>
                <div class="form-group col-md-6 col-sm-12">
                    <label for="no_telp">No Telp</label>
                    <p class="form-control mb-0">{{ $users->born_birth }}</p>
                </div>
                <div class="form-group col-md-6 col-sm-12">
                    <label for="last_education">Last Education</label>
                    @if ($users->last_education == 'not')
                        <p class="form-control mb-0">Tidak/Belum Sekolah</p>
                    @elseif ($users->last_education == 'sd')
                        <p class="form-control mb-0">SD/Sederajat</p>
                    @elseif ($users->last_education == 'smp')
                        <p class="form-control mb-0">SMP/Sederajat</p>
                    @elseif ($users->last_education == 'sma_smk')
                        <p class="form-control mb-0">SMA/SMK/Sederajat</p>
                    @elseif ($users->last_education == 'd1_d3')
                        <p class="form-control mb-0">DI/DI/DIII/Sederajat</p>
                    @elseif ($users->last_education == 's1_d4')
                        <p class="form-control mb-0">S1/DIV/Sederajat</p>
                    @elseif ($users->last_education == 's2')
                        <p class="form-control mb-0">S2/Sederajat</p>
                    @elseif ($users->last_education == 's3')
                        <p class="form-control mb-0">S3/Sederajat</p>
                    @endif
                </div>
                <div class="form-group col-12">
                    <label for="bio">Bio</label>
                    <textarea autocomplete="off" name="bio" class="form-control" id="bio" rows="4">{{ $users->bio }}</textarea>
                </div>
                <div class="form-group col-12">
                    <label for="address">Address</label>
                    <textarea autocomplete="off" name="address" class="form-control" id="address" rows="4">{{ $users->address }}</textarea>
                </div>

            </div>
        </div>
    </div>
@endsection
