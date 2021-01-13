@extends('home')

@section('content')    
    @forelse($carteiras as $carteira)
        @include('carteira.partials.fields') 
            <br/>
    @empty
        <h3>Não há Carteira cadastrado!</h3>
    @endforelse
@endsection