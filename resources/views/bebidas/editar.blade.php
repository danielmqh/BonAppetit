@extends('layouts')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header">Editar bebida</div>

                <div class="card-body">
                    <form action="{{ route('bebidas.update',$bebidas->id) }}" method="POST">
                      @csrf
                      @method('put')
                      <div class="form-group">
                        <label>Nombre de la bebida</label>
                        <input type="text" class="form-control" name="nombre_bebida" placeholder="Nombre de trabajador" value="{{ $bebidas->nombre_bebida }}">
                      </div>
                      <div class="form-group">
                        <label>Precio de la bebida</label>
                        <input type="text" class="form-control" name="precio_bebida" placeholder="Apellido Paterno de trabajador" value="{{ $bebidas->precio_bebida }}">
                      </div>
                      {{-- llave foranea de tipo bebida --}}
                      <div class="form-group">
                        <label>Turno</label>
                        <select name="id_bebi" class="form-control">
                          @foreach($tipo_bebidas as $tipo_bebida)
                            @if($tipo_bebida->id == $bebidas->tipo_bebida->id)
                              <option value="{{ $tipo_bebida->id }}" selected>{{ $tipo_bebida->nombre }}</option>
                            @else
                              <option value="{{ $tipo_bebida->id }}">{{ $tipo_bebida->nomnbre }}</option>
                            @endif
                          @endforeach
                        </select>
                      </div>

                      <button type="submit" class="btn btn-primary">Guardar datos</button>
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
