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
  <?php include '../partials/header-menu.php'; ?>
  
  <section class="new1 principal align-items-stretch">
      <div class="principal-superior d-flex flex-column justify-content-center align-items-center">
          <img class="principal-image" src="../../assets/img/pinneaples/PINIA.jpeg" alt="logo-pinia">
          <h1 class="seccion-titulo">Hola, soy una pinia promedio</h1>
          <h2 class="seccion-descripcion">Crea columnas divertidas y encuentra una sorpresa !!!</h2>
          <!--<button id="new_button">Create new column</button>-->
          <section id="new_section"></section>
      </div>
      <div class="principal-inferior">
          <img class="principal-inferior-imagen img-fluid" src="../../assets/img/hero-inferior.svg" alt="Monitor, laptop y logos de HTML, CSS, JavaScript y React.">
      </div>
  </section>

  <!--Seccion Sobre Mi-->
  <section class="new1 sobre-mi seccion-oscura">
      <div class="contenedor">
          <h2 class="seccion-titulo">Conoce al desarrollador</h2>
          <p class="seccion-texto">Lorem ipsum dolor sit amet, consectetur adipiscing elit. Nulla tempus bibendum dictum. Cras interdum euismod elit et tincidunt. Duis id ullamcorper urna. Nullam placerat accumsan justo vel consequat. Nullam leo tortor, placerat eget euismod in, venenatis non leo. Maecenas porttitor purus ut neque molestie viverra. Vivamus sollicitudin turpis vel enim sollicitudin, vel pellentesque dui luctus. Morbi leo nibh, viverra ac maximus lobortis, pretium eu velit. Phasellus sagittis ex sit amet aliquet vulputate.</p>
      </div>
  </section>

  <!--Seccion Experiencia-->
  <section class="new1 experiencia seccion-clara">
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

</main>
<!--Bootstrap Javascript-->
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-C6RzsynM9kWDrMNeT87bh95OGNyZPhcTNXj1NW7RuBCsyN/o0jlpcV8Qyq46cDfL" crossorigin="anonymous"></script>
</body>
</html>