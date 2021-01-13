<li> {{ $aporte->data ?? '' }} - {{ $aporte->valor ?? '' }}- {{ $aporte->carteira_id ?? '' }}- {{ $aporte->conta_id ?? '' }}</li>
<li><a href="/aporte/{{ $aporte->idAporte }}/edit">Editar</a></li>
<li>
    <form action="/aporte/{{ $aporte->idAporte }}" method="post">
        @csrf
        @method('delete')
        <button type="submit" onclick="return confirm('Tem certeza?');">Apagar</button>
    </form>
</li>