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
				<th>Horario de pedidos</th>
				<th>cliente</th>
				<th>Mesa</th>
				<th>Trabajador</th>
			  </tr>
		</thead>
		<tbody>
			@foreach($pedidos as $pedido)
            <tr>
                <th>{{ $pedido->id }}</th>
                <td>{{ $pedido->fecha_pedido }}</td>
                <td>{{ $pedido->cliente->nomnbre }}</td>
                <td>{{ $pedido->mesa->descripcion }}</td>
                <td>{{ $pedido->trabajador->nombre }}</td>
            </tr>
            @endforeach
		</tbody>
	</table>
</body>
</html>