@extends('app')

@section('title', 'About Us | ' . config('app.name'))

@section('content')
    <p>Built with &hearts; by Technical Boy.</p>

    <p><a href="{{ route('home') }}">Revenir a la page d'accueil</a></p>
@endsection
