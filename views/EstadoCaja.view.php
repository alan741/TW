<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Estado de caja</title>
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css" integrity="sha384-Vkoo8x4CGsO3+Hhxv8T/Q5PaXtkKtu6ug5TOeNV6gBiFeWPGFN9MuhOf23Q9Ifjh" crossorigin="anonymous">
    <link rel="stylesheet" href="css/dashboard.css">
    
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.12.4/jquery.min.js"></script>
    <script src="js/Caja.js"></script>

</head>
<body>
    
<!--Barra de navegación-->
<nav class="navbar navbar-expand-lg navbar-light bg-light">
        
  <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarTogglerDemo01" aria-controls="navbarTogglerDemo01" aria-expanded="false" aria-label="Toggle navigation">
   ¡Bienvenido! <span class="navbar-toggler-icon"></span>
  </button>
        
  <div class="collapse navbar-collapse" id="navbarTogglerDemo01">
      <a class="navbar-brand" href="#">
          T a s t y  W i n g s
  </a>
    <ul class="navbar-nav mr-auto mt-2 mt-lg-0">
      <li class="nav-item">
        <a class="nav-link" href="dashboard.php">Realizar venta</a>
      </li>
      <li class="nav-item">
        <a class="nav-link" href="RegistroVenta.php">Registro de ventas</a>
      </li>
      <li class="nav-item active">
        <a class="nav-link" href="#">Estado de caja</a>
      </li>
      <li class="nav-item">
          <a class="nav-link" href="Estadistica.php">Estadística</a>
      </li>
      <li class="nav-item">
          <a class="nav-link" href="Productos.php">Productos</a>
      </li>
      <li class="nav-item">
          <a class="nav-link" href="RegistrarUsuario.php">Registrar usuario</a>
      </li>
    </ul>
    
    <form class="form-inline my-2 my-lg-0">   
      <a class="nav-link" href="cerrar.php">Cerrar sesión</a>  
    </form>
    
  </div>
</nav>
<!--Aquí termina la barra de navegación-->

<div class="jumbotron jumbotron-fluid text-center jtron">
  <div class="container jtron">
    <h1 class="font-weight-light">¿Deseas realizar un retiro de caja?</h1>
    <div class="row">
        <div class="col-md-6"> 
            <div class="form-group">
                <label for="formGroupExampleInput">Monto a retirar</label>
                <input type="number" class="form-control"  maxlength="8" placeholder="Escribe la cantidad en pesos" id="MontoRetirar" onkeypress="Evaluar()">
            </div>
        </div>
            <div class="col-md-6">
                <div class="form-group">
                    <label for="formGroupExampleInput">Estado final</label>
                    <input type="text"  class="form-control disabled" id="Final" placeholder="Monto final en caja" readonly>
                </div>
            </div>
        </div> 
    <button  class="btn btn-primary" id="Retiro" onclick="HacerRetiro()" data-toggle="modal" data-target="#ventana2">Realizar retiro</button>

    <div class="modal" id="ventana2" tabindex="-1" role="dialog" >
                      <div class="modal-dialog" role="document">
                        <div class="modal-content">
                          <div class="modal-header">
                            <h5 class="modal-title">Compra exitosa</h5>
                            <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                              <span aria-hidden="true">&times;</span>
                            </button>
                          </div>
                          <div class="modal-body">
                            <p>Compra realizada</p>
                          </div>
                          <div class="modal-footer">
                            <button type="button" class="btn btn-primary" data-dismiss="modal">Aceptar</button>
                          </div>
                        </div>
                      </div>
                    </div>

    </div> 
  </div>

<div class="jumbotron jumbotron-fluid text-center jtron">
  <div class="container jtron">
    <h1 class="font-weight-light">¿Por alguna razón tienes que reconfigurar la caja?</h1>

    <div class="form-group">
      <input type="text" class="form-control" id="inputReconfigurar" placeholder="Cantidad actualizada de caja">
    </div>
      <button type="submit" class="btn btn-primary" onclick="ActualizarCaja()" data-toggle="modal" data-target="#ventana3">Actualizar caja</button>
    </div>

    <div class="modal" id="ventana3" tabindex="-1" role="dialog" >
                      <div class="modal-dialog" role="document">
                        <div class="modal-content">
                          <div class="modal-header">
                            <h5 class="modal-title">Compra exitosa</h5>
                            <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                              <span aria-hidden="true">&times;</span>
                            </button>
                          </div>
                          <div class="modal-body">
                            <p>Compra realizada</p>
                          </div>
                          <div class="modal-footer">
                            <button type="button" class="btn btn-primary" data-dismiss="modal">Aceptar</button>
                          </div>
                        </div>
                      </div>
                    </div>  
</div>


<div class="jumbotron jumbotron-fluid text-center jtron">
      <div class="container jtron">
          <button type="button" class="btn btn-danger" onclick="EliminarCaja()" data-toggle="modal" data-target="#ventana4">Eliminar historial de caja</button>
          <div class="modal" id="ventana4" tabindex="-1" role="dialog" >
                      <div class="modal-dialog" role="document">
                        <div class="modal-content">
                          <div class="modal-header">
                            <h5 class="modal-title">Tarea realizada exitosamente</h5>
                            <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                              <span aria-hidden="true">&times;</span>
                            </button>
                          </div>
                          <div class="modal-body">
                            <p>Historial de compra eliminado</p>
                          </div>
                          <div class="modal-footer">
                            <button type="button" class="btn btn-primary" data-dismiss="modal">Aceptar</button>
                          </div>
                        </div>
                      </div>
                    </div>
          <br>
          <br>
      <div class="row">
          <div class="col-md-1"> 
          </div> 
          <div class="col-md-11">
            <table class="table table-responsive text-center" id="miTabla">
                <thead class="thead-light">
                    <tr>
                        <th></th>
                        <th>ID</th>
                        <th>Cantidad total</th>
                        <th>Descripción</th>
                        <th>¿Quién estuvo a cargo cuando se realizó el movimiento?</th>
                        <th>Fecha</th>
                    </tr>
                </thead>
                <tbody id="body">
                    <tr>

                    </tr>
                 </tbody>
            </table> 
          </div>
      </div>
    </div>
</div>

    
    
    <!--<script src="https://code.jquery.com/jquery-3.4.1.slim.min.js" integrity="sha384-J6qa4849blE2+poT4WnyKhv5vZF5SrPo0iEjwBvKU7imGFAV0wwj1yYfoRSJoZ+n" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.0/dist/umd/popper.min.js" integrity="sha384-Q6E9RHvbIyZFJoft+2mJbHaEWldlvI9IOYy5n3zV9zzTtmI3UksdQRVvoxMfooAo" crossorigin="anonymous"></script>-->
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/js/bootstrap.min.js" integrity="sha384-wfSDF2E50Y2D1uUdj0O3uMBJnjuUD4Ih7YwaYd1iqfktj0Uod8GCExl3Og8ifwB6" crossorigin="anonymous"></script>
</body>
</html>
