<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="author" content="Kraken-Mx">
    <meta name="description" content="Portafolio de Desarrollo Web">
    <meta name="keywords" content="Kraken-Mx, HTML, CSS, JavaScript, React">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>New Starting Style | Kraken Mx</title>
    <!-- https://developer.mozilla.org/en-US/docs/Web/CSS/@starting-style -->
    <link rel="icon" type="image/x-icon" href="../../assets/img/pinneaples/PINIA.jpeg">
    <!--<link rel="icon" href="../../assets/img/pinneaples/PINIA.jpeg">-->
    <!--<link href="../../assets/css/login.css" rel="stylesheet">-->
    <!--Bootstrap CSS-->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN" crossorigin="anonymous">
    <!--Bootstrap Icons (bi)-->
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.11.1/font/bootstrap-icons.css">
    <link href="../../assets/css/index.css" rel="stylesheet">
    <!--Google Fonts-->
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Rubik+Dirt&display=swap" rel="stylesheet">
    <script type="module">
        //const { asyncReadFile } = require('./resources/js/promise.js')
        //asyncReadFile()
    </script>
</head>
<body>
<main id="app" class="flex-shrink-0">
    <?php include '../partials/header-menu.php' ?>

  <!--
  <div class="container4">
    <nav class="navbar navbar-expand-md navbar-dark bg-dark">
        <div class="container-fluid">
        <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbar-toggler" aria-controls="navbarTogglerDemo01" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
        </button>
        <div class="collapse navbar-collapse" id="navbar-toggler">
            <a class="navbar-brand" href="#">
                <img class="rounded-circle" src="../../assets/img/imagenes_desarrollador/desarrollador-ejemplo.svg" alt="user" width="50px">
            </a>
            <ul class="navbar-nav d-flex justify-content-center align-items-center">
            <li class="nav-item">
                <a class="nav-link active" aria-current="page" href="#">About the new</a>
            </li>
            <li class="nav-item">
                <a class="nav-link" href="#">Color generator</a>
            </li>
            <li class="nav-item">
                <a class="nav-link" href="#">Testimonios</a>
            </li>
            <li class="nav-item">
                <a class="nav-link" href="#">Contacto</a>
            </li>
            <li class="nav-item">
                <button class="btn btn-outline-info my-2 my-sm-0" type="submit">Search</button>
            </li>
            </ul>
        </div>
        </div>
    </nav>  
  </div>
  -->

  <!--
  <button class="btn btn-outline-info my-2 my-sm-0" id="new_button">Create new column</button>
  <button class="btn btn-outline-info my-2 my-sm-0" type="submit">Search</button>
  -->
  <button id="new_button">Create new column</button>
  <section id="new_section"></section>
  
  <section class="new1 principal align-items-stretch">
      <div class="principal-superior d-flex flex-column justify-content-center align-items-center">
          <img class="principal-image" src="../../assets/img/pinneaples/PINIA.jpeg" alt="logo-pinia">
          <h1 class="seccion-titulo">Sección 'Generador de colores'</h1>
          <h2>Crea !!!</h2>
          <button class="btn btn-outline-info my-2 my-sm-0" id="new_button">Create new column</button>
          <!--<button id="new_button">Create new column</button>-->
          <section id="new_section"></section>
      </div>
      <div class="principal-inferior">
          <img class="principal-inferior-imagen img-fluid" src="../../assets/img/hero-inferior.svg" alt="Monitor, laptop y logos de HTML, CSS, JavaScript y React.">
      </div>
  </section>

  <!--Seccion Sobre Mi-->
  <section class="sobre-mi seccion-oscura">
      <div class="contenedor">
          <h2 class="seccion-titulo">Conoce al desarrollador</h2>
          <p class="seccion-texto">Lorem ipsum dolor sit amet, consectetur adipiscing elit. Nulla tempus bibendum dictum. Cras interdum euismod elit et tincidunt. Duis id ullamcorper urna. Nullam placerat accumsan justo vel consequat. Nullam leo tortor, placerat eget euismod in, venenatis non leo. Maecenas porttitor purus ut neque molestie viverra. Vivamus sollicitudin turpis vel enim sollicitudin, vel pellentesque dui luctus. Morbi leo nibh, viverra ac maximus lobortis, pretium eu velit. Phasellus sagittis ex sit amet aliquet vulputate.</p>
      </div>
  </section>

  <!--Seccion Experiencia-->
  <section class="experiencia seccion-clara">
      <div class="container text-center">
          <div class="row">
              <!--Desarrollo Web-->
              <div class="columna col-12 col-md-4">
                <i class="bi bi-laptop"></i>
                <p class="experiencia-titulo">Desarrollo Web</p>
                <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Nulla tempus bibendum dictum. Cras interdum euismod elit et tincidunt. Duis id ullamcorper urna.</p>
                <div class="badges-contenedor">
                  <span class="badge text-bg-primary">HTML</span>
                  <span class="badge text-bg-primary">CSS</span>
                  <span class="badge text-bg-primary">JavaScript</span>
                  <span class="badge text-bg-primary">React</span>
                </div>
              </div>
              <!--Articulos-->
              <div class="columna col-12 col-md-4">
                <i class="bi bi-laptop"></i>
                <p class="experiencia-titulo">Artículos</p>
                <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Nulla tempus bibendum dictum. Cras interdum euismod elit et tincidunt. Duis id ullamcorper urna.</p>
                <div class="badges-contenedor">
                  <span class="badge text-bg-primary">Escribir</span>
                  <span class="badge text-bg-primary">Editar</span>
                  <span class="badge text-bg-primary">Blogs</span>
                </div>
              </div>
              <!--Estudiante-->
              <div class="columna col-12 col-md-4">
                <i class="bi bi-laptop"></i>
                <p class="experiencia-titulo">Estudiante</p>
                <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Nulla tempus bibendum dictum. Cras interdum euismod elit et tincidunt. Duis id ullamcorper urna.</p>
                <div class="badges-contenedor">
                  <span class="badge text-bg-primary">freeCodeCamp</span>
                  <span class="badge text-bg-primary">Desarrollo Web</span>
                  <span class="badge text-bg-primary">Python</span>
                </div>
              </div>
          </div>
      </div>
  </section>

  <!--Seccion Proyectos-->
  <section class="proyectos-recientes seccion-clara d-flex flex-column">
      <h2 class="seccion-titulo texto-negro">Mis Proyectos Recientes</h2>
      <h3 class="seccion-descripcion">Estos son algunos proyectos que he creado recientemente...</h3>
      <!--Galeria de Proyectos-->
      <div class="container text-center proyectos-contenedor">
        <div class="row">
          <!--Proyecto 1-->
          <div class="col-12 col-md-6 col-lg-4">
            <div class="proyecto">
              <img src="../../assets/img/projects_examples/proyecto1.png" alt="Proyecto 1">
              <div class="overlay">
                <p>Proyecto 1</p>
                <div class="iconos-contenedor">
                  <a href="https://github.com/" target="_blank" rel="noopener noreferrer">
                    <i class="bi bi-github"></i>
                  </a>
                  <a href="https://www.freecodecamp.org/espanol/" target="_blank" rel="noopener noreferrer">
                    <i class="bi bi-laptop"></i>
                  </a>
                </div>
              </div>
            </div>
          </div>
          <!--Proyecto 2-->
          <div class="col-12 col-md-6 col-lg-4">
            <div class="proyecto">
              <img src="../../assets/img/projects_examples/proyecto2.png" alt="Proyecto 2">
              <div class="overlay">
                <p>Proyecto 2</p>
                <div class="iconos-contenedor">
                  <a href="https://github.com/" target="_blank" rel="noopener noreferrer">
                    <i class="bi bi-github"></i>
                  </a>
                  <a href="https://www.freecodecamp.org/espanol/" target="_blank" rel="noopener noreferrer">
                    <i class="bi bi-laptop"></i>
                  </a>
                </div>
              </div>
            </div>
          </div>
          <!--Proyecto 3-->
          <div class="col-12 col-md-6 col-lg-4">
            <div class="proyecto">
              <img src="../../assets/img/projects_examples/proyecto3.png" alt="Proyecto 3">
              <div class="overlay">
                <p>Proyecto 3</p>
                <div class="iconos-contenedor">
                  <a href="https://github.com/" target="_blank" rel="noopener noreferrer">
                    <i class="bi bi-github"></i>
                  </a>
                  <a href="https://www.freecodecamp.org/espanol/" target="_blank" rel="noopener noreferrer">
                    <i class="bi bi-laptop"></i>
                  </a>
                </div>
              </div>
            </div>
          </div>
          <!--Proyecto 4-->
          <div class="col-12 col-md-6 col-lg-4">
            <div class="proyecto">
              <img src="../../assets/img/projects_examples/proyecto4.png" alt="Proyecto 4">
              <div class="overlay">
                <p>Proyecto 4</p>
                <div class="iconos-contenedor">
                  <a href="https://github.com/" target="_blank" rel="noopener noreferrer">
                    <i class="bi bi-github"></i>
                  </a>
                  <a href="https://www.freecodecamp.org/espanol/" target="_blank" rel="noopener noreferrer">
                    <i class="bi bi-laptop"></i>
                  </a>
                </div>
              </div>
            </div>
          </div>
          <!--Proyecto 5-->
          <div class="col-12 col-md-6 col-lg-4">
            <div class="proyecto">
              <img src="../../assets/img/projects_examples/proyecto5.png" alt="Proyecto 5">
              <div class="overlay">
                <p>Proyecto 5</p>
                <div class="iconos-contenedor">
                  <a href="https://github.com/" target="_blank" rel="noopener noreferrer">
                    <i class="bi bi-github"></i>
                  </a>
                  <a href="https://www.freecodecamp.org/espanol/" target="_blank" rel="noopener noreferrer">
                    <i class="bi bi-laptop"></i>
                  </a>
                </div>
              </div>
            </div>
          </div>
          <!--Proyecto 6-->
          <div class="col-12 col-md-6 col-lg-4">
            <div class="proyecto">
              <img src="../../assets/img/projects_examples/proyecto6.png" alt="Proyecto 6">
              <div class="overlay">
                <p>Proyecto 6</p>
                <div class="iconos-contenedor">
                  <a href="https://github.com/" target="_blank" rel="noopener noreferrer">
                    <i class="bi bi-github"></i>
                  </a>
                  <a href="https://www.freecodecamp.org/espanol/" target="_blank" rel="noopener noreferrer">
                    <i class="bi bi-laptop"></i>
                  </a>
                </div>
              </div>
            </div>
          </div>
        </div>
      </div>
      <a href="https://github.com/" target="_blank" rel="noopener noreferrer">
        <button type="button" class="btn btn-info">
          Ver Más Proyectos
          <i class="bi bi-arrow-right-circle-fill"></i>
        </button>
      </a>
  </section>

  <!--Seccion  Articulos-->
  <section class="articulos" justify-content-start>
    <h2 class="seccion-titulo texto-negro">Artículos</h2>
    <div class="card">
      <div class="card-header">
        Más Recientes
      </div>
      <ul class="list-group list-group-flush">
        <a href="https://www.freecodecamp.org/espanol/news" target="_blank" rel="noopener noreferrer">
          <li class="list-group-item">El decorador @property en Python - cómo usarlo, ventajas y sintaxis</li>
        </a>
        <a href="https://www.freecodecamp.org/espanol/news" target="_blank" rel="noopener noreferrer">
          <li class="list-group-item">Python tutorial ciclos while - while True ejemplos de sintaxis y ciclos infinitos</li>
        </a>
        <a href="https://www.freecodecamp.org/espanol/news" target="_blank" rel="noopener noreferrer">
          <li class="list-group-item">Python leer archivo JSON - cómo cargar JSON desde un archivo y procesar dumps</li>
        </a>
        <a href="https://www.freecodecamp.org/espanol/news" target="_blank" rel="noopener noreferrer">
          <li class="list-group-item">Python cómo escribir en un archivo - abrir, leer, escribir y otras funciones de archivos explicadas</li>
        </a>
        <a href="https://www.freecodecamp.org/espanol/news" target="_blank" rel="noopener noreferrer">
          <li class="list-group-item">¿Para qué se usa Python? 10+ usos del lenguaje de programación Python</li>
        </a>
      </ul>
    </div>
    <a href="https://github.com/" target="_blank" rel="noopener noreferrer">
      <button type="button" class="btn btn-info">
        Ver Más Proyectos
        <i class="bi bi-arrow-right-circle-fill"></i>
      </button>
    </a>

    <button type="button" class="btn btn-info">
      Ver Más Articulos
    </button>

  </section>

  <!--
  <div class="logo">
      <img src="../../assets/img/308789b0337fdf2779c25239cd697c76[1].jpg" alt="logo-2" width="180">
  </div>
  <div class="logo">
      <img src="../../assets/img/BLUE.jpeg" alt="logo-3" width="180">
  </div>
  <div class="logo">
      <img src="../../assets/img/pepe_el_pollo.png" alt="logo-3" width="180">
  </div>
  <div class="logo">
      <img src="../../assets/img/pinneaples/pinita.png" alt="logo-3" width="180">
  </div>
  -->
</main>
<!--<script src="./resources/js/column.js"></script>-->
<!--Bootstrap Javascript-->
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-C6RzsynM9kWDrMNeT87bh95OGNyZPhcTNXj1NW7RuBCsyN/o0jlpcV8Qyq46cDfL" crossorigin="anonymous"></script>
</body>
</html>