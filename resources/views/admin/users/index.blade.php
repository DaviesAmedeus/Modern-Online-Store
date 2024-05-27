@include('layouts.partials.navbar')
@extends('layouts.admin')
@section('content')

@if (count($viewData["users"])>0)
<div class="card">
    <div class="card-header text-center text-muted"><h3>User Records</h3></div>
    <div class="card-body">
        <table class="table table-bordered table-striped">
        <thead>
            <tr>
                <th scope="col">Name</th>
                <th scope="col">Email</th>
                <th scope="col">No of products</th>
                <th scope="col">Sold products products</th>
                <th scope="col">Income generated</th>
                <th scope="col">Balance</th>
            </tr>
        </thead>
            <tbody>
            @foreach ($viewData["users"] as $user)
            
            <tr>
                <td>{{ $user->getName() }}</td>
                <td>{{ $user->getEmail() }}</td>
                <td>{{ @count($user->getProducts()) }}</td>
                <td>{{ @count($user->getProducts()) }}</td>
                <td>NIL</td>
                <td>{{$user->getBalance()}}</td>
                
            </tr>
            
          
            @endforeach
            </tbody>
        </table>
    </div>
</div>
<div class="mt-3">
    {{ $viewData["users"]->links() }}
    </div>
@else
<div class="card">
    <div class="card-header text-center text-muted"><h3>No Product Categories</h3></div>
    
</div>
@endif


@endsection