@extends('layouts.app')

@section('title', 'Dashboard')

@section('content')

<div class="card card-default">
  <div class="card-header">
    <h3 class="card-title">Setting Profile</h3>
      <div class="card-tools">
        <button type="button" class="btn btn-tool" data-card-widget="collapse">
          <i class="fas fa-minus"></i>
        </button>
      </div>
    </div>
    <div class="card-body">
      <form action="{{ route('setting.update') }}" method="post">
        @csrf

        @foreach ($setting as $aa)
          <div class="form-group">
            <label>
                <i class="{{ $aa->icon }}"></i>
                {{ $aa->display_name }}
            </label>
            @if ($aa->form === 'text')
                <input type="text" class="form-control" name="{{ $aa->nama_setting }}" value="{{ $aa->value }}">
            @elseif ($aa->form === 'email')
                <input type="email" class="form-control" name="{{ $aa->nama_setting }}" value="{{ $aa->value }}">
            @elseif ($aa->form === 'number')
                <input type="number" class="form-control" name="{{ $aa->nama_setting }}" value="{{ $aa->value }}">
            @elseif ($aa->form === 'textarea')
                <textarea id="summernote" class="form-control" name="{{ $aa->nama_setting }}">{{ $aa->value }}</textarea>
            @endif
          </div>
        @endforeach
        <button type="submit" class="btn btn-primary">Save</button>
      </form>
    </div>
  </div>
</div>
@endsection
