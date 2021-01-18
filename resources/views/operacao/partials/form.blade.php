<div class="card">
    <div class="card-header">
        <h4>Cadastro de Operações</h4>
    </div>
    
    <div class="card-body">
        <div class="row">
            <div class="col">
                <label for="exampleFormControlInput1" class="form-label">Ticker</label>
                <input type="text" name="ticker" class="form-control" value="{{ old('operacao', $operacao->ticker)  }}">
            </div>
            <div class="col">
                <label for="exampleFormControlInput1" class="form-label">Operação</label>
                <input type="text" class="form-control" name="operacao" value="{{ old('operacao', $operacao->operacao)  }}">                
            </div>
        </div>

        <div class="row">
            <div class="col">
                <label for="exampleFormControlInput1" class="form-label">Data</label>
                <input type="text" name="data" id="data" class="datapicker form-control" autocomplete="off" value="{{ old('operacao', $operacao->data)  }}">
            </div>

            <div class="col">
                <label for="exampleFormControlInput1" class="form-label">Quantidade</label>
                <input type="text" class="form-control" name="qtde" value="{{ old('operacao', $operacao->qtde)  }}">
            </div>
        
            <div class="col">
                <label for="exampleFormControlInput1" class="form-label">Valor R$</label>
                <input type="text" class="form-control" name="valor" value="{{ old('operacao', $operacao->valor)  }}">
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
    <script type="text/javascript" src="{{ asset('js/operacao.js') }}"></script>
@endsection