@extends('layouts')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header">Cliente</div>

                <div class="card-body">
                    <form action="{{ route('clientes.store') }}" method="POST">
                      @csrf
                      <div class="form-group">
                        <label>Nombre</label>
                        <input type="text" class="form-control" name="nomnbre" placeholder="Nombre del cliente">
                      </div>
                      <div class="form-group">
                        <label>Apellido Paterno</label>
                        <input type="text" class="form-control" name="ap_paterno"  placeholder="Apellido del cliente">
                      </div>
                      <div class="form-group">
                        <label>C.I.</label>
                        <input type="number" class="form-control" name="ci" placeholder="Cedula de identidad">
                      </div>
                      <button type="submit" class="btn btn-primary">crear cliente</button>
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
