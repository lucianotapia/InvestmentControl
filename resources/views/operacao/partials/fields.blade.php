<li> {{ $operacao->ticker ?? '' }} - {{ $operacao->data ?? '' }} - {{ $operacao->operacao ?? '' }} - {{ $operacao->qtde ?? '' }}</li>
<li><a href="/operacao/{{ $operacao->idOperacao }}/edit">Editar</a></li>
<li>
    <form action="/operacao/{{ $operacao->idOperacao }}" method="post">
        @csrf
        @method('delete')
        <button type="submit" onclick="return confirm('Tem certeza?');">Apagar</button>
    </form>
</li>