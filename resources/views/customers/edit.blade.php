@extends('layouts.app')

@section('title')Customers@stop

@section('content')
 <div class="container-fluid">
        <h1>Customer List</h1>
        <div class="col-md-8">
            @if ($errors->any())
                <div class="alert alert-danger">
                    <ul>
                        @foreach ($errors->all() as $error)
                            <li>{{ $error }}</li>
                        @endforeach
                    </ul>
                </div>
            @endif
            <form action="{{route('customers.update', $customer->CustomerId) }}" method="post">
                @method('PUT')
                @csrf
                <div class="from-group">
                    <label for="CustFirstName">First Name: </label>
                    <input type="text" name="CustFirstName" class="form-control" value={{$customer->CustFirstName}}>
                </div>
                <div class="from-group">
                    <label for="CustLastName">Last Name: </label>
                    <input type="text" name="CustLastName" class="form-control" value={{$customer->CustLastName}}>
                </div>
                <div class="from-group">
                    <label for="CustAddress">Address: </label>
                    <input type="text" name="CustAddress" class="form-control" value={{$customer->CustAddress}}>
                </div>
                <div class="from-group">
                    <label for="CustCity">City: </label>
                    <input type="text" name="CustCity" class="form-control" value={{$customer->CustCity}}>
                </div>
                <div class="from-group">
                    <label for="CustProv">Province: </label>
                    <input type="text" name="CustProv" class="form-control" value={{$customer->CustProv}}>
                </div>
                <div class="from-group">
                    <label for="CustPostal">Postal Code: </label>
                    <input type="text" name="CustPostal" class="form-control" value={{$customer->CustPostal}}>
                </div>
                <div class="from-group">
                    <label for="CustCountry">Country: </label>
                    <input type="text" name="CustCountry" class="form-control" value={{$customer->CustCountry}}>
                </div>
                <div class="from-group">
                    <label for="CustHomePhone">Home Phone Number: </label>
                    <input type="text" name="CustHomePhone" class="form-control" value={{$customer->CustHomePhone}}>
                </div>
                <div class="from-group">
                    <label for="CustBusPhone">Business Phone Number: </label>
                    <input type="text" name="CustBusPhone" class="form-control" value={{$customer->CustBusPhone}}>
                </div>
                <div class="from-group">
                    <label for="CustEmail">Email: </label>
                    <input type="text" name="CustEmail" class="form-control" value={{$customer->CustEmail}}>
                </div>
                <div class="from-group">
                    <input type="hidden" name="AgentId" class="form-control" value={{$customer->AgentId}}>
                </div>
                <div class="form-group">
                    <button type="submit" class="btn btn-primary">Update</button>
                </div>
            </form>
        </div>
    </div>
@stop