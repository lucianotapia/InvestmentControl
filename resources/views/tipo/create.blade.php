@extends('home')

@section('content')
    <form method="post" action="/tipo">
        @csrf
        @include('tipo.partials.form')
    </form>
@endsection