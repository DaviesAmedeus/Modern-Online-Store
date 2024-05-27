@include('layouts.partials.navbar')
@extends('layouts.admin')
@section('content')
<div class="card mb-4">
    <div class="card-header text-center"><h2>Add Product Category</h2></div>
    <div class="card-body">

        @if($errors->any())
            <ul class="col-5 mx-auto alert alert-danger list-unstyled text-center">
        @foreach($errors->all() as $error)
           <strong><li>- {{ $error }}</li></strong> 
        @endforeach
            </ul>
        @endif

        @if(session()->has('success-message'))
        <div class="col-5 mx-auto alert alert-success text-center">
            <strong>{{ session('success-message') }}</strong> 
        </div>
        @endif
        
        <form method="POST" action="{{ route('admin.category.store') }}" enctype="multipart/form-data">
        @csrf
        

        

       

        <div class="row">
            <div class="d-grid pb-3 col-4 mx-auto">
                <input name="category" placeholder="Category name..." value="{{ old('category') }}" type="text" class="form-control">
            </div>
        </div>


            <div class="row">
                <div class="d-grid col-2 mx-auto">
                    <button type="submit" class="btn btn-primary">Add Category</button>
                </div>
            </div>
        </form>
    </div>
</div>

@if (count($viewData["categories"])>0)
<div class="card">
    <div class="card-header text-center text-muted"><h3>Product Categories</h3></div>
    <div class="card-body">
        <table class="table table-bordered table-striped">
        <thead>
            <tr>
                <th scope="col">Category</th>
                <th scope="col">Edit</th>
                <th scope="col">Delete</th>
            </tr>
        </thead>
            <tbody>
            @foreach ($viewData["categories"] as $category)
            <tr>
                <td>{{ $category->getCategory() }}</td>
                <td>
                    <a class="btn btn-primary" href="{{ route('admin.category.edit', ['id'=>$category->getId()]) }}">
                        <i class="bi-pencil"></i>
                    </a>
                </td>
                <td>
                    <form action="{{ route('admin.category.delete', ['id'=>$category->getId()]) }}" method="POST">
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
    {{ $viewData["categories"]->links() }}
    </div>
@else
<div class="card">
    <div class="card-header text-center text-muted"><h3>No Product Categories</h3></div>
    
</div>
@endif
@endsection