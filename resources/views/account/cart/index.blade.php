@extends('layouts.app')
@section('title', $viewData["title"])
@section('content')

 {{-- This displays a  success message --}}
 @if(session()->has('warning-message'))
 <div class="col-5 mx-auto alert alert-warning text-center mt-5">
     <strong>Oops! {{ Auth::user()->name }}, {{ session('warning-message') }}</strong>
     <p>Please recharge your account balance to continue.</p>
 </div>
 @endif

<div class="card mt-5">
    <div class="card-header">
    <h3 class="text-muted">Products in Cart</h3>
    </div>
        <div class="card-body">
            <table class="table table-bordered table-striped text-center">
                <thead>
                    <tr>
                        <th scope="col">Name</th>
                        <th scope="col">Price</th>
                        <th scope="col">Quantity</th>
                    </tr>
                </thead>
                <tbody>
                @foreach ($viewData["products"] as $product)
                    <tr>
                        <td class="text-start"><div class="ms-4">{{ $product->getName() }}</div></td>
                        <td>${{ $product->getPrice() }}</td>
                        <td>{{ session('products')[$product->getId()] }}</td>
                    </tr>
                @endforeach
                </tbody>
            </table>
            <div class="row">
                <div class="text-end">
                <a class="btn btn-outline-secondary mb-2"><b>Total to pay:</b> ${{ ($viewData["total"]) }}</a>
                @if (count($viewData["products"]) > 0)
                <a href="{{ route('account.cart.purchase') }}" class="btn bg-primary text-white mb-2">Purchase</a>
                <a href="{{ route('account.cart.delete') }}">
                    <button class="btn btn-danger mb-2">
                    Remove all products from Cart
                    </button>
                </a>
                @endif
                </div>
            </div>
        </div>
    </div>
@endsection