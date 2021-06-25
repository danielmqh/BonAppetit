@extends('layouts')

@section('content')

  <div class="container-fluid">
    <div class="card shadow mb-3 card text-center">
      <div class="card-header py-3">


        <h2>
          Lista de Pedidos
          <a href="{{ route('pedidos.create') }}" class="btn btn-primary float-right">Nuevo trabajador</a>
        </h2>


          </div>
      <div class="card-body">
            <div class="table-responsive">
          <table class="table table-hover table-striped">



                      <thead>
                        <tr>
                          <th scope="col">ID</th>
                          <th scope="col">Horario de pedidos</th>
                          <th scope="col">cliente</th>
                          <th scope="col">Mesa</th>
                          <th scope="col">Trabajador</th>
                          {{-- <th scope="col">Aciones</th> --}}
                        </tr>
                      </thead>
                      <tbody>
                        @foreach($pedidos as $pedido)
                        <tr>
                          <th>{{ $pedido->id }}</th>
                          <td>{{ $pedido->fecha_pedido }}</td>
                          <td>{{ $pedido->cliente->nomnbre }}</td>
                          <td>{{ $pedido->mesa->descripcion }}</td>
                          <td>{{ $pedido->trabajador->nombre }}</td>
                          {{-- <td>
                            <a href="{{ route('pedidos.edit',$pedido->id) }}" class="btn btn-info">Editar</a>
                          </td> --}}
                        </tr>
                        @endforeach
                      </tbody>




          </table>
        </div>
      </div>
    </div>
  </div>
@endsection
