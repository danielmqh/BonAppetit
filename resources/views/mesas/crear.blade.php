@extends('layouts')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header">Mesas</div>

                <div class="card-body">
                    <form action="{{ route('mesas.store') }}" method="POST">
                      @csrf
                      <div class="form-group">
                        <label>Numero mesas</label>
                        <input type="text" class="form-control" name="num_mesa" placeholder="Numero de mesas">
                      </div>
                      <div class="form-group">
                        <label>Cantidad silla mesas</label>
                        <input type="text" class="form-control" name="cantidad_silla_mesa"  placeholder="cantidad de silla en mesa">
                      </div>
                      <div class="form-group">
                        <label>Descripcion</label>
                        <input type="text" class="form-control" name="descripcion" placeholder="Descripcion de mesas y sillas">
                      </div>
                      <button type="submit" class="btn btn-primary">crear Mesas</button>
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
