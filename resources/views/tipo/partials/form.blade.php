<div class="card">
    <div class="card-header">
        Cadastro de Tipo    
    </div>
    
    <div class="card-body">
        <div class="row">
            <div class="col">
                <label for="exampleFormControlInput1" class="form-label">Descrição</label>
                <input type="text" name="descricao" class="form-control" value="{{ old('tipo', $tipo->descricao)  }}">
            </div>
            <div class="col">
                <label for="exampleFormControlInput1" class="form-label">Sigla</label>
                <input type="text" name="sigla" class="form-control" value="{{ old('tipo', $tipo->sigla)  }}">
            </div>
        </div>    
        
        <div class="row text-center mt-3">    
            <div class="col">
                <button type="submit" class="btn btn-secondary">Enviar</button>
            </div>
        </div>
    </div>
</div>