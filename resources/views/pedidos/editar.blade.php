@extends('layouts')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header">Pedidos</div>

                <div class="card-body">
                    <form action="{{ route('pedidos.update',$pedidos->id) }}" method="POST">
                      @csrf
                      @method('put')
                      <div class="form-group">
                        <label>Horario de Pedido</label>
                        <input type="time" class="form-control" name="fecha_pedido" placeholder="Nombre de trabajador" value="{{ $pedidos->fecha_pedido }}">
                      </div>
                      
                      {{-- llave foranea de cargo --}}
                      <div class="form-group">
                        <label>Cliente</label>
                        <select name="id_clien" class="form-control">
                          @foreach($clientes as $cliente)
                            @if($cliente->id == $pedidos->cliente->id)
                              <option value="{{ $cliente->id }}" selected>{{ $cliente->nomnbre }}</option>
                            @else
                              <option value="{{ $cliente->id }}">{{ $cliente->nomnbre }}</option>
                            @endif
                          @endforeach
                        </select>
                      </div>
                      {{-- llave foranea de cargo --}}
                      <div class="form-group">
                        <label>Mesas</label>
                        <select name="id_mes" class="form-control">
                          @foreach($mesas as $mesa)
                            @if($mesa->id == $pedidos->mesa->id)
                              <option value="{{ $mesa->id }}" selected>{{ $mesa->descripcion }}</option>
                            @else
                              <option value="{{ $mesa->id }}">{{ $mesa->descripcion }}</option>
                            @endif
                          @endforeach
                        </select>
                      </div>
                      {{-- llave foranea de turno --}}
                      <div class="form-group">
                        <label>Trabajador</label>
                        <select name="id_traba" class="form-control">
                          @foreach($trabajadores as $trabajador)
                            @if($trabajador->id == $pedidos->trabajador->id)
                            <option value="{{ $trabajador->id }}" selected>{{ $trabajador->nombre }}</option>
                            @else
                              <option value="{{ $trabajador->id }}">{{ $trabajador->nombre }}</option>
                            @endif
                          @endforeach
                        </select>
                      </div>

                      <button type="submit" class="btn btn-primary">Guardar datos</button>
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
