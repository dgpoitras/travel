@extends('layouts.app')

@section('title')Customers@stop

@section('content')
 <div class="container-fluid">
        <h1>Customer List</h1>
        <div class="col-md-8">
        <table class="table">
            <thead>
                <tr scope="row">
                    <th scope="col">Name</th>
                    <th scope="col">Phone Number</th>
                    <th scope="col">Email</th>
                </tr>
            </thead>
            <tbody>
                @foreach ($customers as $cust) 
                    <tr scope='row'>
                        <td>{{ $cust->CustFirstName }} {{ $cust->CustLastName }}</td>
                        <td>{{ $cust->CustHomePhone }}</td>
                        <td>{{ $cust->CustEmail }}</td>
                    </tr>
                @endforeach
            </tbody>
        </table>
        </div>
    </div>
@stop