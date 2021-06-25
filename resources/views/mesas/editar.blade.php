@extends('layouts')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header">Mesas</div>

                <div class="card-body">
                    <form action="{{ route('mesas.update',$mesas->id) }}" method="POST">
                      @csrf
                      @method('put')
                      <div class="form-group">
                        <label>Numero mesas</label>
                        <input type="text" class="form-control" name="num_mesa" placeholder="Numero de mesas" value="{{ $mesas->num_mesa }}">
                      </div>
                      <div class="form-group">
                        <label>Cantidad sillas mesas</label>
                        <input type="text" class="form-control" name="cantidad_silla_mesa" placeholder="Cantidad de sillas en mesa" value="{{ $mesas->cantidad_silla_mesa }}">
                      </div>
                      <div class="form-group">
                        <label>Descripcion</label>
                        <input type="text" class="form-control" name="descripcion" placeholder="Descripcion de mesas y sillas" value="{{ $mesas->descripcion }}">
                      </div>
                      <button type="submit" class="btn btn-primary">Editar</button>
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
