@extends('layouts')

@section('content')
<div class="container-fluid mt-4">



@if( Auth::user()-> rol_id == 1)




          <!-- Page Heading -->
          

          <!-- Content Row -->
          <div class="row">
          </div>

          <!-- Content Row -->

          <div class="row">

            <!-- Area Chart -->
            <div class="col-xl-8 col-lg-7">
              <div class="card shadow mb-4">
                <!-- Card Header - Dropdown -->
                <div class="card-header py-3 d-flex flex-row align-items-center justify-content-between">
                  <h6 class="m-0 font-weight-bold text-primary">Reportes Mensual</h6>
                  <div class="dropdown no-arrow">
                    <a class="dropdown-toggle" href="#" role="button" id="dropdownMenuLink" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                      <i class="fas fa-ellipsis-v fa-sm fa-fw text-gray-400"></i>
                    </a>
                    <div class="dropdown-menu dropdown-menu-right shadow animated--fade-in" aria-labelledby="dropdownMenuLink">
                      <div class="dropdown-header">Dropdown Header:</div>
                      <a class="dropdown-item" href="#">Action</a>
                      <a class="dropdown-item" href="#">Another action</a>
                      <div class="dropdown-divider"></div>
                      <a class="dropdown-item" href="#">Something else here</a>
                    </div>
                  </div>
                </div>
                <!-- Card Body -->
                <div class="card-body">
                  <div class="chart-area">
                    <canvas id="myAreaChart"></canvas>
                  </div>
                </div>
              </div>
            </div>

            <!-- Pie Chart -->
            <div class="col-xl-4 col-lg-5">
              <div class="card shadow mb-4">
                <!-- Card Header - Dropdown -->
                <div class="card-header py-3 d-flex flex-row align-items-center justify-content-between">
                  <h6 class="m-0 font-weight-bold text-primary">Reportes del Dia <DATALIST></DATALIST></h6>
                  <div class="dropdown no-arrow">
                    <a class="dropdown-toggle" href="#" role="button" id="dropdownMenuLink" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                      <i class="fas fa-ellipsis-v fa-sm fa-fw text-gray-400"></i>
                    </a>
                    <div class="dropdown-menu dropdown-menu-right shadow animated--fade-in" aria-labelledby="dropdownMenuLink">
                      <div class="dropdown-header">Dropdown Header:</div>
                      <a class="dropdown-item" href="#">Pedidos</a>
                      <a class="dropdown-item" href="#">Rerservas</a>
                      <div class="dropdown-divider"></div>
                      <a class="dropdown-item" href="#">Clientes</a>
                    </div>
                  </div>
                </div>
                <!-- Card Body -->
                <div class="card-body">
                  <div class="chart-pie pt-4 pb-2">
                    <canvas id="myPieChart"></canvas>
                  </div>
                  <div class="mt-4 text-center small">
                    <span class="mr-2">
                      <i class="fas fa-circle text-primary"></i> Pedidos
                    </span>
                    <span class="mr-2">
                      <i class="fas fa-circle text-success"></i> Reservas
                    </span>
                    <span class="mr-2">
                      <i class="fas fa-circle text-info"></i> Clienets
                    </span>
                  </div>
                </div>
              </div>
            </div>
          </div>

          <!-- Content Row -->
          <div class="row">

            <!-- Content Column -->
            <div class="col-lg-6 mb-4">

              <!-- Project Card Example -->
              <div class="card shadow mb-4">
                <div class="card-header py-3">
                  <h6 class="m-0 font-weight-bold text-primary">Platos Mas Vendidos</h6>
                </div>
                <div class="card-body">
                  <h4 class="small font-weight-bold"> Cerdo al Horno <span class="float-right">20%</span></h4>
                  <div class="progress mb-4">
                    <div class="progress-bar bg-danger" role="progressbar" style="width: 20%" aria-valuenow="20" aria-valuemin="0" aria-valuemax="100"></div>
                  </div>
                  <h4 class="small font-weight-bold">Fricase <span class="float-right">40%</span></h4>
                  <div class="progress mb-4">
                    <div class="progress-bar bg-warning" role="progressbar" style="width: 40%" aria-valuenow="40" aria-valuemin="0" aria-valuemax="100"></div>
                  </div>
                  <h4 class="small font-weight-bold">Asado de Res <span class="float-right">60%</span></h4>
                  <div class="progress mb-4">
                    <div class="progress-bar" role="progressbar" style="width: 60%" aria-valuenow="60" aria-valuemin="0" aria-valuemax="100"></div>
                  </div>
                  <h4 class="small font-weight-bold">Escabeche de Cerdo <span class="float-right">80%</span></h4>
                  <div class="progress mb-4">
                    <div class="progress-bar bg-info" role="progressbar" style="width: 80%" aria-valuenow="80" aria-valuemin="0" aria-valuemax="100"></div>
                  </div>
                  <h4 class="small font-weight-bold">Sopa de Mani <span class="float-right">Complete!</span></h4>
                  <div class="progress">
                    <div class="progress-bar bg-success" role="progressbar" style="width: 100%" aria-valuenow="100" aria-valuemin="0" aria-valuemax="100"></div>
                  </div>
                </div>
              </div>

            </div>
          </div>
          <div class="row">

            <!-- Area Chart -->

            <!-- Pie Chart -->
            <div class="col-xl-4 col-lg-5">
              <div class="card shadow mb-4">
                <!-- Card Header - Dropdown -->
                <div class="card-header py-3 d-flex flex-row align-items-center justify-content-between">
                  <h6 class="m-0 font-weight-bold text-primary">Reportes del Dia <DATALIST></DATALIST></h6>
                  <div class="dropdown no-arrow">
                    <a class="dropdown-toggle" href="#" role="button" id="dropdownMenuLink" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                      <i class="fas fa-ellipsis-v fa-sm fa-fw text-gray-400"></i>
                    </a>
                    <div class="dropdown-menu dropdown-menu-right shadow animated--fade-in" aria-labelledby="dropdownMenuLink">
                      <div class="dropdown-header">Dropdown Header:</div>
                      <a class="dropdown-item" href="#">Pedidos</a>
                      <a class="dropdown-item" href="#">Rerservas</a>
                      <div class="dropdown-divider"></div>
                      <a class="dropdown-item" href="#">Clientes</a>
                    </div>
                  </div>
                </div>
                <!-- Card Body -->
                <div class="card-body">
                  <div class="chart-pie pt-4 pb-2">
                    <canvas id="myPieChart"></canvas>
                  </div>
                  <div class="mt-4 text-center small">
                    <span class="mr-2">
                      <i class="fas fa-circle text-primary"></i> Pedidos
                    </span>
                    <span class="mr-2">
                      <i class="fas fa-circle text-success"></i> Reservas
                    </span>
                    <span class="mr-2">
                      <i class="fas fa-circle text-info"></i> Clienets
                    </span>
                  </div>
                </div>
              </div>
            </div>
          </div>



@endif


@if( Auth::user()-> rol_id != 1)

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

@endif


</div>
@endsection
