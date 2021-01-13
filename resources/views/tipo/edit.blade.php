@extends('home')

@section('content')
    <form method="POST" action="/tipo/{{ $tipo->id }}">
        @csrf
        @method('patch')
        @include('tipo.partials.form')
    </form>
@endsection