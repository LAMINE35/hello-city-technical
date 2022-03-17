@extends('app')

@section('content')
    <img src="{{ asset('images/senegal-flag.png') }}" alt="Senegal Flag">

    <h1>Hello from Thies!</h1>

    <p>It's currently {{ date('h:i A') }}.</p>
@endsection
