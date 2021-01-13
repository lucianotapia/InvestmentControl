@extends('home')

@section('content')
    <form method="POST" action="/conta/{{ $conta->idConta }}">
        @csrf
        @method('patch')
        @include('conta.partials.form')
    </form>
@endsection