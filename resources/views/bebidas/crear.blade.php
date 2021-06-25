@extends('layouts')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header">Nueva bebida</div>

                <div class="card-body">
                    <form action="{{ route('bebidas.store') }}" method="POST">
                      @csrf
                      <div class="form-group">
                        <label>Nombre de la bebida</label>
                        <input type="text" class="form-control" name="nombre_bebida" placeholder="Ej: CocaCola" >
                      </div>
                      <div class="form-group">
                        <label>Precio de la bebida</label>
                        <input type="text" class="form-control" name="precio_bebida" placeholder="Ej: 15.00">
                      </div>
                      {{-- llave foranea de tipo bebida --}}
                      <div class="form-group">
                        <label>Tipo Bebida</label>
                        <select name="id_bebi" class="form-control">
                          @foreach($tipo_bebidas as $tipo_bebida)
                          <option value="{{ $tipo_bebida->id }}">{{ $tipo_bebida->nombre }}</option>
                          @endforeach
                        </select>
                      </div>
                      <button type="submit" class="btn btn-primary">crear bebida</button>
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
