@extends('layouts')

@section('content')

  <div class="container-fluid">
    <div class="card shadow mb-3 card text-center">
      <div class="card-header py-3">


        <h2>
          Lista de Trabajadores
          <a href="{{ route('trabajadores.create') }}" class="btn btn-primary float-right">Nuevo trabajador</a>
        </h2>


          </div>
      <div class="card-body">
            <div class="table-responsive">
          <table class="table table-hover table-striped">



                      <thead>
                        <tr>
                          <th scope="col">ID</th>
                          <th scope="col">Nombre</th>
                          <th scope="col">Apellido</th>
                          <th scope="col">C.I.</th>
                          <th scope="col">Cargo</th>
                          <th scope="col">Turno</th>
                          <th scope="col">Aciones</th>
                        </tr>
                      </thead>
                      <tbody>
                        @foreach($trabajadores as $trabajador)
                        <tr>
                          <th>{{ $trabajador->id }}</th>
                          <td>{{ $trabajador->nombre }}</td>
                          <td>{{ $trabajador->ap_paterno }}</td>
                          {{-- <td>{{ $trabajador->ap_materno }}</td> --}}
                          <th>{{ $trabajador->ci }}</th>
                          {{-- <td>{{ $trabajador->genero }}</td> --}}
                          {{-- <td>{{ $trabajador->correo }}</td> --}}
                          {{-- <td>{{ $trabajador->telefono }}</td> --}}
                          <td>{{ $trabajador->cargo->nombre_cargo }}</td>
                          <td>{{ $trabajador->turno->descripcion }}</td>
                          <td>
                            <a href="{{ route('trabajadores.edit',$trabajador->id) }}" class="btn btn-info">Editar</a>
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
