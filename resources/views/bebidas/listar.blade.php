
@extends('layouts')

@section('content')

  <div class="container-fluid">
    <div class="card shadow mb-3 card text-center">
      <div class="card-header py-3">


        <h2>
          Listado de Bebidas
          <a href="{{ route('bebidas.create') }}" class="btn btn-primary float-right">Nueva Bebida</a>
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
                        @foreach($bebidas as $bebida)
                        <tr>
                          <th>{{ $bebida->id }}</th>
                          <td>{{ $bebida->nombre_bebida }}</td>
                          <td>{{ $bebida->precio_bebida }}</td>
                          <td>{{ $bebida->tipo_bebida->nombre }}</td>
                          <td>
                            <a href="{{ route('bebidas.edit',$bebida->id) }}" class="btn btn-info">Editar</a>
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