@extends('layouts')

@section('content')

  <div class="container-fluid">
    <div class="card shadow mb-3 card text-center">
      <div class="card-header py-3">


        <h2 name="title">
          Listado de categorias
          <a href="{{ route('tipo_platos.create') }}" class="btn btn-primary float-right">Nueva categoria</a>
        </h2>


          </div>
      <div class="card-body">
            <div class="table-responsive">
          <table class="table table-hover table-striped">



                      <thead>
                        <tr>
                          <th scope="col">ID</th>
                          <th scope="col">Categoria</th>
                          <th scope="col">Accion</th>
                        </tr>
                      </thead>
                      <tbody>
                        @foreach($tipo_platos as $tipo_plato)
                        <tr>
                          <th>{{ $tipo_plato->id }}</th>
                          <td>{{ $tipo_plato->nombre_tipo_plato }}</td>
                          <td>
                            <a href="{{ route('tipo_platos.edit',$tipo_plato->id) }}" class="btn btn-info">Editar</a>
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
