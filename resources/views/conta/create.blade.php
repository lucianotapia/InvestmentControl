@extends('home')

@section('content')
    <form method="post" action="/conta">
        @csrf
        @include('conta.partials.form')
    </form>
@endsection