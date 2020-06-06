<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>TastyWings</title>
    
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css" integrity="sha384-Vkoo8x4CGsO3+Hhxv8T/Q5PaXtkKtu6ug5TOeNV6gBiFeWPGFN9MuhOf23Q9Ifjh" crossorigin="anonymous">
    <link rel="stylesheet" href="css/dashboard.css"> 
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.12.4/jquery.min.js"></script>
    <script src="js/ConsultaProductos.js"> </script>
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
      <li class="nav-item">
        <a class="nav-link" href="EstadoCaja.php">Estado de caja</a>
      </li>
      <li class="nav-item">
        <a class="nav-link" href="Estadistica.php">Estadística</a>
      </li>
      <li class="nav-item active">
          <a class="nav-link" href="#">Productos</a>
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
          <div class="row">
              <div class="col-md-4">
                <h1 class="font-weight-light">Productos actuales</h1>
              </div>
              <div class="col-md-2">
              </div>
              <div class="col-md-6">
                <h1 class="font-weight-light">Configuración del producto</h1>
              </div>
          </div>
      <div class="row">
          <div class="col-md-6"> 

            <br>
            <table id="miTabla" class="table table-md-responsive">
                  
            </table>>
          </div> 
          <div class="col-md-6">
              <h1 class="font-weight-light">Productos actuales</h1>
              <br>
              <form id="miForma"  class="form-group">
                  <label >ID del producto</label>
                     <input type="number" name="inputPrecio" id="inputID" class="form-control disabled" placeholder="ID del producto a modificar"  readonly>
                    <br>
                     <label >Nombre del producto</label>
                     <input type="text" name="inputNombre" id="inputNombre" class="form-control" placeholder="Escriba el nuevo nombre del producto">

                    <br>
                    
                     <label >Precio del producto</label>
                     <input type="number" name="inputPrecio" id="inputPrecio" class="form-control" placeholder="Escriba el nuevo precio del producto">
                    <br>
                    
                <button type="button"  class="btn btn-success" onclick="Actualizar()" data-toggle="modal" data-target="#ventana5">Actualizar producto</button>
                <div class="modal" id="ventana5" tabindex="-1" role="dialog" >
                      <div class="modal-dialog" role="document">
                        <div class="modal-content">
                          <div class="modal-header">
                            <h5 class="modal-title">Tarea realizada exitosamente</h5>
                            <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                              <span aria-hidden="true">&times;</span>
                            </button>
                          </div>
                          <div class="modal-body">
                            <p>Producto actualizado</p>
                          </div>
                          <div class="modal-footer">
                            <button type="button" class="btn btn-primary" data-dismiss="modal">Aceptar</button>
                          </div>
                        </div>
                      </div>
                    </div>
                <div class="modal" id="ventana6" tabindex="-1" role="dialog" >
                      <div class="modal-dialog" role="document">
                        <div class="modal-content">
                          <div class="modal-header">
                            <h5 class="modal-title">Tarea realizada exitosamente</h5>
                            <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                              <span aria-hidden="true">&times;</span>
                            </button>
                          </div>
                          <div class="modal-body">
                            <p>¡Producto Agregado!</p>
                          </div>
                          <div class="modal-footer">
                            <button type="button" class="btn btn-primary" data-dismiss="modal">Aceptar</button>
                          </div>
                        </div>
                      </div>
                    </div>
              </form>         
          </div>
      </div>
    </div>
</div>

<div class="jumbotron jumbotron-fluid text-center jtron">
      <div class="container jtron">
          <div class="row">
            <div class="col-md-3">
              
          </div>
          <div class="col-md-6">
            <h1 class="font-weight-light">¡Agrega un producto!</h1>

              <br>
              <form id="miForma"  class="form-group">

                     <label >Nombre del producto</label>
                     <input type="text" name="inputNewNombre" id="inputNewNombre" class="form-control " placeholder="Escriba el nuevo nombre del producto">

                    <br>
                    
                     <label >Precio del producto</label>
                     <input type="number" name="inputNewPrecio" id="inputNewPrecio" class="form-control" placeholder="Escriba el nuevo precio del producto">
                    <br>
                    
                <button type="button" onclick="AgregarProducto()" class="btn btn-success" data-toggle="modal" data-target="#ventana6">Agregar producto</button>
                <div class="modal" id="ventana6" tabindex="-1" role="dialog" >
                      <div class="modal-dialog" role="document">
                        <div class="modal-content">
                          <div class="modal-header">
                            <h5 class="modal-title">Tarea realizada exitosamente</h5>
                            <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                              <span aria-hidden="true">&times;</span>
                            </button>
                          </div>
                          <div class="modal-body">
                            <p>Producto agregado</p>
                          </div>
                          <div class="modal-footer">
                            <button type="button" class="btn btn-primary" data-dismiss="modal">Aceptar</button>
                          </div>
                        </div>
                      </div>
                    </div>
              </form>         
          </div>
              
          </div>
      </div>
    </div>






  <!--  <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.12.4/jquery.min.js"></script>-->
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/js/bootstrap.min.js" integrity="sha384-wfSDF2E50Y2D1uUdj0O3uMBJnjuUD4Ih7YwaYd1iqfktj0Uod8GCExl3Og8ifwB6" crossorigin="anonymous"></script>
</body>
</html>
