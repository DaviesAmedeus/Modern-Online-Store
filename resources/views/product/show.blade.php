@extends('layouts.app')
@section('title', $viewData["title"])
@section('content')

<div class="card mt-5">
    <div class="row g-0">
        <div class="col-md-4">
        <img src="{{ asset('/storage/'.$viewData["product"]->getImage()) }}" class="img-fluid rounded-start">
        </div>
        <div class="col-md-8 align-self-center">
            <div class="card-body">
                <h5 class="card-title">{{ strtoupper($viewData["product"]->getName()) }}</h5>
                <p class="card-text">{!! $viewData["product"]->getDescription() !!}</p>
                <p class="card-text">
                    <form method="POST" action="{{ route('account.cart.add', ['id'=>$viewData["product"]->getId()]) }}">
                        <div class="row">
                        @csrf
                        <div class="col-auto">
                            <div class="input-group col-auto">
                                <div class="input-group-text">Quantity</div>
                                <input type="number" min="1" max="10" class="form-control quantity-input" name="quantity" value="1">
                            </div>
                        </div>
                        <div class="col-auto">
                            <button class="btn bg-primary text-white" type="submit">Add to cart</button>
                        </div>
                        </div>
                    </form>
                </p>
            </div>
        </div>
    </div>
</div>
@endsection