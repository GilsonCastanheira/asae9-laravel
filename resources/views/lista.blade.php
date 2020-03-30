<!DOCTYPE html>
<html>
<head>
	<title>Lista de pessoas</title>
	<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/css/bootstrap.min.css" integrity="sha384-MCw98/SFnGE8fJT3GXwEOngsV7Zt27NXFoaoApmYm81iuXoPkFOJwJ8ERdknLPMO" crossorigin="anonymous">

	<style>
		h1{
			font-weight: lighter;
		}
	</style>
</head>
<body style="margin: 5px">
	<h1>Lista de pessoas no BD</h1>
		<table class="table table-bordered">
		<thead >
			<tr>
				<th>ID</th>
				<th>Nome</th>
				<th>Endereço</th>
				<th>CEP</th>
				<th>Cidade</th>
				<th>Estado</th>
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
			</tr>
			@endForeach
		</tbody>
	</table>
	<script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
	<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.3/umd/popper.min.js" integrity="sha384-ZMP7rVo3mIykV+2+9J3UJ46jBk0WLaUAdn689aCwoqbBJiSnjAK/l8WvCWPIPm49" crossorigin="anonymous"></script>
	<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/js/bootstrap.min.js" integrity="sha384-ChfqqxuZUCnJSK3+MXmPNIyE6ZbWh2IMqE241rYiqJxyMiZ6OW/JmZQ5stwEULTy" crossorigin="anonymous"></script>
</body>
</html>