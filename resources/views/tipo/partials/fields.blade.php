<li> {{ $tipo->descricao ?? '' }} - {{ $tipo->sigla ?? '' }}</li>
<li><a href="/tipo/{{ $tipo->idTipo }}/edit">Editar</a></li>
<li>
    <form action="/tipo/{{ $tipo->idTipo }}" method="post">
        @csrf
        @method('delete')
        <button type="submit" onclick="return confirm('Tem certeza?');">Apagar</button>
    </form>
</li>