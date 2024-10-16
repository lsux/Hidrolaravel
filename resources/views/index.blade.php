@extends('components.layout')

@section('content')
    <x-nosotros />

    <x-acueductos acueductos={{$acueductos}}/>

    <x-noticias />

    <x-contacto />
@endsection
