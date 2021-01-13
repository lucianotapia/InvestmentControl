@extends('home')

@section('content')    
    @forelse($aportes as $aporte)
        @include('aporte.partials.fields') 
            <br/>
    @empty
        <h3>Não há aportes cadastrado!</h3>
    @endforelse    
@endsection