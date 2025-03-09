@extends('template/layout_admin')
@section('title_web', 'Data Company | KolaBora')
@section('content')
    <div class="page-header">
        <h3 class="page-title">
            Data Company
        </h3>
        <nav aria-label="breadcrumb">
            <ol class="breadcrumb">
                <li class="breadcrumb-item">Data Master</li>
                <li class="breadcrumb-item active" aria-current="page">Data Company</li>
            </ol>
        </nav>
    </div>
    <div class="card">
        <div class="card-body">
            <div class="d-grid mb-4 gap-2">
                <a href="{{ url('add-company') }}" class="btn btn-sm btn-primary">Add Company</a>
                <a href="" class="btn btn-sm btn-primary">Export</a>
                <a href="" class="btn btn-sm btn-primary">Print</a>
            </div>
            <div class="row">
                <div class="col-12">
                    <div class="table-responsive">
                        <table id="order-listing" class="table">
                            <thead>
                                <tr>
                                    <th>No</th>
                                    <th>Name Company</th>
                                    <th>Slogan</th>
                                    <th>Email Users</th>
                                    <th>Name Users</th>
                                    <th>Status Account</th>
                                    <th>Actions</th>
                                </tr>
                            </thead>
                            <tbody>
                                @foreach ($data as $company)
                                    <tr>
                                        <td>{{ $increment++ }}</td>
                                        <td>{{ $company->name_company ?? 'Tidak ada perusahaan' }}
                                        </td>
                                        <td>{{ $company->slogan ?? '-' }}</td>
                                        <td>{{ $company->users->email }}</td>
                                        <td>{{ $company->users->name }}</td>
                                        @if ($company->users->status == 1)
                                            <td>
                                                <label class="badge badge-success">Active</label>
                                            </td>
                                        @else
                                            <td>
                                                <label class="badge badge-danger">Not Active</label>
                                            </td>
                                        @endif
                                        <td class="d-flex">
                                            <a href="{{ url('/show-company/' . $company->id) }}"
                                                class="btn btn-sm py-2 btn-info"><i class="fas fa-eye">
                                                </i></a>
                                            <a href="{{ url('/edit-company/' . $company->id) }}"
                                                class="btn btn-sm py-2 btn-warning mx-1"><i class="fas fa-edit">
                                                </i></a>
                                            <form id="deleteSweet" action="{{ route('deleteCompany', $company->id) }}"
                                                method="post">
                                                @csrf
                                                @method('DELETE')
                                                <button id="deleteSweet" type="submit"
                                                    class="btn btn-sm py-2 btn-danger"><i class="fas fa-trash">
                                                    </i>
                                                </button>
                                            </form>
                                        </td>
                                    </tr>
                                @endforeach
                            </tbody>
                        </table>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
