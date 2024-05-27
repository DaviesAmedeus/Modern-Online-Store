@include('layouts.partials.navbar')
@extends('layouts.dashboard')
@section('content')

<div class="card mb-3">
    <div class="card-header text-center text-muted"><h3>Receipts</h3></div>  
</div>
@forelse ($viewData["orders"] as $order)
    <div class="card mb-4">
        <div class="card-header">
        Order #{{ $order->getId() }}
        </div>
        <div class="card-body">
        <b>Date:</b> {{ $order->getCreatedAt() }}<br /><b>Total:</b> ${{ $order->getTotal() }}<br />
            <table class="table table-bordered table-striped text-center mt-3">
            <thead>
                <tr>
                    <th scope="col">Item ID</th>
                    <th scope="col">Product Name</th>
                    <th scope="col">Price</th>
                    <th scope="col">Quantity</th>
                </tr>
            </thead>
            <tbody>
            @foreach ($order->getItems() as $item)
            <tr>
                <td>{{ $item->getId() }}</td>
                <td>
                    <a class="link-success" href="{{ route('product.show', ['id'=> $item->getProduct()->getId()]) }}">
                    {{ $item->getProduct()->getName() }}
                    </a>
                </td>
                <td>${{ $item->getPrice() }}</td>
                <td>{{ $item->getQuantity() }}</td>
            </tr>
            @endforeach
            </tbody>
            </table>
        </div>
    </div>
@empty
<div class="alert alert-danger" role="alert">
Seems to be that you have not purchased anything in our store =(.
</div>
@endforelse




{{-- @if()


@else
<div class="card">
    <div class="card-header text-center text-muted"><h3>No Receipts</h3></div>
    
</div>
@endif --}}
@endsection