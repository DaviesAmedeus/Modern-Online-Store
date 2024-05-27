@include('layouts.partials.navbar')
@extends('layouts.dashboard')
@section('content')
<div class="card mb-4">
    <div class="card-header text-center"><h2>Edit Product</h2></div>
    <div class="card-body">

       

        {{-- This displays a  success message --}}
        @if(session()->has('success-message'))
        <div class="col-5 mx-auto alert alert-success text-center">
            <strong>{{ session('success-message') }}</strong> 
        </div>
        @endif
        
        <form method="POST" action="{{ route('account.product.update', ['id'=>$viewData["product"]->getId()]) }}" novalidate enctype="multipart/form-data">
        @csrf
        @method('PUT')
       

        

        <div class="row justify-content-center">
            
            

            <div class="col-8 ">
                <div class="mb-3 row">
                    <div class="col-lg-10 col-md-6 col-sm-12">
                        <span class="text-danger">*</span>
                        <input name="name" placeholder="Product name..." value="{{ $viewData["product"]->getName() }}" type="text" class="form-control">
                        @error('name')
                        <span class="text-danger">{{ $message }}</span>
                        @enderror
                    </div>
                </div>
            </div>

            <div class="col-8 ">
                <div class="mb-3 row">
                    <div class="col-lg-10 col-md-6 col-sm-12 d-block">
                        
                        <textarea name="description" placeholder="Product description..." class="form-control" id="" cols="30" rows="5">{{ $viewData["product"]->getDescription() }}</textarea>
                        @error('description')
                        <span class="text-danger">{{ $message }}</span>
                        @enderror
                    </div>
                </div>
            </div>

            <div class="col-8">
                <div class="mb-3 row">
                    <div class="col-lg-10 col-md-6 col-sm-12 d-block">
                        <span class="text-danger">*</span>
                        <input name="price" placeholder="Price..." value="{{ $viewData["product"]->getPrice() }}" type="number" class="form-control">
                        @error('price')
                        <span class="text-danger">{{ $message }}</span>
                        @enderror
                    </div>
                </div>
            </div>

            <div class="col-8 ">
                <div class="mb-3 row">
                    <div class="col-lg-10 col-md-6 col-sm-12 d-block">
                        <span class="text-danger">*</span>
                        <select name="category"  class="form-select form-select-lg" aria-label="Small select" id="inputSelectSmall">
                            <option  value="{{ $viewData["product"]->getCategory() }}" class="text-muted">{{ $viewData["product"]->getCategory() }}</option>
                            @foreach ($viewData["categories"] as $category )
                            <option  value="{{ $category->getCategory() }}">{{ $category->getCategory() }}</option>
                            @endforeach
                          </select>                        
                          @error('category')
                        <span class="text-danger">{{ $message }}</span>
                        @enderror
                    </div>
                </div>
            </div>


            <div class="col-8 ">
                <div class="mb-3 row">
                    <div class="col-lg-10 col-md-6 col-sm-12 d-block">
                        <span class="text-danger">*</span>
                        <select name="location" class="form-select form-select-lg" aria-label="Small select" id="inputSelectSmall">
                            <option  value="{{ $viewData["product"]->getLocation() }}" class="text-muted">{{ $viewData["product"]->getLocation() }}</option>
                            @foreach ($viewData["locations"] as $location )
                            <option value="{{ $location->getLocation() }}">{{ $location->getLocation() }}</option>
                            @endforeach
                          </select>                        
                          @error('location')
                        <span class="text-danger">{{ $message }}</span>
                        @enderror
                    </div>
                </div>
            </div>
            
            <div class="col-8 text-center">
                <div class="mb-3 row">
                    <div class="col-lg-10 col-md-6 col-sm-12 d-block">
                        <img src="{{ asset('storage/' . $viewData["product"]->getImage() ) }}" alt="Image with rounded corners" class="rounded">
                    </div>
                </div>
            </div>

            <div class="col-8  ">
                <div class="mb-3 row">
                    <div class="col-lg-10 col-md-6 col-sm-12 d-block">
                        <span class="text-danger">*</span>
                        <input type="file" class="form-control" name="image" id="file">
                        @error('image')
                        <span class="text-danger">{{ $message }}</span>
                        @enderror
                    </div>
                </div>
            </div>

           
            
        </div>

       


        <div class="row justify-content-center">
            <div class="col-2 mx-auto">
                <button type="submit" class="btn btn-primary">Add Product</button>
                
            </div>
          
        </div>


        

        </form>
    </div>
</div>


@endsection