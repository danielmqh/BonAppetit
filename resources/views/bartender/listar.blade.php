@extends('layouts')

@section('content')

  <div class="container-fluid">
    <div class="card shadow mb-3 card text-center">
      <div class="card-header py-3">


        <h2>
          Listado de Bartender
          <a href="{{ route('batender.create') }}" class="btn btn-primary float-right">Nuevo Bartender</a>
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
                        @foreach($batender as $batender)
                        <tr>
                          <th>{{ $batender->id }}</th>
                          <td>{{ $batender->bebida->nomnbre_bebida }}</td>
                          <td>{{ $batender->trabajador->nombre }}</td>
                          <td>
                            <a href="{{ route('batender.edit',$batender->id) }}" class="btn btn-info">Editar</a>
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