<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Cartas</title>
    <link rel="stylesheet" type="text/css" href="css/styles.css">

    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.14.0/css/all.min.css">

    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
    
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
    
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz" crossorigin="anonymous"></script>
</head>
<body >

<nav class="navbar navbar-expand-lg bg-body-tertiary">
  <div class="container-fluid">
    <a class="navbar-brand" href="#"><img src ="Images/yugilogo.png" alt=""></a>
    <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
      <span class="navbar-toggler-icon"></span>
    </button>
    <div class="collapse navbar-collapse" id="navbarSupportedContent">
      <ul class="navbar-nav me-auto mb-2 mb-lg-0">
        <li class="nav-item">
          <a class="nav-link active" aria-current="page" href="/pagina4/index.php">Inicio</a>
        </li>
        <li class="nav-item">
          <a class="nav-link" href="#">Redes sociales</a>
        </li>
        <li class="nav-item">
          <a class="nav-link" href="/pagina4/Foro.php">Forum</a>
        </li>
        <li class="nav-item">
          <a class="nav-link" href="/pagina4/Cartas.php">Cartas</a>
        </li>
        <li class="nav-item dropdown">
          <a class="nav-link dropdown-toggle" href="#" role="button" data-bs-toggle="dropdown" aria-expanded="false">
            Mas
          </a>
          <ul class="dropdown-menu">
            <li><a class="dropdown-item" href="#">Categorias</a></li>
            <li><a class="dropdown-item" href="#">Tipos</a></li>
            <li><a class="dropdown-item" href="#">Noticias</a></li>
            <li><hr class="dropdown-divider"></li>
            <li><a class="dropdown-item" href="#">Sugerencias</a></li>
          </ul>
        </li>
      </ul>
      <div class="d-flex justify-content-center align-items-center gap-3">
        <a href="#login" class="text-black">Iniciar sesion</a>
        <a href="#signup" class="text-white text-decoration-none px-3 py-1 
        bg-primary rounded-4" style="background-color:blue">Registrarse</a>
      </div>
      <div>
        <a> </a>
      </div>
      <form class="d-flex" role="search">
        <input class="form-control me-2" type="search" placeholder="Buscar" aria-label="Search">
        <button class="btn btn-outline-success" type="submit">Busqueda</button>
      </form>
    </div>
  </div>
</nav>


<div class="cuadro3"><h2 class="neon">Coleccion de cartas</h2></div>


  <section class="wrapper">
    <div id="stars"></div>
    <div id="stars2"></div>
    <div id="stars3"></div>
  </section>
  
<div id="main">
  
  
       <?php
         include("Mostrar.php")
        ?>




    
</div>
    

 
</body>

<footer class="bg-dark text-white pt-5 pb-4">
    <div class="container text-center text-md-left">

      <div class="row text-center text-md-left">
        <div class="col-md-3 col-lg-3 col-xl-3 mx-auto mt-3">
            <h5 class="text-uppercase mb-4 font-weight-bold text-warning">YugiDAatabase</h5>
            <p>Recopilado de cartas de Yugioh</p>
            
        </div>

        <div class="col-md-2 col-lg-2 col-xl-2 mx-auto mt-3">
            <h5 class="text-uppercase mb-4 font-weight-bold text-warning">Secciones</h5>
            <p>
                <a href="/pagina4/index.php" class="text-white" style="text-decoration: none">Inicio</a>
            </p>
            <p>
                <a href="/pagina4/Cartas.php" class="text-white" style="text-decoration: none">Cartas</a>
            </p>
            <p>
                <a href="/pagina4/Foro.php" class="text-white" style="text-decoration: none">Forum</a>
            </p>


        </div>

        <div class="cold-md-3 col-lg-2 col-xl-2 mx-auto mt-3">
            <h5 class="text-uppercase mb-4 font-weight-bold text-warning">Links</h5>

            <p>
                <a href="#" class="text-white" style="text-decoration: none">Facebook</a>
            </p>
            <p>
                <a href="#" class="text-white" style="text-decoration: none">Instagram</a>
            </p>
            <p>
                <a href="#" class="text-white" style="text-decoration: none">Twitter/X</a>
            </p>
            <p>
                <a href="#" class="text-white" style="text-decoration: none">Youtube</a>
            </p>

        </div>

        
          <div class="col-md-4 col-lg-3 col-xl-3 mx-auto mt-3">
              <h5 class="text-uppercase mb-4 font-weight-bold text-warning" >Contact</h5>
              <p>
                 <i class="fas fa-home mr-3"></i>CDMX, Cal 2333, MX
              </p> 
              <p>
                 <i class="fas fa-envelope mr-3"></i>YugiFans@gmail.com
              </p>
              <p>
                 <i class="fas fa-phone mr-3"></i>+92 3162859445
              </p>

        </div>

        
    <hr class="mb-4">
       <div class="row align-items-center">
          <div class="col-md-7 col-lg-8">
            <p> Copyright ©2020 All rights reserved by:
                <a href="#" style="text-decoration: none;">
                <strong class="text-warning">Studio Dice/SHUEISHA, TV TOKYO, Konami Digital Entertainment</strong>
            </a></p>
          </div>

      </div>


    </div>

</footer>
</html>