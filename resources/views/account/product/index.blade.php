@include('layouts.partials.navbar')
@extends('layouts.dashboard')
@section('content')

@if (count($viewData["products"])>0)
<div class="card">
    <div class="card-header text-center text-muted"><h3>My Products</h3></div>
    <div class="card-body">
        <table class="table table-borderless table-striped">
        <thead>
            <tr>
                <th scope="col">Product</th>
                <th scope="col">Location</th>
                <th scope="col">DateTime-created</th>
                
            </tr>
        </thead>
            <tbody>
            @foreach ($viewData["products"] as $product)
            <tr class="align-middle">
                <td>{{ $product->getName() }}</td>
                <td>{{ $product->getLocation() }}</td>
                <td>{{ $product->getCreatedAt() }}</td>
                <td></td>
                <td class="align-middle">
                    <a class="btn btn-primary" href="{{ route('account.product.edit', ['id'=>$product->getId()]) }}">
                        <i class="bi-pencil"></i>
                    </a>
                </td>
                <td class="">
                    <form action="{{ route('account.product.delete', ['id'=>$product->getId()]) }}" method="POST">
                        @csrf
                        @method('DELETE')
                        <button class="mt-3 btn btn-danger">
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
{{ $viewData["products"]->links() }}
</div>

@else
<div class="card">
    <div class="card-header text-center text-muted"><h3>No Product Categories</h3></div>
    
</div>
@endif

<div class="card mb-4">
    <div class="card-header text-center"><h2>Add Product</h2></div>
    <div class="card-body">

       

        {{-- This displays a  success message --}}
        @if(session()->has('success-message'))
        <div class="col-5 mx-auto alert alert-success text-center">
            <strong>{{ session('success-message') }}</strong> 
        </div>
        @endif
        
        <form method="POST" action="{{ route('account.product.store') }}" novalidate enctype="multipart/form-data">
        @csrf
       

        

        <div class="row justify-content-center">
            
            

            <div class="col-8 ">
                <div class="mb-3 row">
                    <div class="col-lg-10 col-md-6 col-sm-12">
                        <span class="text-danger">*</span>
                        <input name="name" placeholder="Product name..." value="{{ old('name') }}" type="text" class="form-control">
                        @error('name')
                        <span class="text-danger">{{ $message }}</span>
                        @enderror
                    </div>
                </div>
            </div>

            <div class="col-8 ">
                <div class="mb-3 row">
                    <div class="col-lg-10 col-md-6 col-sm-12 d-block">
                        
                        <textarea name="description" placeholder="Product description..." class="form-control" id="" cols="30" rows="5">{{ old('description') }}</textarea>
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
                        <input name="price" placeholder="Price..." value="{{ old('price') }}" type="number" class="form-control">
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
                        <select name="category" class="form-select form-select-lg" aria-label="Small select" id="inputSelectSmall">
                            <option selected="" class="text-muted">Category...</option>
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
                            <option selected="" class="text-muted">Location...</option>
                            @foreach ($viewData["locations"] as $location )
                            <option value="{{ $location->getLocation() }}">{{ $location->getLocation() }}</option>
                            @endforeach
                          </select>                        @error('name')
                        <span class="text-danger">{{ $message }}</span>
                        @enderror
                    </div>
                </div>
            </div>
            

            <div class="col-8 ">
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