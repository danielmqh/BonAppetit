@extends('layouts')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header">Turno</div>

                <div class="card-body">
                    <form action="{{ route('turnos.store') }}" method="POST">
                      @csrf
                      <div class="form-group">
                        <label>Descripcion</label>
                        <input type="text" class="form-control" name="descripcion" placeholder="Descripcion de turno">
                      </div>
                      <div class="form-group">
                        <label>Hora Inicio</label>
                        <input type="time" class="form-control" name="hora_inicio"  placeholder="Hora de inicio">
                      </div>
                      <div class="form-group">
                        <label>Hora Salida</label>
                        <input type="time" class="form-control" name="hora_salida" placeholder="Hora de salida">
                      </div>
                      <button type="submit" class="btn btn-primary">crear turno</button>
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
