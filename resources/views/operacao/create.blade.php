@extends('home')

@section('content')  
    <form method="post" action="/operacao">
        @csrf
        @include('operacao.partials.form')
    </form>
@endsection