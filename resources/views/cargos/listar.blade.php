@extends('layouts')

@section('content')

  <div class="container-fluid">
    <div class="card shadow mb-3 card text-center">
      <div class="card-header py-3">


        <h2>
          Listado de Cargos
          <a href="{{ route('cargos.create') }}" class="btn btn-primary float-right">Nuevo Cargo</a>
        </h2>


          </div>
      <div class="card-body">
            <div class="table-responsive">
          <table class="table table-hover table-striped">



                      <thead>
                        <tr>
                          <th scope="col">ID</th>
                          <th scope="col">Nombre</th>
                          <th scope="col">Sueldo</th>
                          <th scope="col">Accion</th>
                        </tr>
                      </thead>
                      <tbody>
                        @foreach($cargos as $cargo)
                        <tr>
                          <th>{{ $cargo->id }}</th>
                          <td>{{ $cargo->nombre_cargo }}</td>
                          <td>{{ $cargo->sueldo }}</td>
                          <td>
                            <a href="{{ route('cargos.edit',$cargo->id) }}" class="btn btn-info">Editar</a>
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