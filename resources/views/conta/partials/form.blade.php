<div class="card">
    <div class="card-header">
        Cadastro de Carteira    
    </div>
    
    <div class="card-body">
        <div class="row">
            <div class="col">
                <label for="exampleFormControlInput1" class="form-label">Corretora</label>
                <input type="text" name="corretora" class="form-control" value="{{ old('conta', $conta->corretora)  }}">
            </div>
            <div class="col">
                <label for="exampleFormControlInput1" class="form-label">Conta</label>
                <input type="text" name="conta" class="form-control" value="{{ old('conta', $conta->conta)  }}">
            </div>
        </div>
        
        <div class="row text-center mt-3">    
            <div class="col">
                <button type="submit" class="btn btn-secondary">Enviar</button>
            </div>
        </div>
    </div>
    
</div>