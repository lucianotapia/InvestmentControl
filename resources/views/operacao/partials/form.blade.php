Ticker: <input type="text" name="ticker" value="{{ old('operacao', $operacao->ticker)  }}">
Operacao: <input type="text" name="operacao" value="{{ old('operacao', $operacao->operacao)  }}">
Data: <input type="text" name="data" value="{{ old('operacao', $operacao->data)  }}">
Data: <input type="text" name="qtde" value="{{ old('operacao', $operacao->qtde)  }}">
Valor: <input type="text" name="valor" value="{{ old('operacao', $operacao->valor)  }}">

<button type="submit">Enviar</button>