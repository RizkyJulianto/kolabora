@extends('template/layout_admin')
@section('title_web', 'Show Company | KolaBora')
@section('content')
    <div class="page-header">
        <h3 class="page-title">
            Show Company
        </h3>
        <nav aria-label="breadcrumb">
            <ol class="breadcrumb">
                <li class="breadcrumb-item">Data Master</li>
                <li class="breadcrumb-item">Data Company</li>
                <li class="breadcrumb-item active" aria-current="page">Show Company</li>
            </ol>
        </nav>
    </div>
    <div class="card">
        <div class="card-body">
            <div class="row">
                <div class="d-flex flex-row col-12 mb-3">
                    <img src="{{ asset('uploads/profile_company/' . $company->profile_company) }}"
                        class="img-lg shadow-sm p-2 rounded" alt="profile image" />
                    <div class="ml-3">
                        <h6>{{ $company->name_company }}</h6>
                        <p class="text-muted">{{ $company->address_company ?? '-' }}</p>
                        <p class="text-muted">{{ $company->slogan ?? '-' }}</p>
                    </div>
                </div>
                <div class="form-group col-12">
                    <label for="about_company">About Company</label>
                    <p class="form-control mb-0">{{ $company->about_company ?? '-' }}</p>
                </div>
                <div class="form-group col-md-4 col-sm-12">
                    <label for="scope_company">Scope Company</label>
                    <p class="form-control mb-0">{{ $company->scope_company ?? '-' }}</p>
                </div>
                <div class="form-group col-md-4 col-sm-12">
                    <label for="contact">Contact</label>
                    <p class="form-control mb-0">{{ $company->contact ?? '-' }}</p>
                </div>
                <div class="form-group col-md-4 col-sm-12">
                    <label for="email">Email Company</label>
                    <p class="form-control mb-0">{{ $company->email ?? '-' }}</p>
                </div>
                <div class="form-group col-md-4 col-sm-12">
                    <label for="instagram">Instagram</label>
                    <p class="form-control mb-0">{{ $company->instagram ?? '-' }}</p>
                </div>
                <div class="form-group col-md-4 col-sm-12">
                    <label for="linkedin">LinkedIn</label>
                    <p class="form-control mb-0">{{ $company->linkedin ?? '-' }}</p>
                </div>
                <div class="form-group col-md-4 col-sm-12">
                    <label for="website">Website</label>
                    <p class="form-control mb-0">{{ $company->website ?? '-' }}</p>
                </div>

                <div class="col-12 d-flex align-items-center my-3">
                    <h5 class="mr-2">Detailed user biodata</h5>
                    @if ($company->users->status == 1)
                        <p class="bg-light text-success p-1">Active</p>
                    @else
                        <p class="bg-light text-danger p-1">Not Active</p>
                    @endif
                </div>
                <div class="form-group col-md-6 col-sm-12">
                    <label for="name">Name Users</label>
                    <p class="form-control mb-0">{{ $company->users->name }}</p>
                </div>
                <div class="form-group col-md-6 col-sm-12">
                    <label for="email">Email Users</label>
                    <p class="form-control mb-0">{{ $company->users->email }}</p>
                </div>
                <div class="form-group col-md-4 col-sm-12">
                    <label for="username">Username</label>
                    <p class="form-control mb-0">{{ $company->users->username }}</p>
                </div>
                <div class="form-group col-md-4 col-sm-12">
                    <label for="gender">Gender</label>
                    @if ($company->users->gender == 'male')
                        <p class="form-control mb-0">Male</p>
                    @elseif ($company->users->gender == 'female')
                        <p class="form-control mb-0">Female</p>
                    @else
                        <p class="form-control mb-0">-</p>
                    @endif
                </div>
                <div class="form-group col-md-4 col-sm-12">
                    <label for="born_birth">Born Birth</label>
                    <p class="form-control mb-0">{{ $company->users->born_birth ?? '-' }}</p>
                </div>
                <div class="form-group col-md-4 col-sm-12">
                    <label for="date_birth">Date Birth</label>
                    <p class="form-control mb-0">{{ date('j F Y', strtotime($company->users->date_birth)) ?? '-' }}</p>
                </div>
                <div class="form-group col-md-4 col-sm-12">
                    <label for="no_telp">No Telp</label>
                    <p class="form-control mb-0">{{ $company->users->born_birth ?? '-' }}</p>
                </div>
                <div class="form-group col-md-4 col-sm-12">
                    <label for="last_education">Last Education</label>
                    @if ($company->users->last_education == 'not')
                        <p class="form-control mb-0">Tidak/Belum Sekolah</p>
                    @elseif ($company->users->last_education == 'sd')
                        <p class="form-control mb-0">SD/Sederajat</p>
                    @elseif ($company->users->last_education == 'smp')
                        <p class="form-control mb-0">SMP/Sederajat</p>
                    @elseif ($company->users->last_education == 'sma_smk')
                        <p class="form-control mb-0">SMA/SMK/Sederajat</p>
                    @elseif ($company->users->last_education == 'd1_d3')
                        <p class="form-control mb-0">DI/DI/DIII/Sederajat</p>
                    @elseif ($company->users->last_education == 's1_d4')
                        <p class="form-control mb-0">S1/DIV/Sederajat</p>
                    @elseif ($company->users->last_education == 's2')
                        <p class="form-control mb-0">S2/Sederajat</p>
                    @elseif ($company->users->last_education == 's3')
                        <p class="form-control mb-0">S3/Sederajat</p>
                    @else
                        <p class="form-control mb-0">-</p>
                    @endif
                </div>
                <div class="form-group col-12">
                    <label for="bio">Bio</label>
                    <p class="form-control mb-0">{{ $company->users->bio ?? '-' }}t</p>
                </div>
                <div class="form-group col-12">
                    <label for="address">Address</label>
                    <p class="form-control mb-0">{{ $company->users->address ?? '-' }}t</p>
                </div>
            </div>
        </div>
    </div>
@endsection
