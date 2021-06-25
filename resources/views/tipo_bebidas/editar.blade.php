@extends('layouts')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header">Cargos</div>

                <div class="card-body">
                    <form action="{{ route('tipo_bebidas.update',$tipo_bebidas->id) }}" method="POST">
                      @csrf
                      @method('put')
                      <div class="form-group">
                        <label>Nombre cargo</label>
                        <input type="text" class="form-control" name="nombre" placeholder="Nombre de cargo" value="{{ $tipo_bebidas->nombre }}">
                      </div>
                      <button type="submit" class="btn btn-primary">Editar</button>
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
