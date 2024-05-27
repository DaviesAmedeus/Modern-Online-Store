@extends('layouts.app')
@section('title', $viewData["title"])
@section('content')



<div class="row pt-5">
    <div class="row" id="products">
        @foreach ($viewData["products"] as $product)
            <div class="col-md-4 col-lg-3 mb-2">
                <div class="card">
                    <img src="{{$product->getImage() ? asset('storage/' . $product->getImage() ) : asset('assets/img/defaults/default.jpg') }}" class="card-img-top img-card">
                    <div class="card-body text-center">
                        <div class="row d-flex">
                            <p class="col text-muted text-start">{{ $product->getLocation() }}</p>
                            @foreach ($viewData["locations"] as $location )
                                @if ($location->name == $product->getLocation())
                                <p class="col text-muted text-end latitude"  style="display: none">{{$location->latitude}}</p>
                                <p class="col text-muted text-end longitude"  style="display: none">{{$location->longitude}}</p>   
   
                                @endif
                            @endforeach
                            
                        </div>
                      
                            <a href="{{ route('product.show', ['id'=>$product->getId()]) }}" class=" btn bg-primary text-white text-center">{{ $product["name"] }}</a>
                            <p class=" text-end"><strong>TZS </strong>{{ $product->getPrice() }}</p>
                        
                        
                    </div>
                </div>
            </div>
        @endforeach

</div>




@endsection