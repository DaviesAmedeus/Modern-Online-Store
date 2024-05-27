@include('layouts.partials.navbar')
@extends('layouts.admin')
@section('content')
<div class="card mb-4">
    <div class="card-header text-center"><h2>Add Location</h2></div>
    <div class="card-body">

       

        {{-- This displays a  success message --}}
        @if(session()->has('success-message'))
        <div class="col-5 mx-auto alert alert-success text-center">
            <strong>{{ session('success-message') }}</strong> 
        </div>
        @endif
        
        <form method="POST" action="{{ route('admin.location.store') }}" novalidate enctype="multipart/form-data">
        @csrf
       

        

        <div class="row justify-content-evenly">
            <div class="col-4">
                <div class="mb-3 row">
                    <div class="col-lg-10 col-md-6 col-sm-12">
                        <span class="text-danger">*</span>
                        <input name="name" placeholder="Location name..." value="{{ old('name') }}" type="text" class="form-control">
                        @error('name')
                        <span class="text-danger">{{ $message }}</span>
                        @enderror
                    </div>
                </div>
            </div>

            <div class="col-4">
                <div class="mb-3 row">
                    <div class="col-lg-10 col-md-6 col-sm-12">
                        <span class="text-danger">*</span>
                        <input name="latitude" placeholder="latitude..." value="{{ old('latitude') }}" type="number" class="form-control">
                        @error('latitude')
                        <span class="text-danger">{{ $message }}</span>
                        @enderror
                    </div>
                </div>
            </div>
            <div class="col-4">
            <div class="mb-3 row">
                <div class="col-lg-10 col-md-6 col-sm-12">
                    <span class="text-danger">*</span>
                    <input name="longitude" placeholder="longitude..." value="{{ old('longitude') }}" type="number" class="form-control">
                    @error('longitude')
                        <span class="text-danger">{{ $message }}</span>
                    @enderror
                </div>
            </div>
            </div>
        </div>


        <div class="row">
            <div class="d-grid col-2 mx-auto">
                <button type="submit" class="btn btn-primary">Add Location</button>
                {{-- <button type="button" class="btn btn-primary mt-3" data-bs-toggle="modal" data-bs-target="#staticBackdrop">
                    Add Location
                </button> --}}
            </div>
          
        </div>


        

        </form>
    </div>
</div>

@if (count($viewData["locations"])>0)
<div class="card">
    <div class="card-header text-center text-muted"><h3>Manage Locations</h3></div>
    <div class="card-body">
        <table class="table table-bordered table-striped">
        <thead>
            <tr>
                <th scope="col">Location</th>
                <th scope="col">Edit</th>
                <th scope="col">Delete</th>
            </tr>
        </thead>
            <tbody>
            @foreach ($viewData["locations"] as $location)
            <tr>
                <td>{{ $location->getLocation() }}</td>
                <td>
                    <a class="btn btn-primary" href="{{ route('admin.location.edit', ['id'=>$location->getId()]) }}">
                        <i class="bi-pencil"></i>
                    </a>
                </td>
                <td>
                    <form action="{{ route('admin.location.delete', ['id'=>$location->getId()]) }}" method="POST">
                        @csrf
                        @method('DELETE')
                        <button class="btn btn-danger">
                             <i class="bi-trash"></i>
                        </button>
                    </form>
                </td>
            </tr>
            
            @endforeach
            </tbody>
        </table>
    </div>
</div> 
<div class="mt-3">
    {{ $viewData["locations"]->links() }}
    </div>
@else
<div class="card">
    <div class="card-header text-center text-muted"><h3>No Locations Availble</h3></div>
</div>
@endif

@endsection