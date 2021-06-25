@extends('layouts')

@section('content')

<div class="col-lg-12 col-sm-12 grid-margin stretch-card">
    <div class="card">
      <div class="card-body">
        <div>
          <h1 class="all-tittles" align="center">Bienvenido {{Auth::user()->name}} </h1>

          <br>

            <div class="row">


              <div class="col">
                <div class="card">
                  <div class="card-header">
                    <h6 class="m-0 font-weight-bold text-primary text-center">Imagen del perfil</h6>
                  </div>
                  <div class="card-body text-center">
                    <img src="https://i.pinimg.com/originals/51/f6/fb/51f6fb256629fc755b8870c801092942.png" alt class="img-acount-porfile rounded-circle mb-2">
                    <div class="font-italic text-muted mb-2"> JPG o PNG maximo de 5MB</div>
                    <button type="button" class="btn btn-primary">Subir nueva imagen</button>
                  </div>
                </div>
              </div>


              <div class="col">
                <div class="card">
                  <div class="card-header">
                    <h6 class="m-0 font-weight-bold text-primary text-center">Datos del perfil</h6>
                  </div>
                  <div class="card-body">


                    <div class="form-group">
	                    <label for="nombre">Nombre completo:</label>
	                    <input type="text" class="form-control" placeholder="descripcion"disabled value="{{Auth::user()->name}}">
                    </div>
      
	                  <div class="form-group">
	                    <label for="nombre">Correo electronico:</label>
	                    <input type="text" class="form-control" disabled value="{{Auth::user()->email}}">
                    </div>

                    <div class="form-group">
	                    <label for="nombre">Cargo:</label>
	                    <input type="text" class="form-control" disabled value="{{Auth::user()->rol_id}}">
                    </div>

                    <div class="form-group">
	                    <label for="nombre">Contraseña:</label>
	                    <input type="text" class="form-control" disabled value="****************">
                    </div>

                    <div class="text-center">
                      <button type="button" class="btn btn-primary">Editar datos</button>
                    </div>

                  </div>
                </div>
              </div>
            </div>
            
        </div>
      </div>
    </div>
  </div>


@endsection