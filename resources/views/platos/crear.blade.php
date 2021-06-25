@extends('layouts')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header" name="sub-title">Nuevo plato</div>

                <div class="card-body">
                    <form action="{{ route('platos.store') }}" method="POST">
                      @csrf
                      <div class="form-group">
                        <label>Nombre plato</label>
                        <input type="text" class="form-control" name="nombre_plato" placeholder="Ej: Asado de res" >
                      </div>
                      <div class="form-group">
                        <label>Precio del plato</label>
                        <input type="text" class="form-control" name="precio_plato" placeholder="Ej: 17.50">
                      </div>
                      {{-- llave foranea de turno --}}
                      <div class="form-group">
                        <label>Categoria</label>
                        <select name="id_plato" class="form-control">
                          @foreach($tipo_platos as $tipo_plato)
                          <option value="{{ $tipo_plato->id }}">{{ $tipo_plato->nombre_tipo_plato }}</option>
                          @endforeach
                        </select>
                      </div>
                      <button type="submit" class="btn btn-primary">Crear plato</button>
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
