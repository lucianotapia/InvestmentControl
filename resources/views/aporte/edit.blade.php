@extends('home')

@section('content')
    <form method="POST" action="/aporte/{{ $aporte->idAporte }}">
        @csrf
        @method('patch')
        @include('aporte.partials.form')
    </form>
@endsection