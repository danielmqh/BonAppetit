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
				<th>Nombre</th>
				<th>Direccion</th>
				<th>Telefono</th>
				<th>Email</th>
			  </tr>
		</thead>
		<tbody>
			@foreach($proveedores as $proveedor)
                        <tr>
                          <th>{{ $proveedor->id }}</th>
                          <td>{{ $proveedor->nombre_proveedor }}</td>
                          <td>{{ $proveedor->direccion_proveedor }}</td>
                          <td>{{ $proveedor->telefono_proveedor }}</td>
                          <td>{{ $proveedor->email_proveedor }}</td>
                        </tr>
                        @endforeach
		</tbody>
	</table>
</body>
</html>