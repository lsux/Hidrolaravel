@extends('components.layout')

@auth
    <h1>Logged In</h1>
@endauth

@section('content')
    <x-nosotros />

    <x-acueductos />

    <x-noticias />

    <x-contacto />
@endsection
