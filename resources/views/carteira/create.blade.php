@extends('home')

@section('content')
    <form method="post" action="/carteira">
        @csrf
        @include('carteira.partials.form')
    </form>
@endsection