@extends('layouts.app')

@section('title')
{{$customer->CustLastName}}
@stop

@section('content')
<div class="container-fluid">
        <div class="col-md-8">
            <div class="card">
            <div class="card-header">
                <h3>
                    {{$customer->CustFirstName}} {{$customer->CustLastName}}
                </h3>
                <a href="{{route('customers.edit', $customer->CustomerId)}}" class="btn btn-primary">Edit</a>
            </div>
            <div class="card-body">
                <h3 class="card-title">Address:</h3>
                <p class="card-text">
                    {{$customer->CustAddress}}<br>
                    {{$customer->CustCity}}, {{$customer->CustProv}} {{$customer->CustPostal}}<br>
                    {{$customer->CustCountry}}<br>
                </p>
            </div>
            <div class="list-group list-group-flush">
                <li class="list-group-item">Email address: {{$customer->CustEmail}}</li>
                <li class="list-group-item">Home Phone: {{$customer->CustHomePhone}}</li><li class="list-group-item">Business Phone: {{$customer->CustBusPhone}}</li>
            </div>
        </div>
    </div>
    </div>
@stop
