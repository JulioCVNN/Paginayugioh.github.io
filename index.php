<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Inicio</title>
    <link rel="stylesheet" type="text/css" href="css/styles.css">
    
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/swiper@11/swiper-bundle.min.css"/>
  
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

<!---Cuadro de texto superior---->


<header>

<div class="cuadro">
   
     <img src ="Images/MasterDuel.webp" alt="">
     <div class="cajatexto">
     <h3>Nuevo evento</h3>
     <p></p>
     <p></p>
     <p></p>
     <p></p>
     <p></p>
     <h3 class="texto">Sed ut perspiciatis unde omnis iste natus error sit voluptatem accusantium doloremque laudantium, totam rem aperiam, eaque ipsa quae ab illo inventore veritatis et quasi architecto beatae vitae dicta sunt explicabo. Nemo enim ipsam voluptatem quia voluptas sit aspernatur aut odit aut fugit, sed quia consequuntur magni dolores eos qui ratione voluptatem sequi nesciunt. Neque porro quisquam est, qui dolorem ipsum quia dolor sit amet, consectetur, adipisci velit, sed quia non numquam eius modi tempora incidunt ut labore et dolore magnam aliquam quaerat voluptatem. Ut enim ad minima veniam, quis nostrum exercitationem ullam corporis suscipit laboriosam, nisi ut aliquid ex ea commodi consequatur? Quis autem vel eum iure reprehenderit qui in ea voluptate velit esse quam nihil molestiae 
      consequatur, vel illum qui dolorem eum fugiat quo voluptas nulla pariatur? Sed ut perspiciatis unde omnis iste natus error sit </h3>
     </div>

</div>

</header>


<!---Cuadros de noticias deslizantes---->


  <div class="cuadro2"></div>

     
<div class="cont2">
        <div class="cont">

<div class="article_container swiper"> 
   <div class="card_wrapper swiper-wrapper">
       <article class="article_card swiper-slide">
           <figure class="article_image">
              <img src="images/noticia2.png" alt="">
            </figure> I
            <div class="article_content">
                <a href="#" class="card_category">
                 Noticia
                </a>
                <h3 class="card_title">
                   Nuevas tarjetas
                </h3>
                <p class="card_excerpt">
                 Tenemos nuevos personajes
                </p>
            </div>
        </article>
        <article class="article_card swiper-slide">
           <figure class="article_image">
              <img src="images/noticia3.png" alt="">
            </figure> I
            <div class="article_content">
                <a href="#" class="card_category">
                 Articulo
                </a>
                <h3 class="card_title">
                   Nuevo producto disponible
                </h3>
                <p class="card_excerpt">
                 Haz click si te interesa
                </p>
            </div>
        </article>
        <article class="article_card swiper-slide">
           <figure class="article_image">
              <img src="images/noticia4.png" alt="">
            </figure> I
            <div class="article_content">
                <a href="#" class="card_category">
                 Critica
                </a>
                <h3 class="card_title">
                   El nuevo episodio
                </h3>
                <p class="card_excerpt">
                 Esta es una critica al nuevo epi...
                </p>
            </div>
        </article>
        <article class="article_card swiper-slide">
           <figure class="article_image">
              <img src="images/noticia1.png" alt="">
            </figure> I
            <div class="article_content">
                <a href="#" class="card_category">
                 Noticia
                </a>
                <h3 class="card_title">
                   Nuevo evento se aproxima
                </h3>
                <p class="card_excerpt">
                 Un nuevo y sorprendente evento de Yugioh se aproxima en la proximas fechas
                </p>
            </div>
        </article>
    </div>

     <div class="swiper-pagination"></div>

     <div class="swiper-button-prev"></div>
     <div class="swiper-button-next"></div>
 </div>

</div>
</div>


<!---Cuadros de noticias inferior---->

<div class="cuadro2"></div>

  <div class="Articulos">

  </div>


<script src="https://cdn.jsdelivr.net/npm/swiper@11/swiper-bundle.min.js"></script>
<script src="js/main.js"></script>


<div class="fondo">
  <div class="grid-container">

    <div class="articulo">
       <img src="Images/noticia1.png" alt="">
       <div class="contenido">
     <h2 class="Categoria">Noticia</h2>
     <p class="Info">El dia 14 de Abril se llevara a cabo el evento...</p>
     </div>
     <button class="btn btn-outline-success"  type="submit">Ver mas</button>
    </div>

    <div class="articulo">
       <img src="Images/noticia2.png" alt="">
       <div class="contenido">
     <h2 class="Categoria">Noticia</h2>
     <p class="Info">Nuevas cartas disponibles...</p>
     </div>
     <button class="btn btn-outline-success"  type="submit">Ver mas</button>
    </div>

    <div class="articulo">
       <img src="Images/noticia6.png" alt="">
       <div class="contenido">
     <h2 class="Categoria">Noticia</h2>
     <p class="Info">El nuevo volumen de...</p>
     </div>
     <button class="btn btn-outline-success"  type="submit">Ver mas</button>
    </div>

    <div class="articulo">
       <img src="Images/noticia5.png" alt="">
       <div class="contenido">
     <h2 class="Categoria">Critica</h2>
     <p class="Info">Hoy vamos a hacer una critica sobre...</p>
     </div>
     <button class="btn btn-outline-success"  type="submit">Ver mas</button>
    </div>

    <div class="articulo">
       <img src="Images/noticia7.png" alt="">
       <div class="contenido">
     <h2 class="Categoria">Articulo</h2>
     <p class="Info">Que signifcaba estos simbolos? ...</p>
     </div>
     <button class="btn btn-outline-success"  type="submit">Ver mas</button>
    </div>

    <div class="articulo">
       <img src="Images/noticia1.png" alt="">
       <div class="contenido">
     <h2 class="Categoria">Noticia</h2>
     <p class="Info">El dia 14 de Abril se llevara a cabo el evento...</p>
     </div>
     <button class="btn btn-outline-success"  type="submit">Ver mas</button>
    </div>

    <div class="articulo">
       <img src="Images/noticia1.png" alt="">
       <div class="contenido">
     <h2 class="Categoria">Noticia</h2>
     <p class="Info">El dia 14 de Abril se llevara a cabo el evento...</p>
     </div>
     <button class="btn btn-outline-success"  type="submit">Ver mas</button>
    </div>

    <div class="articulo">
       <img src="Images/noticia1.png" alt="">
       <div class="contenido">
     <h2 class="Categoria">Noticia</h2>
     <p class="Info">El dia 14 de Abril se llevara a cabo el evento...</p>
     </div>
     <button class="btn btn-outline-success"  type="submit">Ver mas</button>
    </div>


  </div>
</div>

<div class="cuadro2"></div>


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
            <p> Copyright ©2024 All rights reserved by:
                <a href="#" style="text-decoration: none;">
                <strong class="text-warning">Studio Dice/SHUEISHA, TV TOKYO, Konami Digital Entertainment</strong>
            </a></p>
          </div>

      </div>


    </div>

</footer>




</html>