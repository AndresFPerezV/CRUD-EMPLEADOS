<!doctype html>
<html lang="en">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

     <!-- build:css css/index.css-->
     <title>Contacto</title>
		<!-- jQuery -->
		<script src="https://code.jquery.com/jquery-2.2.4.min.js" integrity="sha256-BbhdlvQf/xTY9gja0Dq3HiwQF8LaCRTXxZKRutelT44="
		crossorigin="anonymous"></script>
		<!-- <link rel="stylesheet" href="../css/bootstrap.css" type="text/css" /> -->
		<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css">
		<!-- Bootstrap files (jQuery first, then Popper.js, then Bootstrap JS) -->
		<link href="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css" rel="stylesheet" type="text/css"/>
		<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/js/bootstrap.bundle.min.js" type="text/javascript"></script>

		<style type="text/css">
		/* ============ desktop view ============ */
		@media all and (min-width: 992px) {
		.navbar .nav-item .dropdown-menu{ display: none; }
		.navbar .nav-item:hover .nav-link{ color: #fff;  }
		.navbar .nav-item:hover .dropdown-menu{ display: block; }
		.navbar .nav-item .dropdown-menu{ margin-top:0; }
		}	
		/* ============ desktop view .end// ============ */


		</style>
     <!-- endbuild -->
    <title> Contacto</title>
  </head>
  <body class="bg-light">
    <header class="section-header py-4"></header>
    <nav class="navbar navbar-expand-md navbar-dark bg-dark fixed-top">
        <a class="navbar-brand" href="#">Contacto</a>
        <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarNavDropdown" aria-expanded="false" aria-label="Toggle navigation" >
            <span class="navbar-toggler-icon"></span>
        </button>
        <div class="collapse navbar-collapse" id="navbarSupportedContent">
            <ul class="navbar-nav mr-auto">
              <li class="nav-item"><a class="nav-link" href="../index.php">Home</a></li>
              <li class="nav-item"><a class="nav-link" href="./frmRegistroEmpleado.php">Crear empleado</a></li>
              <li class="nav-item"><a class="nav-link" href="../controller/ctrConsultasMedicamento.php?consulta1=listado1">Lista de empleados</a></li>
              <li class="nav-item active"><a class="nav-link" href="#">Contacto</a></li>

            </ul>



        </div>

    </nav>

    <div class="jumbotron">
      <h1>Prueba Tecnica PHP</h1>
    </div>
    
    <div class="container">
      <nav aria-label="breadcrumb">
        <ol class="breadcrumb">
          <li class="breadcrumb-item"><a href="./index.php">Home</a></li>
          <li class="breadcrumb-item"><a href="./frmActualizarMedicamentos.php">Punto1</a></li>
          <li class="breadcrumb-item"><a href="./index.html">Calendario</a></li>
          <li class="breadcrumb-item"><a href="../controller/ctrConsultasMedicamento.php?consulta1=listado1">Consulta</a></li>
          <li class="breadcrumb-item active" aria-current="page">Contacto</li>
          
        </ol>
      </nav>
        
      <h1>Dejanos tus comentarios</h1>

      <form>
        <div class="form-row">
          <div class="form-group col-sm-6">
            <label for="nombre">Nombre</label>
            <input type="text" class="form-control" id="nombre" placeholder="Ingrese su nombre">
          </div>
          <div class="form-group col-sm-6">
            <label for="apellido">Apellido</label>
            <input type="text" class="form-control" id="apellido" placeholder="Ingrese su apellido">
          </div>
        </div>
        <div class="form-group">
          <label for="email">Email</label>
            <input type="email" class="form-control" id="email" placeholder="Ingrese su email">
        </div>
        <div class="form-row">
          <div class="form-group col-sm-9">
            <label for="direccion">Direccion</label>
            <input type="text" class="form-control" id="direccion" placeholder="Ingrese su direccion">
          </div>
          <div class="form-group col-sm-3">
            <label for="municipio">Municipio</label>
            <select id="municipio" class="form-control">
              <option selected>Medellin</option>
              <option>Rionegro</option>
              <option>La Ceja</option>
              <option>Envigado</option>
              <option>Marinilla</option>
            </select>
          </div>
          
        </div>
        <div class="form-group">
          <label for="comentario">Comentario</label>
          <textarea id="comentario" class="form-control" rows="10"></textarea>
        
        </div>
        <div class="form-group">
          <div class="form-check">
            <input class="form-check-input" type="checkbox" id="gridCheck">
            <label class="form-check-label" for="gridCheck">Quiero que me contacten</label>
          </div>
        </div>
        <button type="submit" class="btn btn-primary">Enviar</button>
      </form>

      
    </div>
    <footer>
      <div class="row">
        <div class="col-sm-4 d-flex flex-column" >
          <a href="https//www.facebook.com">Facebook</a>
          <a href="https//www.Twitter.com">Twitter</a>
          <a href="https//www.Instagram.com">Instagram</a>
          <a href="https//www.Google.com">Google+</a>
        </div>
        <div class="col-sm-4">
          <address>
            <h3>Datos Personales</h3>
            <p>Medellin, Antioquia</p>
            <p>+573106620450</p>
            <p>andrespv2013@gmail.com</p>
          </address>
        </div>
        <div class="col-sm-4 d-flex flex-column align-itms-end" >
          <a href="https//www.facebook.com">Nosotros</a>
          <a href="https//www.Twitter.com">Ayuda</a>
          <a href="https//www.Instagram.com">Términos y condiciones</a>
          <a href="https//www.Google.com">Contacto</a>
        </div>
  
      </div>
      
    </footer>
    <!-- build:js js/main.js -->
    <script src="node_modules/jQuery/dist/jquery.min.js"></script>
    <script src="node_modules/popper.js/dist/umd/popper.min.js"></script>
    <script src="node_modules/bootstrap/dist/js/bootstrap.min.js"></script>
    <script src="js/index.js"></script>
    <!-- endbuild -->
  </body>
</html>