@extends('layouts.app')

@section('title', 'Artikel')

@section('content')

<div class="row">
    <div class="col-12">
        <div class="card">
            <div class="card-header">
                <h5 class="card-title">Artikel</h5>
                <a class="btn btn-primary btn-sm float-right" href="{{ route('artikel.create') }}">
                    <i class="fas fa-plus"></i>
                </a>
            </div>

            <div class="card-body">
                <div id="example2_wrapper" class="dataTables_wrapper dt-bootstrap4">
                    <div class="row">
                        <div class="col-sm-12">
                            <table id="example2" class="table table-bordered table-hover dataTable dtr-inline" aria-describedby="example2_info">
                                <thead>
                                    <tr>
                                        <th class="sorting" tabindex="0" aria-controls="example2" rowspan="1" colspan="1">No</th>
                                        <th class="sorting" tabindex="0" aria-controls="example2" rowspan="1" colspan="1">Judul</th>
                                        <th class="sorting" tabindex="0" aria-controls="example2" rowspan="1" colspan="1">Tanggal</th>
                                        <th class="sorting" tabindex="0" aria-controls="example2" rowspan="1" colspan="1">Deskripsi</th>
                                        <th class="sorting" tabindex="0" aria-controls="example2" rowspan="1" colspan="1">Foto</th>
                                        <th class="sorting" tabindex="0" aria-controls="example2" rowspan="1" colspan="1">File</th>
                                        <th class="sorting" tabindex="0" aria-controls="example2" rowspan="1" colspan="1">Aksi</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    @forelse ($artikel as $aa)
                                    <tr class="odd">
                                        <td>{{ $loop->iteration }}</td>
                                        <td>{{ $aa->judul }}</td>
                                        <td>{{ $aa->tanggal }}</td>
                                        <td>{{ $aa->deskripsi }}</td>
                                        <td>
                                            <button type="button" class="btn btn-primary btn-sm" data-toggle="modal" data-target="#gambar{{ $aa->id }}"><i class="fas fa-search"></i></button>
                                            <div class="modal fade" id="gambar{{ $aa->id }}" tabindex="-1" aria-modal="true">
                                                <div class="modal-dialog modal-md-8" role="document">
                                                    <div class="modal-content">
                                                        <div class="modal-header">
                                                            <h5 class="modal-title" id="exampleModalLabel1">Foto</h5>
                                                            <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                                                <span aria-hidden="true">×</span>
                                                            </button>
                                                        </div>
                                                        <div class="modal-body d-flex justify-content-center align-items-center">
                                                            <img src="{{ asset('artikel/gambar/' . $aa->gambar) }}" alt="gambar {{ $aa->gambar }}" style="max-width:200px;">
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </td>
                                        <td>
                                            <a href="{{ asset('artikel/file/' . $aa->file) }}" target="_blank">
                                            <i class="fas fa-search"></i>
                                        </a></td>
                                        <td>
                                            {{-- edit --}}
                                            <button type="button" class="btn btn-sm btn-warning" data-toggle="modal" data-target="#edit{{ $aa->id }}"><i class="nav-icon fas fa-edit"></i></button>
                                            <div class="modal fade" id="edit{{ $aa->id }}" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
                                                <div class="modal-dialog" role="document">
                                                    <form action="{{ route('artikel.edit') }}" method="post" enctype="multipart/form-data">
                                                        @csrf
                                                        @method('POST')
                                                        <input type="hidden" name="Artikel_id" value="{{ $aa->id }}">
                                                        <div class="modal-content">
                                                            <div class="modal-header">
                                                                <h5 class="modal-title" id="">Edit Artikel</h5>
                                                                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                                                    <span aria-hidden="true">×</span>
                                                                </button>
                                                            </div>
                                                            <div class="modal-body">
                                                                <div class="row">
                                                                    <div class="col mb-3">
                                                                        <label class="form-label">Judul</label>
                                                                        <input type="text" class="form-control" value="{{ old('judul', $aa->judul) }}" name="judul"/>
                                                                    </div>
                                                                </div>
                                                                <div class="row">
                                                                    <div class="col mb-3">
                                                                        <label class="form-label">Tanggal</label>
                                                                        <input type="date" class="form-control" value="{{ old('tanggal', $aa->tanggal) }}" name="tanggal"/>
                                                                    </div>
                                                                </div>
                                                                <div class="row">
                                                                    <div class="col mb-3">
                                                                        <label class="form-label">Deskripsi</label>
                                                                        <textarea id="summernote" class="form-control" name="deskripsi">{{ old('deskripsi', $aa->deskripsi) }}</textarea>
                                                                    </div>
                                                                </div>
                                                                <div class="row">
                                                                    </div>
                                                                    <div class="col mb-3">
                                                                        <label class="form-label">Gambar</label>
                                                                        <input type="file" class="form-control" name="gambar">{{ old('gambar', $aa->gambar) }}</input>
                                                                    </div>
                                                                </div>
                                                                <div class="row">
                                                                    <div class="col mb-3">
                                                                        <label class="form-label">File</label>
                                                                        <input type="file" class="form-control" name="file">{{ old('file', $aa->file) }}</input>
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

                                            <form action="{{ route('artikel.destroy', $aa->id) }}" method="POST" style="display:inline;">
                                                @csrf
                                                @method('DELETE')
                                                <button type="submit" class="btn btn-sm btn-danger" onclick="return confirm('Anda yakin ingin menghapus data ini?')"><i class="nav-icon fas fa-trash"></i></button>
                                            </form>
                                        </td>
                                    </tr>
                                    @empty
                                    <tr>
                                        <td colspan="7" class="text-center">Tidak ada data</td>
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
