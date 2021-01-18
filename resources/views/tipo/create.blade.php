@extends('home')

@section('content')
    <form method="POST" action="/tipo">
        @csrf
        @include('tipo.partials.form')
    </form>
@endsection