@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header">Respuestas</div>

                <div class="card-body">
                    <form action="{{ route('proveedores.update',$proveedores->id) }}" method="POST">
                      @csrf
                      @method('put')
                      <div class="form-group">
                        <label>Nombre proveedor</label>
                        <input type="text" class="form-control" name="nombre_proveedor" placeholder="Texto de proveedor" value="{{ $proveedores->nombre_proveedor }}">
                      </div>
                      <div class="form-group">
                        <label>Direccion proveedor</label>
                        <input type="text" class="form-control" name="direccion_proveedor" placeholder="Direccion de proveedor" value="{{ $proveedores->direccion_proveedor }}">
                      </div>
                      <div class="form-group">
                        <label>Telefono proveedor</label>
                        <input type="number" class="form-control" name="telefono_proveedor" placeholder="Telefono de proveedor" value="{{ $proveedores->telefono_proveedor }}">
                      </div>
                      <div class="form-group">
                        <label>Email proveedor</label>
                        <input type="email" class="form-control" name="email_proveedor" placeholder="Email de proveedor" value="{{ $proveedores->email_proveedor }}">
                      </div>
                      <button type="submit" class="btn btn-primary">Editar</button>
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
