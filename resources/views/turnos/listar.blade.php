@extends('layouts')

@section('content')

  <div class="container-fluid">
    <div class="card shadow mb-3 card text-center">
      <div class="card-header py-3">


        <h2>
          Turnos
          <a href="{{ route('turnos.create') }}" class="btn btn-primary float-right">Nuevo turno</a>
        </h2>


          </div>
      <div class="card-body">
            <div class="table-responsive">
          <table class="table table-hover table-striped">



                      <thead>
                        <tr>
                          <th scope="col">ID</th>
                          <th scope="col">Descripcion</th>
                          <th scope="col">Hora Inicio</th>
                          <th scope="col">Hora Salida</th>
                          <th scope="col">Accion</th>
                        </tr>
                      </thead>
                      <tbody>
                        @foreach($turnos as $turno)
                        <tr>
                          <th>{{ $turno->id }}</th>
                          <td>{{ $turno->descripcion }}</td>
                          <td>{{ $turno->hora_inicio }}</td>
                          <td>{{ $turno->hora_salida }}</td>
                          <td>
                            <a href="{{ route('turnos.edit',$turno->id) }}" class="btn btn-info">Editar</a>
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