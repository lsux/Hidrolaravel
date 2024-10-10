@extends('components.layout')

<x-layout>
    <h1 class="title">Hola {{ auth()->user()->username }}</h1>
</x-layout>
