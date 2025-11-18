@extends('admin.layout')
@section('content')

 <!-- Page Heading -->
<h1 class="h3 mb-1 text-gray-800">Activities/create</h1>
<p class="mb-4">To create a new data. please, enter with complete</p>

<!-- Content Row -->
<div class="row">

    <div class="col-lg-6">

        <!-- Overflow Hidden -->
        @if (session('success'))
        <div class="alert alert-success alert-dismissible" role="alert">
            {{ session('success') }}.
        </div>
        @endif
        <div class="card mb-4">
            <div class="card-header py-3">
                <h6 class="m-0 font-weight-bold text-primary">Create a new data</h6>
            </div>
            <div class="card-body">
                <form action="{{ route('activities.store') }}" method="POST" enctype="multipart/form-data">
                    @csrf
                    <div class="form-group">
                        <label for="name" class="form-label">Activity Name</label>
                        <input type="text" class="form-control" name="name">
                        @error('name')
                        <span class="text-danger mt-2">{{ $message }}</span>
                        @enderror
                    </div>
                    <div class="form-group">
                        <label for="content" class="form-label">Content</label>
                        <textarea class="form-control" name="content"></textarea>
                        @error('content')
                        <span class="text-danger mt-2">{{ $message }}</span>
                        @enderror
                    </div>
                    <div class="form-group">
                        <label for="image" class="form-label">Image</label>
                        <input type="file" class="form-control" name="image">
                        @error('image')
                        <span class="text-danger mt-2">{{ $message }}</span>
                        @enderror
                    </div>
                    <button type="submit" class="btn btn-primary">Save</button>
                </form>
            </div>
        </div>
    </div>
</div>
@endsection
