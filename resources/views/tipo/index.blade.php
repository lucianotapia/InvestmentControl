@extends('home')

@section('content')
    @forelse($tipos as $tipo)
        @include('tipo.partials.fields') 
            <br/>
    @empty
        <h3>Não há Tipo cadastrado!</h3>
    @endforelse
@endsection