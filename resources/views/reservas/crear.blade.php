@extends('layouts')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header">Reservas</div>

                <div class="card-body">
                    <form action="{{ route('reservas.store') }}" method="POST">
                      @csrf
                      {{-- <div class="form-group">
                        <label>nombre</label>
                        <input type="text" class="form-control" name="nombre" placeholder="Numero de mesas">
                      </div> --}}
                      <div class="form-group">
                        <div class="form-group">
                          <label>Cliente</label>
                          <select name="id_clien" class="form-control">
                            @foreach($clientes as $cliente)
                            <option value="{{ $cliente->id }}">{{ $cliente->nomnbre }}</option>
                            @endforeach
                          </select>
                        </div>
                        <label>Fecha de Reserva</label>
                        <input type="date" class="form-control" name="fecha_reserva" placeholder="Numero de mesas">
                      </div>
                      <div class="form-group">
                        <label>Hora de Reserva</label>
                        <input type="time" class="form-control" name="hora_reserva"  placeholder="cantidad de silla en mesa">
                      </div>
                      <div class="form-group">
                        <label>Hora Final de Reserva</label>
                        <input type="time" class="form-control" name="hora_fin_reserva" placeholder="Descripcion de mesas y sillas">
                      </div>
                      {{-- llave foranea de cliente --}}
                      
                      <button type="submit" class="btn btn-primary">crear Mesas</button>
                    </form>
                    
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
