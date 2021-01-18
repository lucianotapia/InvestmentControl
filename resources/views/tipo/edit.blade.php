@extends('home')

@section('content')
    <form method="post" action="/tipo/{{ $tipo->idTipo }}">
        @csrf
        @method('PATCH')
        @include('tipo.partials.form')
    </form>
@endsection