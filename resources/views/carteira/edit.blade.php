@extends('home')

@section('content')    
    <form method="POST" action="/carteira/{{ $carteira->idCarteira }}">
        @csrf
        @method('patch')
        @include('carteira.partials.form')
    </form>
@endsection