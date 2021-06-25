@extends('layouts')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header">Cargos</div>

                <div class="card-body">
                    <form action="{{ route('tipo_platos.update',$tipo_platos->id) }}" method="POST">
                      @csrf
                      @method('put')
                      <div class="form-group">
                        <label>Nombre cargo</label>
                        <input type="text" class="form-control" name="nombre_tipo_plato" placeholder="Nombre de cargo" value="{{ $tipo_platos->nombre_tipo_plato }}">
                      </div>
                      <button type="submit" class="btn btn-primary">Editar</button>
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
