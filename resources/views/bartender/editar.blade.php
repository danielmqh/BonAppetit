@extends('layouts')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header">Trabajadores</div>

                <div class="card-body">
                    <form action="{{ route('trabajadores.update',$trabajadores->id) }}" method="POST">
                      @csrf
                      @method('put')
                      <div class="form-group">
                        <label>Nombre Trabajador</label>
                        <input type="text" class="form-control" name="nombre" placeholder="Nombre de trabajador" value="{{ $trabajadores->nombre }}">
                      </div>
                      <div class="form-group">
                        <label>Apellido Paterno</label>
                        <input type="text" class="form-control" name="ap_paterno" placeholder="Apellido Paterno de trabajador" value="{{ $trabajadores->ap_paterno }}">
                      </div>
                      <div class="form-group">
                        <label>Apellido Materno</label>
                        <input type="text" class="form-control" name="ap_materno" placeholder="Apellidon Materno de trabajador" value="{{ $trabajadores->ap_materno }}">
                      </div>
                      <div class="form-group">
                        <label>C.I.</label>
                        <input type="text" class="form-control" name="ci" placeholder="C.I. de trabajador" value="{{ $trabajadores->ci }}">
                      </div>
                      <div class="form-group">
                        <label>Genero</label>
                          <select name="genero" class="form-control" value="{{ $trabajadores->genero }}">
                          <option>------seleccionar--------</option>
                          <option value="1">Masculino</option>
                          <option value="2">Femenido</option>
                          </select>
                       </select>
                      </div>
                      <div class="form-group">
                        <label>Correo Electronico</label>
                        <input type="email" class="form-control" name="correo" placeholder="Correo Electronico de trabajador" value="{{ $trabajadores->correo }}">
                      </div>
                      <div class="form-group">
                        <label>Telefono</label>
                        <input type="text" class="form-control" name="telefono" placeholder="Telefono de trabajador" value="{{ $trabajadores->telefono }}">
                      </div>
                      {{-- llave foranea de cargo --}}
                      <div class="form-group">
                        <label>Cargo</label>
                        <select name="id_carg" class="form-control">
                          @foreach($cargos as $cargo)
                            @if($cargo->id == $trabajadores->cargo->id)
                              <option value="{{ $cargo->id }}" selected>{{ $cargo->nombre_cargo }}</option>
                            @else
                              <option value="{{ $cargo->id }}">{{ $cargo->nombre_cargo }}</option>
                            @endif
                          @endforeach
                        </select>
                      </div>
                      {{-- llave foranea de turno --}}
                      <div class="form-group">
                        <label>Turno</label>
                        <select name="id_tur" class="form-control">
                          @foreach($turnos as $turno)
                            @if($turno->id == $trabajadores->turno->id)
                              <option value="{{ $turno->id }}" selected>{{ $turno->descripcion }}</option>
                            @else
                              <option value="{{ $turno->id }}">{{ $turno->descripcion }}</option>
                            @endif
                          @endforeach
                        </select>
                      </div>

                      <button type="submit" class="btn btn-primary">Editar</button>
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
