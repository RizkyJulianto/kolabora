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
            <h4 class="card-title">Data Company</h4>
            <div class="row">
                <div class="col-12">
                    <div class="table-responsive">
                        <table id="order-listing" class="table">
                            <thead>
                                <tr>
                                    <th>No</th>
                                    <th>Name Company</th>
                                    <th>Username</th>
                                    <th>Email</th>
                                    <th>Status</th>
                                    <th>Actions</th>
                                </tr>
                            </thead>
                            <tbody>
                                @foreach ($data as $company)
                                    <tr>
                                        <td>{{ $increment++ }}</td>
                                        <td>{{ $company->name }}</td>
                                        <td>{{ $company->username }}</td>
                                        <td>{{ $company->email }}</td>
                                        @if ($company->status == 1)
                                            <td>
                                                <label class="badge badge-success">Active</label>
                                            </td>
                                        @else
                                            <td>
                                                <label class="badge badge-danger">Not Active</label>
                                            </td>
                                        @endif
                                        <td>
                                            <a href="" class="badge badge-info"><i class="fas fa-eye"> Detail</i></a>
                                            <a href="" class="badge badge-warning"><i class="fas fa-edit">
                                                    Edit</i></a>
                                            <a href="" class="badge badge-danger"><i class="fas fa-trash">
                                                    Delete</i></a>
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
