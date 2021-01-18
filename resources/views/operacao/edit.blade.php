@extends('home')

@section('content')  
    <form method="POST" action="/operacao/{{ $operacao->idOperacao }}">
        @csrf
        @method('patch')
        @include('operacao.partials.form')
    </form>
@endsection