@include('layouts.partials.navbar')
@extends('layouts.admin')
@section('content')
<div class="card mb-4">
    <div class="card-header text-center"><h2>Edit Location</h2></div>
    <div class="card-body">

       

        {{-- This displays a  success message --}}
        @if(session()->has('success-message'))
        <div class="col-5 mx-auto alert alert-success text-center">
            <strong>{{ session('success-message') }}</strong> 
        </div>
        @endif
        
        <form method="POST" action="{{ route('admin.location.update', ['id'=>$viewData["location"]->getId()]) }}" novalidate enctype="multipart/form-data">
        @csrf
        @method('PUT')
       

        

        <div class="row justify-content-evenly">
            <div class="col-4">
                <div class="mb-3 row">
                    <div class="col-lg-10 col-md-6 col-sm-12">
                        <span class="text-danger">*</span>
                        <input name="name" placeholder="Location name..." value="{{ $viewData["location"]->getLocation() }}" type="text" class="form-control">
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
                        <input name="latitude" placeholder="latitude..." value="{{ $viewData["location"]->getLatitude() }}" type="number" class="form-control">
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
                    <input name="longitude" placeholder="longitude..." value="{{ $viewData["location"]->getLongitude() }}" type="number" class="form-control">
                    @error('longitude')
                        <span class="text-danger">{{ $message }}</span>
                    @enderror
                </div>
            </div>
            </div>
        </div>


        <div class="row">
            <div class="d-grid col-2 mx-auto">
                <button type="submit" class="btn btn-primary">Update Location</button>
            </div>
        </div>
        </form>
    </div>
</div>


@endsection