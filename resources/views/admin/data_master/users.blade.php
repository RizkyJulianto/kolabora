@extends('template/layout_admin')
@section('title_web', 'Data Users | KolaBora')
@section('content')
    <div class="page-header">
        <h3 class="page-title">
            Data Users
        </h3>
        <nav aria-label="breadcrumb">
            <ol class="breadcrumb">
                <li class="breadcrumb-item">Data Master</li>
                <li class="breadcrumb-item active" aria-current="page">Data Users</li>
            </ol>
        </nav>
    </div>
    <div class="card">
        <div class="card-body">
            <div class="d-grid mb-4 gap-2">
                <a href="{{ url('add-users') }}" class="btn btn-sm btn-primary">Add Users</a>
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
                                    <th>Name</th>
                                    <th>Username</th>
                                    <th>Email</th>
                                    <th>Gender</th>
                                    <th>Status</th>
                                    <th>Actions</th>
                                </tr>
                            </thead>
                            <tbody>
                                @foreach ($data as $users)
                                    <tr>
                                        <td>{{ $increment++ }}</td>
                                        <td>{{ $users->name }}</td>
                                        <td>{{ $users->username }}</td>
                                        <td>{{ $users->email }}</td>
                                        <td>{{ $users->gender ?? '-' }}</td>
                                        @if ($users->status == 1)
                                            <td>
                                                <label class="badge badge-success">Active</label>
                                            </td>
                                        @else
                                            <td>
                                                <label class="badge badge-danger">Not Active</label>
                                            </td>
                                        @endif
                                        <td class="d-flex">
                                            <a href="{{ url('/show-users/' . $users->id) }}"
                                                class="btn btn-sm py-2 btn-info"><i class="fas fa-eye">
                                                </i></a>
                                            <a href="{{ url('/edit-users/' . $users->id) }}"
                                                class="btn btn-sm py-2 btn-warning mx-1"><i class="fas fa-edit">
                                                </i></a>
                                            <form id="deleteSweet" action="{{ route('deleteUsers', $users->id) }}"
                                                method="post">
                                                @csrf
                                                @method('DELETE')
                                                <button type="submit" class="btn btn-sm py-2 btn-danger"><i
                                                        class="fas fa-trash">
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
