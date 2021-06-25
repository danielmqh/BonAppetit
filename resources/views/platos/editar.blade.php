@extends('layouts')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header">Plato</div>

                <div class="card-body">
                    <form action="{{ route('platos.update',$platos->id) }}" method="POST">
                      @csrf
                      @method('put')
                      <div class="form-group">
                        <label>Nombre Plato</label>
                        <input type="text" class="form-control" name="nombre_plato" placeholder="Nombre de trabajador" value="{{ $platos->nombre_plato }}">
                      </div>
                      <div class="form-group">
                        <label>Precio del plato</label>
                        <input type="text" class="form-control" name="precio_plato" placeholder="Apellido Paterno de trabajador" value="{{ $platos->precio_plato }}">
                      </div>
                      {{-- llave foranea de tipo plato --}}
                      <div class="form-group">
                        <label>Categoria</label>
                        <select name="id_plato" class="form-control">
                          @foreach($tipo_platos as $tipo_plato)
                            @if($tipo_plato->id == $platos->tipo_plato->id)
                              <option value="{{ $tipo_plato->id }}" selected>{{ $tipo_plato->nombre_tipo_plato }}</option>
                            @else
                              <option value="{{ $tipo_plato->id }}">{{ $tipo_plato->nombre_tipo_plato }}</option>
                            @endif
                          @endforeach
                        </select>
                      </div>

                      <button type="submit" class="btn btn-primary">Gurdar datos</button>
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
