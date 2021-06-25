@extends('layouts')

@section('content')

  <div class="container-fluid">
    <div class="card shadow mb-3 card text-center">
      <div class="card-header py-3">


        <h2>
          Listado de Mesas
          <a href="{{ route('mesas.create') }}" class="btn btn-primary float-right">Nueva Mesa</a>
        </h2>


          </div>
      <div class="card-body">
            <div class="table-responsive">
          <table class="table table-hover table-striped">



                      <thead>
                        <tr>
                          <th scope="col">ID</th>
                          <th scope="col">Mesas</th>
                          <th scope="col">Sillas</th>
                          <th scope="col">Descripcion</th>
                          <th scope="col">Accion</th>
                        </tr>
                      </thead>
                      <tbody>
                        @foreach($mesas as $mesa)
                        <tr>
                          <th>{{ $mesa->id }}</th>
                          <td>{{ $mesa->num_mesa }}</td>
                          <td>{{ $mesa->cantidad_silla_mesa }}</td>
                          <td>{{ $mesa->descripcion }}</td>

                          <td>
                            <a href="{{ route('mesas.edit',$mesa->id) }}" class="btn btn-info">Editar</a>
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