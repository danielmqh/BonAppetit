@extends('layouts')

@section('content')

  <div class="container-fluid">
    <div class="card shadow mb-3 card text-center">
      <div class="card-header py-3">


        <h2>
          Lista de Horarios de Reservas
          <a href="{{ route('horarioreservas.create') }}" class="btn btn-primary float-right">Nuevo trabajador</a>
        </h2>


          </div>
      <div class="card-body">
            <div class="table-responsive">
          <table class="table table-hover table-striped">



                      <thead>
                        <tr>
                          <th scope="col">ID</th>
                          <th scope="col">Mañana</th>
                          <th scope="col">Tarde</th>
                          <th scope="col">Noche</th>
                          <th scope="col">Horario disponibles</th>
                          <th scope="col">Reservas</th>
                          <th scope="col">Mesas</th>
                          <th scope="col">Accion</th>
                        </tr>
                      </thead>
                      <tbody>
                        @foreach($horarioreservas as $horarioreserva)
                        <tr>
                          <th>{{ $horarioreserva->id }}</th>
                          <td>{{ $horarioreserva->mañana }}</td>
                          <td>{{ $horarioreserva->tarde }}</td>
                          <td>{{ $horarioreserva->noche }}</td>
                          <td>{{ $horarioreserva->horario_disponible }}</td>
                          <td>{{ $horarioreserva->reserva->fecha_reserva }}</td>
                          <td>{{ $horarioreserva->mesa->descripcion }}</td>
                          <td>
                            <a href="{{ route('horarioreservas.edit',$horarioreserva->id) }}" class="btn btn-info">Editar</a>
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
