@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header">Cargos</div>

                <div class="card-body">
                    <form action="{{ route('cargos.update',$cargos->id) }}" method="POST">
                      @csrf
                      @method('put')
                      <div class="form-group">
                        <label>Nombre cargo</label>
                        <input type="text" class="form-control" name="nombre_cargo" placeholder="Nombre de cargo" value="{{ $cargos->nombre_cargo }}">
                      </div>
                      <div class="form-group">
                        <label>Sueldo de cargo</label>
                        <input type="text" class="form-control" name="sueldo" placeholder="Sueldo de cargo" value="{{ $cargos->sueldo }}">
                      </div>
                      <button type="submit" class="btn btn-primary">Editar</button>
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
