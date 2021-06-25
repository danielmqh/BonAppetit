<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title></title>
	<style>
		.table {
			width: 100%;
			border: 1px solid #999999;
		}
	</style>
</head>
<body>
	<table class="table">
		<thead>
			<tr>
				<th>ID</th>
				<th>NOMBRE</th>
				<th>APELLIDO PATERNO</th>
				<th>C.I.</th>
			  </tr>
		</thead>
		<tbody>
			@foreach($clientes as $cliente)
                        <tr>
                          <th>{{ $cliente->id }}</th>
                          <td>{{ $cliente->nomnbre }}</td>
                          <td>{{ $cliente->ap_paterno }}</td>
                          <td>{{ $cliente->ci }}</td>
                        </tr>
            @endforeach
		</tbody>
	</table>
</body>
</html>