<li> {{ $conta->corretora ?? '' }} - {{ $conta->conta ?? '' }}</li>
<li><a href="/conta/{{ $conta->idConta }}/edit">Editar</a></li>
<li>
    <form action="/conta/{{ $conta->idConta }}" method="post">
        @csrf
        @method('delete')
        <button type="submit" onclick="return confirm('Tem certeza?');">Apagar</button>
    </form>
</li>