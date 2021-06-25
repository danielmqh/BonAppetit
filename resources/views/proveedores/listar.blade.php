@extends('layouts')

@section('content')

  <div class="container-fluid">
    <div class="card shadow mb-3 card text-center">
      <div class="card-header py-3">


        <h2>
          Listado de Proveedores
          <a href="{{ route('proveedores.create') }}" class="btn btn-primary float-right">Nuevo Proveedor</a>
        </h2>


          </div>
      <div class="card-body">
            <div class="table-responsive">
          <table class="table table-hover table-striped">



                      <thead>
                        <tr>
                          <th scope="col">ID</th>
                          <th scope="col">Nombre</th>
                          <th scope="col">Direccion</th>
                          <th scope="col">Telefono</th>
                          <th scope="col">Email</th>
                          <th scope="col">Accion</th>
                        </tr>
                      </thead>
                      <tbody>
                        @foreach($proveedores as $proveedor)
                        <tr>
                          <th>{{ $proveedor->id }}</th>
                          <td>{{ $proveedor->nombre_proveedor }}</td>
                          <td>{{ $proveedor->direccion_proveedor }}</td>
                          <td>{{ $proveedor->telefono_proveedor }}</td>
                          <td>{{ $proveedor->email_proveedor }}</td>
                          <td>
                            <a href="{{ route('proveedores.edit',$proveedor->id) }}" class="btn btn-info">Editar</a>
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