@extends('layouts')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header">Horario de Reserva</div>

                <div class="card-body">
                    <form action="{{ route('horarioreservas.store') }}" method="POST">
                      @csrf
                      <div class="form-group">
                        <label>Horario de la Mañana</label>
                        <input type="text" class="form-control" name="mañana" placeholder="" >
                      </div>
                      <div class="form-group">
                        <label>Horario de la Tarde</label>
                        <input type="text" class="form-control" name="tarde" placeholder="">
                      </div>
                      <div class="form-group">
                        <label>Horario de la Noche</label>
                        <input type="text" class="form-control" name="noche" placeholder="">
                      </div>
                      <div class="form-group">
                        <label>Horario disponible</label>
                        <input type="time" class="form-control" name="horario_disponible" placeholder=".........">   
                      </div>
                      {{-- llave foranea de cargo --}}
                      <div class="form-group">
                        <label>Reserva</label>
                        <select name="id_rese" class="form-control">
                          @foreach($reservas as $reserva)
                          <option value="{{ $reserva->id }}">{{ $reserva->fecha_reserva }}</option>
                          @endforeach
                        </select>
                      </div>
                      {{-- llave foranea de turno --}}
                      <div class="form-group">
                        <label>Mesa</label>
                        <select name="id_mes" class="form-control">
                          @foreach($mesas as $mesa)
                          <option value="{{ $mesa->id }}">{{ $mesa->descripcion }}</option>
                          @endforeach
                        </select>
                      </div>
                      <button type="submit" class="btn btn-primary">crear un horario de reserva</button>
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
