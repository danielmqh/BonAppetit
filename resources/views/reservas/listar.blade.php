@extends('layouts')

@section('content')

  <div class="container-fluid">
    <div class="card shadow mb-3 card text-center">
      <div class="card-header py-3">


        <h2>
          Listado de Reservas
          <a href="{{ route('reservas.create') }}" class="btn btn-primary float-right">Nueva Mesa</a>
        </h2>


          </div>
      <div class="card-body">
            <div class="table-responsive">
          <table class="table table-hover table-striped">



                      <thead>
                        <tr>
                          <th scope="col">ID</th>
                          <th scope="col">Cliente</th>
                          <th scope="col">Fecha de reserva</th>
                          <th scope="col">Hora de reserva</th>
                          <th scope="col">Hora final de reserva</th>
                          <th scope="col">Accion</th>
                        </tr>
                      </thead>
                      <tbody>
                        @foreach($reservas as $reserva)
                        <tr>
                          <th>{{ $reserva->id }}</th>
                          <td>{{ $reserva->cliente->nomnbre }}</td>
                          <td>{{ $reserva->fecha_reserva }}</td>
                          <td>{{ $reserva->hora_reserva }}</td>
                          <td>{{ $reserva->hora_fin_reserva }}</td>

                          <td>
                            <a href="{{ route('reservas.edit',$reserva->id) }}" class="btn btn-info">Editar</a>
                          </td>
                        </tr>
                        @endforeach
                      </tbody>




          </table>
        </div>
      </div>
    </div>
  </div>
@endsection