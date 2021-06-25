@extends('layouts')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header" name="sub-title">Nueva Caregoria</div>

                <div class="card-body">
                    <form action="{{ route('tipo_platos.store') }}" method="POST">
                      @csrf
                      <div class="form-group">
                        <label>Nombre de la categoria</label>
                        <input type="text" class="form-control" name="nombre_tipo_plato" placeholder="Ej: Ensalada">
                      </div>
                      <button type="submit" class="btn btn-primary">Crear categoria</button>
                    </form>
                </div>
                
            </div>
        </div>
    </div>
</div>
@endsection
