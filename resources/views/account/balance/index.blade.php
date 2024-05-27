@include('layouts.partials.navbar')
@extends('layouts.dashboard')
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
    <h3 class="text-muted">Balance Details</h3>
    </div>
        <div class="card-body">
            <table class="table table-bordered table-striped text-center">
                <thead>
                    <tr>
                        <th scope="col">Name</th>
                        <th scope="col">Amount</th>
                    </tr>
                </thead>
                <tbody>
                    <tr>
                        <td class="text-start text-muted"><div class="ms-4"><strong>{{ Auth::user()->name }}, {{ Auth::user()->email }}</strong></div></td>
                        <td class="text-muted"><strong>TZS: {{ Auth::user()->balance }}</strong></td>
                    </tr>
                </tbody>
            </table>
            <div class="row">
                <div class="text-end">
                <a href="#" class="btn btn-outline-secondary mb-2"><strong>Recharge</strong><a>
                <a href="#" class="btn btn-outline-primary  mb-2"><strong>Transfer fund</strong></a>
                </div>
            </div>
        </div>
    </div>


@endsection