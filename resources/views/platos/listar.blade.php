
@extends('layouts')

@section('content')

  <div class="container-fluid">
    <div class="card shadow mb-3 card text-center">
      <div class="card-header py-3">


        <h2 name="title">
          Listado de Platos
          <a href="{{ route('platos.create') }}" class="btn btn-primary float-right">Nuevo Plato</a>
        </h2>


          </div>
      <div class="card-body">
            <div class="table-responsive">
          <table class="table table-hover table-striped">



                      <thead>
                        <tr>
                          <th scope="col">ID</th>
                          <th scope="col">Nombre</th>
                          <th scope="col">Precio</th>
                          <th scope="col">Tipo</th>
                          <th scope="col">Aciones</th>
                        </tr>
                      </thead>
                      <tbody>
                        @foreach($platos as $plato)
                        <tr>
                          <th>{{ $plato->id }}</th>
                          <td>{{ $plato->nombre_plato }}</td>
                          <td>{{ $plato->precio_plato }}</td>
                          <td>{{ $plato->tipo_plato->nombre_tipo_plato }}</td>
                          <td>
                            <a href="{{ route('platos.edit',$plato->id) }}" class="btn btn-info">Editar</a>
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