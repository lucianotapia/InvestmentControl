<div class="card">
    <div class="card-header">
        Cadastro de Aportes    
    </div>
    
    <div class="card-body">
        <div class="row">
            <div class="col">
                <label for="exampleFormControlInput1" class="form-label">Carteira</label>
                <select name="carteira_id" class="form-select">
                    <option value="" selected>Selecione uma carteira</option>
                    @foreach($aporte::carteiras() as $carteira)
                        @if( old('carteira_id') == '')
                            <option value="{{$carteira->idCarteira}}" {{ $aporte->carteira_id==$carteira->idCarteira ? 'selected':'' }}>
                                {{ $carteira->sigla }}
                            </option>
                            "Aporte carteira_id" {{ $aporte->carteira_id }}
                            "Carteira idcarteira" {{ $carteira->idCarteira }}
                        @else
                            <option value="{{$carteira->idCarteira}}" {{ (old('carteira_id')==$carteira->idCarteira) ? 'selected':'' }}>
                                {{ $carteira->sigla }}
                            </option>
                            "Aporte carteira_id" {{ $aporte->carteira_id }}
                            "Carteira idcarteira" {{ $carteira->idCarteira }}
                        @endif
                    @endforeach
                </select>
            </div>

            <div class="col">
                <label for="exampleFormControlInput1" class="form-label">Conta</label>
                <select name="conta_id" class="form-select">
                    <option value="" selected>Selecione uma carteira</option>
                    @foreach($aporte::contas() as $conta)
                        @if( old('conta_id') == '')
                        <option value="{{$conta->idConta}}" {{ $aporte->conta_id==$conta->idConta ? 'selected':'' }}>
                            {{ $conta->corretora }}
                        </option>
                    @else
                        <option value="{{$conta->idConta}}" {{ (old('carteira_id')==$conta->idConta) ? 'selected':'' }}>
                            {{ $conta->corretora }}
                        </option>
                    @endif
                    @endforeach
                </select>
            </div>
        </div>

        <div class="row">
            <div class="col">
                <label for="exampleFormControlInput1" class="form-label">Data</label>
                <input type="text" name="data" id='data' class="datapicker form-control" autocomplete="off" value="{{ old('aporte', $aporte->data) }}">
            </div>
            <div class="col">
                <label for="exampleFormControlInput1" class="form-label">Valor</label>
                <input type="text" name="valor" class="form-control" value="{{ old('aporte', $aporte->valor) }}">
            </div>
        </div>

        <div class="row text-center mt-3">    
            <div class="col">
                <button type="submit" class="btn btn-secondary">Enviar</button>
            </div>
        </div>
    </div>
</div>

@section('javascripts_bottom')
    <script type="text/javascript" src="{{ asset('js/aporte.js') }}"></script>
@endsection