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

<div class="welcome-section">
        <div id="carouselCaptions" class="carousel slide text-dark" data-bs-ride="carousel">
            <div class="carousel-inner">
              <div class="carousel-item active">
                <div class="carousel-caption">
                    <h3>Sell or Buy any item you wish</h3>
                    <p>Just search what you want</p>
                  </div>
                <img src="{{ asset('/img/background_img/slides/slide1.jpg') }}" alt="First slide" class="d-block w-100 h-50 rounded">
                
              </div>
              <div class="carousel-item">
                <div class="carousel-caption">
                    <h3>Use any device you wish</h3>
                  </div>
                <img src="{{ asset('/img/background_img/slides/slide2.jpg') }}" alt="Second slide" class="d-block w-100">
                
              </div>
              <div class="carousel-item">
                <img src="{{ asset('/img/background_img/slides/slide3.jpg') }}" alt="Third slide" class="d-block w-100">
                <div class="carousel-caption">
                  <h3>Secure your transactions</h3>
                </div>
              </div>
              <div class="carousel-item">
                <div class="carousel-caption">
                    <h3>Decide how yo deliver</h3>
                  </div>
                <img src="{{ asset('/img/background_img/slides/slide4.jpg') }}" alt="Fourth slide" class="d-block w-100">
                
              </div>
            </div>
          </div>

    </div>


</div>


@endsection