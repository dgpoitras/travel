@extends('layouts.app')

@section('title')
Customers
@stop

@section('content')
 <div class="container-fluid">
        <h1>Customer List</h1>
        <div class="col-md-8">
        @if(session()->get('success'))
            <div class="alert alert-success">
                {{ session()->get('success') }}
            </div><br />
        @endif
        <table class="table">
            <thead>
                <tr scope="row">
                    <th scope="col">Name</th>
                    <th scope="col">Phone Number</th>
                    <th scope="col">Email</th>
                    <th scope="col"></th>
                </tr>
            </thead>
            <tbody>
                @foreach ($customers as $cust) 
                    <tr scope='row'>
                        <td>{{ $cust->CustFirstName }} {{ $cust->CustLastName }}</td>
                        <td>{{ $cust->CustHomePhone }}</td>
                        <td>{{ $cust->CustEmail }}</td>
                        <td><a href="{{ route('customers.edit', $cust->CustomerId) }}" class="btn btn-primary">Edit</a></td>
                    </tr>
                @endforeach
            </tbody>
        </table>
        </div>
    </div>
@stop