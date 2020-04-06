@extends('template')
@section('conteudo')
	<h1 class="display-4">Lista de pessoas no BD</h1>
		<table class="table table-bordered">
		<thead>
			<tr>
				<th>ID</th>
				<th>Nome</th>
				<th>Endereço</th>
				<th>CEP</th>
				<th>Cidade</th>
				<th>Estado</th>
				<th>Operações</th>
                <th>Vendas</th>
			</tr>
		</thead>
		<tbody>
			@foreach ($usuarios as $u)
			<tr>
				<td>{{ $u->id }}</td>
				<td>{{ $u->nome }}</td>
				<td>{{ $u->endereco}}</td>
				<td>{{ $u->cep}}</td>
				<td>{{ $u->cidade}}</td>
				<td>{{ $u->estado}}</td>
				<td>
                	<a class="btn btn-primary" href="{{ route('atualizar_usuario', [ 'id' => $u->id ]) }}">Alterar</a>
                	<a class="btn btn-danger" href="#" onclick="exclui({{$u->id}})">Excluir</a>
                </td>
                <td>
                	<a class="btn btn-info" href="{{ route('venda_cadastro', [ 'id' => $u->id ]) }}">Vender</a>
                	<a class="btn btn-secondary" href="{{ route('listar_venda', [ 'id' => $u->id ]) }}">Mostrar vendas</a>
                </td>
			</tr>
			@endForeach
		</tbody>
	</table>
	<script>
    function exclui(id){
        if (confirm("Deseja excluir o usuário " + id + "?")){
            location.href = "/usuarios/excluir/" + id;
        }
    }
	</script>
@endsection