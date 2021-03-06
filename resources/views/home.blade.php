@extends('layouts.app')

@section('title')
    Home
@stop

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <h1>Welcome to Travel Experts</h1>
            <h2>We would like to help you see the world!</h2>
            <table class="table">
                <thead>
                    <tr>
                        <th class="col">Image</th>
                        <th class="col">Destination</th>
                    </tr>
                </thead>
                <tbody>
                    @foreach($destinations as $url => $label)
                        <tr class='row'><td>image</td>
                        <td><a href='{{$url}}' target='_blank'>{{$label}}</td></tr>
                    @endforeach
                </tbody>
            </table>
        </div>
    </div>
</div>
@endsection
