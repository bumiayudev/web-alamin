@extends('admin.layout')
@section('content')

 <!-- Page Heading -->
<h1 class="h3 mb-2 text-gray-800">Tables</h1>
<p class="mb-4">Lihat semua data kegiatan yang ada di mushola al-amin.</p>

<!-- DataTales Example -->
<div class="card shadow mb-4">
    <div class="card-header py-3">
        <h6 class="m-0 font-weight-bold text-primary">Data semua agenda kegiatan mushola al-amin</h6>
        <div class="float-right">
            <a href="/activities/create" class="text-primary">Create</a>
        </div>
    </div>
    <div class="table-responsive">
        <table class="table table-bordered" id="dataTable" width="100%" cellspacing="0">
            <thead>
                <tr>
                    <th>No.</th>
                    <th>Name</th>
                    <th>Image</th>
                    <th>Created At</th>
                    <th>Creator</th>
                    <th>Action</th>
                </tr>
            </thead>
             <tbody>
                @foreach ($rows as $row )
                <tr>
                    <td>{{ $loop->iteration }}</td>
                    <td>{{ $row->name }}</td>
                    <td><img src="{{ asset('storage/public/'.$row->image) }}" alt="{{ $row->name }}" class="img-thumbnail" width="100" height="100"></td>
                    <td>{{ date_format($row->created_at, "d/m/y H:i:s") }}</td>
                    <td>{{ $row->uploaded_by }}</td>
                    <td><a href="/activities/{{ $row->id }}/edit" class="text-success">Edit</a>&nbsp;<a href="/activities/{{ $row->id }}/delete" class="text-danger">Delete</a></td>
                </tr>
                @endforeach
             </tbody>
        </table>
    </div>
</div>
@endsection
