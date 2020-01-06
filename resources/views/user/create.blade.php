@extends('layouts.app')

@section('content')

<!-- Page Heading -->
<div class="d-sm-flex align-items-center justify-content-between mb-4">
    <h1 class="h3 mb-0 text-gray-800">Form Input Data</h1>
</div>

<div class="card uper col-md-6">
    <div class="card-body">
        @if ($errors->any())
        <div class="alert alert-danger">
            <ul>
                @foreach ($errors->all() as $error)
                <li>{{ $error }}</li>
                @endforeach
            </ul>
        </div><br />
        @endif
        <form method="post" action="">
            @csrf
            <div class="form-group">
                <label>Name</label>
                <input type="text" class="form-control" name="name" />
            </div>
            <div class="form-group">
                <label>Email</label>
                <input type="email" class="form-control" name="email" />
            </div>
            <div class="form-group">
                <label>Phone</label>
                <input type="text" class="form-control" name="phone" />
            </div>
            <div class="form-group">
                <label>Location</label>
                <input type="text" class="form-control" name="location" />
            </div>
            <div class="form-group">
                <label>Position</label>
                <input type="text" class="form-control" name="position" />
            </div>
            <button type="submit" class="btn btn-primary">Add Data</button>
        </form>
    </div>
</div>

@endsection
