<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>TastyWings</title>
    
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css" integrity="sha384-Vkoo8x4CGsO3+Hhxv8T/Q5PaXtkKtu6ug5TOeNV6gBiFeWPGFN9MuhOf23Q9Ifjh" crossorigin="anonymous">
    <link rel="stylesheet" href="css/dashboard.css"> 
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.12.4/jquery.min.js"></script>
    <script type="text/javascript" src="js/ConsultaProductos.js"> </script>
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
            <section id="miTabla">
                  
            </section>
          </div> 
          <div class="col-md-6">

              <br>
              <form id="miForma" method="POST" class="form-group">

                     <label >Nombre del producto</label>
                     <input type="text" name="inputNombre" class="form-control" placeholder="Escriba el nuevo nombre del producto">

                    <br>
                    
                     <label >Precio del producto</label>
                     <input type="text" name="inputPrecio" class="form-control" placeholder="Escriba el nuevo precio del producto">
                    <br>
                    
                <button type="button" id="btnAgregar" class="btn btn-success">Actualizar producto</button>
              </form>         
          </div>
      </div>
    </div>
</div>

    <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.12.4/jquery.min.js"></script>
    <script src="js/InsertarProducto.js"> </script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/js/bootstrap.min.js" integrity="sha384-wfSDF2E50Y2D1uUdj0O3uMBJnjuUD4Ih7YwaYd1iqfktj0Uod8GCExl3Og8ifwB6" crossorigin="anonymous"></script>
</body>
</html>
