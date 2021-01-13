@extends('home')

@section('content')
    @forelse($contas as $conta)
        @include('conta.partials.fields') 
            <br/>
    @empty
        <h3>Não há contas cadastrada!</h3>
    @endforelse
@endsection    