@extends('layouts')

@section('content')

  <div class="container-fluid">
    <div class="card shadow mb-3 card text-center">
      <div class="card-header py-3">


        <h2>
          Clientes
          <a href="{{ route('clientes.create') }}" class="btn btn-primary float-right">Nuevo Cliente</a>
        </h2>


          </div>
      <div class="card-body">
            <div class="table-responsive">
          <table class="table table-hover table-striped">



                      <thead>
                        <tr>
                          <th scope="col">ID</th>
                          <th scope="col">NOMBRE</th>
                          <th scope="col">APELLIDO PATERNO</th>
                          <th scope="col">C.I.</th>
                          <th scope="col">Accion</th>
                        </tr>
                      </thead>
                      <tbody>
                        @foreach($clientes as $cliente)
                        <tr>
                          <th>{{ $cliente->id }}</th>
                          <td>{{ $cliente->nomnbre }}</td>
                          <td>{{ $cliente->ap_paterno }}</td>
                          <td>{{ $cliente->ci }}</td>
                          <td>
                            <a href="{{ route('clientes.edit',$cliente->id) }}" class="btn btn-info">Editar</a>
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