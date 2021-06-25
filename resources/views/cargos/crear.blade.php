@extends('layouts')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header">Respuestas</div>

                <div class="card-body">
                    <form action="{{ route('cargos.store') }}" method="POST">
                      @csrf
                      <div class="form-group">
                        <label>Nombre</label>
                        <input type="text" class="form-control" name="nombre_cargo" placeholder="nombre de sueldo">
                      </div>
                      <div class="form-group">
                        <label>sueldo</label>
                        <input type="text" class="form-control" name="sueldo"  placeholder="Sueldo de cargo">
                      </div>
                      <button type="submit" class="btn btn-primary">crear cargos</button>
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
