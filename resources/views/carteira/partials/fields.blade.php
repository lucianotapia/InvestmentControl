<li> {{ $carteira->descricao ?? '' }} - {{ $carteira->sigla ?? '' }}</li>
<li><a href="/carteira/{{ $carteira->idCarteira }}/edit">Editar</a></li>
<li>
    <form action="/carteira/{{ $carteira->idCarteira }}" method="post">
        @csrf
        @method('delete')
        <button type="submit" onclick="return confirm('Tem certeza?');">Apagar</button>
    </form>
</li>