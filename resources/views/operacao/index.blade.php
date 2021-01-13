@forelse($operacoes as $operacao)
    @include('operacao.partials.fields') 
        <br/>
@empty
    <h3>Não há Operação cadastrada!</h3>
@endforelse