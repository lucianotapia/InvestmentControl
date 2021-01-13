@extends('home')

@section('content')
    <form method="post" action="/aporte">
        @csrf
        @include('aporte.partials.form')
    </form>
@endsection