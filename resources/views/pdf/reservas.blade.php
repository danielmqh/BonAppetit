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
                <th>Cliente</th>
                <th>Fecha de reserva</th>
                <th>Hora de reserva</th>
                <th>Hora final de reserva</th>
                <th>Accion</th>
			</tr>
		</thead>
		<tbody>
			@foreach($reservas as $reserva)
            <tr>
                <td>{{ $reserva->id }}</td>
                <td>{{ $reserva->cliente->nomnbre }}</td>
                <td>{{ $reserva->fecha_reserva }}</td>
                <td>{{ $reserva->hora_reserva }}</td>
                <td>{{ $reserva->hora_fin_reserva }}</td>
            </tr>
            @endforeach
		</tbody>
	</table>
</body>
</html>