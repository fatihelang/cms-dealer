@extends('layouts.app')

@section('title', 'Tambah Artikel')

@section('content')

<div class="row">
    <div class="col-md-12">
        <div class="card card-default">
            <div class="card-header">
                <h3 class="card-title">Dropzone.js <small><em>jQuery File Upload</em> like look</small></h3>
            </div>
            <div class="card-body">
                <div id="actions" class="row">
                    <div class="col-lg-6">
                        <div class="btn-group">
                            <span class="btn btn-success col fileinput-button">
                                <i class="fas fa-plus"></i>
                                <span>Add files</span>
                            </span>
                        </div>
                    </div>
                </div>
                <div class="table table-striped files" id="previews">
                    <div id="template" class="row mt-2">
                        <div class="col-auto">
                            <span class="preview">
                                <img src="data:," alt="" data-dz-thumbnail />
                            </span>
                        </div>
                        <div class="col d-flex align-items-center">
                            <p class="mb-0">
                                <span data-dz-name></span>
                                (<span data-dz-size></span>)
                            </p>
                            <strong class="error text-danger" data-dz-errormessage></strong>
                        </div>
                        <div class="col-auto d-flex align-items-center">
                            <div class="btn-group">
                              <button data-dz-remove class="btn btn-danger delete">
                                <i class="fas fa-trash"></i>
                                <span>Delete</span>
                              </button>
                            </div>
                          </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
