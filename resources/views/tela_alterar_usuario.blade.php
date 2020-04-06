@extends('cadastro')
@section('conteudo')
      <h1 class="display-4">Alteração de Clientes</h1>	
      <form class="form-row" method="post" action="{{ route('alterar_usuario', ['id' => $u->id]) }}">
	@csrf
	
      <div class="form-group pr-3 pl-3 col-md-12">
	     <input type="text" class="form-control" name="nome" placeholder="Nome" value="{{ $u->nome }}">
	</div>

	<div class="form-group pr-3 pl-3 col-md-12">
	     <input type="text" class="form-control" name="endereco" placeholder="Endereço" value="{{ $u->endereco }}">
	</div>
	
	<div class="form-group col-md-6 pl-3">
	<input type="text" class="form-control" name="cidade" placeholder="Cidade" value="{{ $u->cidade }}">
	</div>
	<div class="form-group col-md-4">
	<select id="estado" name="estado" class="form-control">
            <option selected>{{ $u->estado }}</option>
            <option value="AC">Acre</option>
            <option value="AL">Alagoas</option>
            <option value="AP">Amapá</option>
            <option value="AM">Amazonas</option>
            <option value="BA">Bahia</option>
            <option value="CE">Ceará</option>
            <option value="DF">Distrito Federal</option>
            <option value="ES">Espírito Santo</option>
            <option value="GO">Goiás</option>
            <option value="MA">Maranhão</option>
            <option value="MT">Mato Grosso</option>
            <option value="MS">Mato Grosso do Sul</option>
            <option value="MG">Minas Gerais</option>
            <option value="PA">Pará</option>
            <option value="PB">Paraíba</option>
            <option value="PR">Paraná</option>
            <option value="PE">Pernambuco</option>
            <option value="PI">Piauí</option>
            <option value="RJ">Rio de Janeiro</option>
            <option value="RN">Rio Grande do Norte</option>
            <option value="RS">Rio Grande do Sul</option>
            <option value="RO">Rondônia</option>
            <option value="RR">Roraima</option>
            <option value="SC">Santa Catarina</option>
            <option value="SP">São Paulo</option>
            <option value="SE">Sergipe</option>
            <option value="TO">Tocantins</option>
         </select>
	</div>

	<div class="form-group pr-3 col-md-2">
	     <input type="text" class="form-control" name="cep" placeholder="CEP" value="{{ $u->cep }}">
	</div>

	<input type="submit" class="btn btn-primary" value="Alterar">
</form>
@endsection

