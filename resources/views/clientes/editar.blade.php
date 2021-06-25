@extends('layouts')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header">Clientes</div>

                <div class="card-body">
                    <form action="{{ route('clientes.update',$clientes->id) }}" method="POST">
                      @csrf
                      @method('put')
                      <div class="form-group">
                        <label>NOMBRE</label>
                        <input type="text" class="form-control" name="nomnbre" placeholder="Descripcion de turno" value="{{ $clientes->nomnbre }}">
                      </div>
                      <div class="form-group">
                        <label>APELLIDO PATERNO</label>
                        <input type="text" class="form-control" name="ap_paterno" placeholder="Hora de inicio" value="{{ $clientes->ap_paterno }}">
                      </div>
                      <div class="form-group">
                        <label>C.I.</label>
                        <input type="number" class="form-control" name="ci" placeholder="Hora de salida" value="{{ $clientes->ci }}">
                      </div>
                      <button type="submit" class="btn btn-primary">Editar</button>
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
