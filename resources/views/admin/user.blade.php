@extends('layouts.app')

@section('title', 'User')

@section('content')

<div class="row">
    <div class="col-12">
        <div class="card">
            <div class="card-header">
                <button type="button" class="btn btn-primary btn-sm" data-toggle="modal" data-target="#tambah"><i class="fas fa-user-plus"></i></button>
                <div class="modal fade" id="tambah" tabindex="-1" aria-modal="true">
                    <div class="modal-dialog" role="document">
                        <form action="{{ route('user.create') }}" method="POST">
                            @csrf
                            <div class="modal-content">
                                <div class="modal-header">
                                    <h5 class="modal-title" id="exampleModalLabel1">Tambah User</h5>
                                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                        <span aria-hidden="true">×</span>
                                    </button>
                                </div>
                                <div class="modal-body">
                                    <div class="row">
                                        <div class="col mb-3">
                                            <label class="form-label">Username</label>
                                            <input type="text" class="form-control" name="username" placeholder="Enter Username">
                                        </div>
                                    </div>
                                    <div class="row">
                                        <div class="col mb-3">
                                            <label class="form-label">Nama</label>
                                            <input type="text" class="form-control" name="nama" placeholder="Enter Name" required>
                                        </div>
                                    </div>
                                    <div class="row">
                                        <div class="col mb-3">
                                            <label class="form-label">Password</label>
                                            <input type="password" class="form-control" name="password" placeholder="********" required>
                                        </div>
                                    </div>
                                </div>
                                <div class="modal-footer">
                                    <button type="submit" class="btn btn-primary">Add</button>
                                </div>
                            </div>
                        </form>
                    </div>
                </div>
            </div>

            <div class="card-body">
                <div id="example2_wrapper" class="dataTables_wrapper dt-bootstrap4">
                    <div class="row">
                        <div class="col-sm-12">
                            <table id="example2" class="table table-bordered table-hover dataTable dtr-inline" aria-describedby="example2_info">
                                <thead>
                                    <tr>
                                        <th class="sorting" tabindex="0" aria-controls="example2" rowspan="1" colspan="1">No</th>
                                        <th class="sorting" tabindex="0" aria-controls="example2" rowspan="1" colspan="1">Username</th>
                                        <th class="sorting" tabindex="0" aria-controls="example2" rowspan="1" colspan="1">Nama</th>
                                        <th class="sorting" tabindex="0" aria-controls="example2" rowspan="1" colspan="1">Aksi</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    @forelse ($user as $aa)
                                    <tr class="odd">
                                        <td>{{ $loop->iteration }}</td>
                                        <td>{{ $aa->username }}</td>
                                        <td>{{ $aa->nama }}</td>
                                        <td>
                                            {{-- edit --}}
                                            <button type="button" class="btn btn-sm btn-warning" data-toggle="modal" data-target="#edit{{ $aa->id }}"><i class="nav-icon fas fa-edit"></i></button>
                                            <div class="modal fade" id="edit{{ $aa->id }}" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
                                                <div class="modal-dialog" role="document">
                                                    <form action="{{ route('user.edit') }}" method="post">
                                                        @csrf
                                                        @method('POST')
                                                        <input type="hidden" name="user_id" value="{{ $aa->id }}">
                                                        <div class="modal-content">
                                                            <div class="modal-header">
                                                                <h5 class="modal-title" id="">Edit User</h5>
                                                                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                                                    <span aria-hidden="true">×</span>
                                                                </button>
                                                            </div>
                                                            <div class="modal-body">
                                                                <div class="row">
                                                                    <div class="col mb-3">
                                                                        <label class="form-label">Username</label>
                                                                        <input type="text" class="form-control" value="{{ old('username', $aa->username) }}" name="username" required/>
                                                                    </div>
                                                                </div>
                                                                <div class="row">
                                                                    <div class="col mb-3">
                                                                        <label class="form-label">Nama</label>
                                                                        <input type="text" class="form-control" value="{{ old('nama', $aa->nama) }}" name="nama" required>
                                                                    </div>
                                                                </div>
                                                                <div class="row">
                                                                    <div class="col mb-3">
                                                                        <label class="form-label">Password</label>
                                                                        <input type="password" class="form-control" value="{{ old('password', $aa->password) }}" name="password" required>
                                                                    </div>
                                                                </div>
                                                            </div>
                                                            <div class="modal-footer">
                                                                <button type="submit" class="btn btn-primary">Save</button>
                                                            </div>
                                                        </div>
                                                    </form>
                                                </div>
                                            </div>

                                            <form action="{{ route('user.destroy', $aa->id) }}" method="POST" style="display:inline;">
                                                @csrf
                                                @method('DELETE')
                                                <button type="submit" class="btn btn-sm btn-danger" onclick="return confirm('Anda yakin ingin menghapus data ini?')"><i class="nav-icon fas fa-trash"></i></button>
                                            </form>
                                        </td>
                                    </tr>
                                    @empty
                                    <tr>
                                        <td colspan="4" class="text-center">Tidak ada data</td>
                                    </tr>
                                    @endforelse
                                </tbody>
                            </table>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>

@endsection
