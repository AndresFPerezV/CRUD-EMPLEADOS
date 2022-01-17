<!DOCTYPE HTML>
<html lang="en">
<head>
<meta charset="utf-8">
<meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">


<title>PRUEBA TECNICA</title>

<!-- jQuery -->
<script src="https://code.jquery.com/jquery-2.2.4.min.js" integrity="sha256-BbhdlvQf/xTY9gja0Dq3HiwQF8LaCRTXxZKRutelT44="
crossorigin="anonymous"></script>

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
</head>
<body class="bg-light">
    <header class="section-header py-4"></header>
    <nav class="navbar navbar-expand-md navbar-dark bg-dark fixed-top">
        <a class="navbar-brand" href="#">Menu</a>
        <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarNavDropdown" aria-expanded="false" aria-label="Toggle navigation" >
            <span class="navbar-toggler-icon"></span>
        </button>
        <div class="collapse navbar-collapse" id="navbarSupportedContent">
            <ul class="navbar-nav mr-auto">
              <li class="nav-item active"><a class="nav-link" href="#">Home</a></li>
              <li class="nav-item"><a class="nav-link" href="controller/ctrConsultasEmpleado.php?consulta1=listado1">Consultar Empleados</a></li>
              <li class="nav-item"><a class="nav-link" href="views/frmRegistroEmpleado.php">Crear empleados</a></li>
            </ul>



        </div>

    </nav>

    <div class="jumbotron">
      <h1>Prueba Tecnica PHP</h1>
    </div>
    
    <div class="container">
      <nav aria-label="breadcrumb">
        <ol class="breadcrumb">
          <li class="breadcrumb-item active "aria-current="page"><a href="#">Home</a></li>
          <li class="breadcrumb-item"><a href="views/frmRegistroEmpleado.php">Crear empleados</a></li>
          <li class="breadcrumb-item"><a href="controller/ctrConsultasEmpleado.php?consulta1=listado1">Consulta</a></li>
        </ol>
      </nav>

</body>
</html>