@extends('admin.layout')
@section('content')

 <!-- Page Heading -->
<h1 class="h3 mb-1 text-gray-800">Structures/edit</h1>
<p class="mb-4">Edit data</p>

<!-- Content Row -->
<div class="row">

    <div class="col-lg-6">

        @if (session('success'))
        <div class="alert alert-success alert-dismissible">
            {{ session('success') }}.
        </div>
        @endif
        <!-- Overflow Hidden -->
        <div class="card mb-4">
            <div class="card-header py-3">
                <h6 class="m-0 font-weight-bold text-primary">Edit data</h6>
            </div>
            <div class="card-body">
                <form action="{{ route('structures.update', $row->id) }}" method="POST">
                    @csrf
                    <div class="form-group">
                        <label for="name" class="form-label">Full Name</label>
                        <input type="text" class="form-control" name="name" value="{{ $row->name }}">
                        @error('name')
                        <span class="text-danger mt-2">{{ $message }}</span>
                        @enderror
                    </div>
                    <div class="form-group">
                        <label for="position" class="form-label">Position</label>
                        <input type="text" class="form-control" name="position" value="{{ $row->position }}">
                        @error('position')
                        <span class="text-danger mt-2">{{ $message }}</span>
                        @enderror
                    </div>
                    <button type="submit" class="btn btn-primary">Update</button>
                </form>
            </div>
        </div>
    </div>
    <div class="col-lg-6">
        @if (session('message'))
        <div class="alert alert-success alert-dismissible">
            {{ session('message') }}.
        </div>
        @endif
        <div class="card mb-4">
            <div class="card-header py-3">
                <h6 class="m-0 font-weight-bold text-primary">Upload File(jpg,jpeg,png)</h6>
            </div>
            <div class="card-body">
                <form action="{{ route('structures.update_file', $row->id) }}" method="POST" enctype="multipart/form-data">
                    @csrf
                    <div class="form-group">
                        <label for="image" class="form-label">Image</label>
                        <input type="file" class="form-control" name="image">
                        @error('image')
                        <span class="text-danger mt-2">{{ $message }}</span>
                        @enderror
                    </div>
                    <button type="submit" class="btn btn-primary">Update</button>
                </form>
            </div>
        </div>
    </div>
</div>
@endsection
