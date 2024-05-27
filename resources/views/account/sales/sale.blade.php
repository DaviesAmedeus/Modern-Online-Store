@include('layouts.partials.navbar')
@extends('layouts.dashboard')
@section('content')
   {{-- @foreach ($viewData['sales'] as $sale)
   {{ $sale->product->name }}
       
   @endforeach   --}}


   @if (count($viewData["sales"])>0)
<div class="card">
    <div class="card-header text-center text-muted"><h3>Your Product Sales Records</h3></div>
    <div class="card-body">
        <table class="table table-bordered table-striped">
        <thead>
            <tr>
                <th scope="col">Product Name</th>
                <th scope="col">No of sales</th>
                <th scope="col">Amount generated</th>
             
            </tr>
        </thead>
            <tbody>
            @foreach ($viewData["sales"] as $sale)
            
            <tr>
                <td>{{ $sale->product->name }}</td>
                <td>{{ $sale->total_sales }}</td>
                <td></td>
            
                
            </tr>
            
          
            @endforeach
            </tbody>
        </table>
    </div>
</div>
<div class="mt-3">
    {{ $viewData["sales"]->links() }}
    </div>
@else
<div class="card">
    <div class="card-header text-center text-muted"><h3>No Sales Yet</h3></div>
    
</div>
@endif
@endsection