@extends('template_venda')
@section('venda')
  <h1 class="display-4">Vendas do Usuário</h1>
    <form method="post" action="{{ route('venda_add', ['id' => $u->id]) }}">
        @csrf
     <div class="form-row">
      <div class="form-group pr-3 pl-3 col-md-12">
        <label for="nome1">Informe o Produto</label>
        <input type="text" name="descricao" class="form-control" id="nome1">
      </div>
    </div>
    <div class="form-row">
      <div class="form-group pr-3 pl-3 col-md-12">
        <label for="nome1">Informe o valor do Produto</label>
        <input type="text" name="valor" class="form-control" id="nome1">
      </div>
    </div>
    <div class="form-group pl-3 col-md-12">
      <button type="submit" class="btn btn-success">Enviar</button>
    </div>
  </form>
@endsection