@extends('layouts')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header">Pedidos</div>

                <div class="card-body">
                    <form action="{{ route('pedidos.store') }}" method="POST">
                      @csrf
                      <div class="form-group">
                        <label>Horario de Pedido</label>
                        <input type="time" class="form-control" name="fecha_pedido" placeholder="Nombre de trabajador" >
                      </div>
                      {{-- llave foranea de cliente --}}
                      <div class="form-group">
                        <label>Cliente</label>
                        <select name="id_clien" class="form-control">
                          @foreach($clientes as $cliente)
                          <option value="{{ $cliente->id }}">{{ $cliente->nomnbre }}</option>
                          @endforeach
                        </select>
                      </div>
                      {{-- llave foranea de mesa --}}
                      <div class="form-group">
                        <label>Mesas</label>
                        <select name="id_mes" class="form-control">
                          @foreach($mesas as $mesa)
                          <option value="{{ $mesa->id }}">{{ $mesa->descripcion }}</option>
                          @endforeach
                        </select>
                      </div>
                      {{-- llave foranea de trabajador --}}
                      <div class="form-group">
                        <label>Trabajador</label>
                        <select name="id_traba" class="form-control">
                          @foreach($trabajadores as $trabajador)
                          <option value="{{ $trabajador->id }}">{{ $trabajador->nombre }}</option>
                          @endforeach
                        </select>
                      </div>
                      <button type="submit" class="btn btn-primary">crear pedidos</button>
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
