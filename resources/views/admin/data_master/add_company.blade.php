@extends('template/layout_admin')
@section('title_web', 'Add Company | KolaBora')
@section('content')
    <div class="page-header">
        <h3 class="page-title">
            Add Company
        </h3>
        <nav aria-label="breadcrumb">
            <ol class="breadcrumb">
                <li class="breadcrumb-item">Data Master</li>
                <li class="breadcrumb-item">Data Company</li>
                <li class="breadcrumb-item active" aria-current="page">Add Company</li>
            </ol>
        </nav>
    </div>
    <div class="card">
        <div class="card-body">
            <form action="{{ route('addCompany') }}" class="row forms-sample" method="POST" enctype="multipart/form-data">
                @csrf
                <div class="form-group col-md-6 col-sm-12">
                    <label for="name_company">Name Company</label>
                    <input type="text" autocomplete="off" name="name_company" value="{{ old('name_company') }}"
                        class="form-control" id="name_company" placeholder="Name Company">
                </div>
                <div class="form-group col-md-6 col-sm-12">
                    <label for="id_users"> Email Users | Name Users</label>
                    <select name="id_users" class="form-control form-control-lg" id="id_users"
                        class="js-example-basic-single w-100">
                        @foreach ($data as $users)
                            <option value="{{ $users->id }}">{{ $users->email . ' | ' . $users->name }}</option>
                        @endforeach
                    </select>
                </div>
                <div class="form-group col-md-6 col-sm-12">
                    <label>Upload Profile Company</label>
                    <input type="file" name="profile_company" class="file-upload-default">
                    <div class="input-group col-xs-12">
                        <input type="text" autocomplete="off" name="profile_company"
                            class="form-control file-upload-info" disabled placeholder="Upload Profile">
                        <span class="input-group-append">
                            <button class="file-upload-browse btn btn-sm btn-primary" type="button">Upload</button>
                        </span>
                    </div>
                </div>
                <div class="form-group col-md-6 col-sm-12">
                    <label for="slogan">Slogan</label>
                    <input type="text" autocomplete="off" name="slogan" value="{{ old('slogan') }}" class="form-control"
                        id="slogan" placeholder="Slogan">
                </div>
                <div class="form-group col-md-4 col-sm-12">
                    <label for="scope_company">Scope Company</label>
                    <input type="text" autocomplete="off" name="scope_company" value="{{ old('scope_company') }}"
                        class="form-control" id="scope_company" placeholder="Scope Company">
                </div>
                <div class="form-group col-md-4 col-sm-12">
                    <label for="contact">Contact</label>
                    <input type="text" autocomplete="off" name="contact" value="{{ old('contact') }}"
                        class="form-control" id="contact" placeholder="Contact">
                </div>
                <div class="form-group col-md-4 col-sm-12">
                    <label for="email">Email Company</label>
                    <input type="email" autocomplete="off" name="email" value="{{ old('email') }}" class="form-control"
                        id="email" placeholder="Email Company">
                </div>
                <div class="form-group col-md-4 col-sm-12">
                    <label for="instagram">Instagram</label>
                    <input type="text" autocomplete="off" name="instagram" value="{{ old('instagram') }}"
                        class="form-control" id="instagram" placeholder="Instagram">
                </div>
                <div class="form-group col-md-4 col-sm-12">
                    <label for="linkedin">LinkedIn</label>
                    <input type="text" autocomplete="off" name="linkedin" value="{{ old('linkedin') }}"
                        class="form-control" id="linkedin" placeholder="LinkedIn">
                </div>
                <div class="form-group col-md-4 col-sm-12">
                    <label for="website">Website</label>
                    <input type="text" autocomplete="off" name="website" value="{{ old('website') }}"
                        class="form-control" id="website" placeholder="Website">
                </div>
                <div class="form-group col-md-6 col-sm-12">
                    <label for="about_company">About Company</label>
                    <textarea placeholder="About Company" autocomplete="off" name="about_company" value="{{ old('about_company') }}"
                        class="form-control" id="about_company" rows="4"></textarea>
                </div>
                <div class="form-group col-md-6 col-sm-12">
                    <label for="address_company">Address Company</label>
                    <textarea placeholder="Address Company" autocomplete="off" name="address_company"
                        value="{{ old('address_company') }}" class="form-control" id="address_company" rows="4"></textarea>
                </div>
                <div class="d-grid gap-2 col-12">
                    <button type="submit" class="btn btn-primary mr-2">Submit</button>
                    <button type="reset" class="btn btn-light">Reset</button>
                </div>
            </form>
        </div>
    </div>
@endsection
