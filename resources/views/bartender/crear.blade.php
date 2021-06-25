@extends('layouts')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header">Trabajadores</div>

                <div class="card-body">
                    <form action="{{ route('trabajadores.store') }}" method="POST">
                      @csrf
                      {{-- llave foranea de cargo --}}
                      <div class="form-group">
                        <label>Cargo</label>
                        <select name="id_carg" class="form-control">
                          @foreach($bebidas as $bebida)
                          <option value="{{ $bebida->id }}">{{ $bebida->nombre_bebida }}</option>
                          @endforeach
                        </select>
                      </div>
                      {{-- llave foranea de turno --}}
                      <div class="form-group">
                        <label>Turno</label>
                        <select name="id_tur" class="form-control">
                          @foreach($trabajadores as $trabajador)
                          <option value="{{ $trabajador->id }}">{{ $trabajador->descripcion }}</option>
                          @endforeach
                        </select>
                      </div>
                      <button type="submit" class="btn btn-primary">crear trabajadores</button>
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
