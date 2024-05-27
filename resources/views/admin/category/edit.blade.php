@include('layouts.partials.navbar')
@extends('layouts.admin')
@section('content')
<div class="card mb-4">
    <div class="card-header text-center"><h2>Update Product Category</h2></div>
    <div class="card-body">

        @if($errors->any())
            <ul class="col-5 mx-auto alert alert-danger list-unstyled text-center">
        @foreach($errors->all() as $error)
           <strong><li>- {{ $error }}</li></strong> 
        @endforeach
            </ul>
        @endif

       
        <form method="POST" action="{{ route('admin.category.update', ['id'=>$viewData["category"]->getId()]) }}" enctype="multipart/form-data">
        @csrf
        @method('PUT')
        

        <div class="row">
            <div class="d-grid pb-3 col-4 mx-auto">
                <input name="category" placeholder="Category name..." value="{{ $viewData["category"]->getCategory() }}" type="text" class="form-control">
            </div>
        </div>


            <div class="row">
                <div class="d-grid col-2 mx-auto">
                    <button type="submit" class="btn btn-primary">Update Category</button>
                </div>
            </div>
        </form>
    </div>
</div>



@endsection