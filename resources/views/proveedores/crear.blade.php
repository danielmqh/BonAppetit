@extends('layouts')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header">Respuestas</div>

                <div class="card-body">
                    <form action="{{ route('proveedores.store') }}" method="POST">
                      @csrf
                      <div class="form-group">
                        <label>Nombre</label>
                        <input type="text" class="form-control" name="nombre_proveedor" placeholder="Texto de la proveedor">
                      </div>
                      <div class="form-group">
                        <label>Direccion</label>
                        <input type="text" class="form-control" name="direccion_proveedor"  placeholder="Direccion de proveedor">
                      </div>
                      <div class="form-group">
                        <label>Telefono</label>
                        <input type="number" class="form-control" name="telefono_proveedor" placeholder="Telefono de proveedor">
                      </div>
                      <div class="form-group">
                        <label>Email</label>
                        <input type="email" class="form-control" name="email_proveedor" placeholder="Email de proveedor">
                      </div>
                      <button type="submit" class="btn btn-primary">crear proveedores</button>
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
