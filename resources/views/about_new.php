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
    <link rel="icon" type="image/x-icon" href="../../assets/img/pineapples/PINIA.jpeg">
    <!--<link rel="icon" href="../../assets/img/pineapples/PINIA.jpeg">-->
    <!--<link href="../../assets/css/login.css" rel="stylesheet">-->
    <!--Bootstrap CSS
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN" crossorigin="anonymous">
    -->
    <!--Bootstrap Icons (bi)
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.11.1/font/bootstrap-icons.css">
    <link href="../../assets/css/index.css" rel="stylesheet">-->
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
          <img class="logo-starting" src="../../assets/img/starting_style.png" alt="starting_style">
          <h2 class="seccion-descripcion">The @starting-style CSS at-rule is used to define starting values for properties set on an element that you want to transition from when the element receives its first style update, i.e. when an element is first displayed on a previously loaded page.</h2>
          <p class="link1"><a class="link-success" href="https://developer.mozilla.org/en-US/docs/Web/CSS/@starting-style" target="_blank">Learn more about new CSS at-rule</a></p>
      </div>
      <div class="principal-superior d-flex flex-column justify-content-center align-items-center">
          <h1 class="seccion-titulo">🍍🍍🍍 Fresh Pineapples 🍍🍍🍍</h1>
          <img class="img-fluid" src="../../assets/img/pineapples/piñas_fondo_04.png" alt="logo-pinia">
          <!--<h2 class="seccion-descripcion">Crea columnas divertidas y encuentra una sorpresa !!!</h2>-->
          <section id="new_section"></section>
      </div>
      <!--
      <div class="principal-inferior">
          <img class="principal-inferior-imagen img-fluid" src="../../assets/img/hero-inferior.svg" alt="Monitor, laptop y logos de HTML, CSS, JavaScript y React.">
      </div>-->
  </section>
</main>
<!--Bootstrap Javascript-->
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-C6RzsynM9kWDrMNeT87bh95OGNyZPhcTNXj1NW7RuBCsyN/o0jlpcV8Qyq46cDfL" crossorigin="anonymous"></script>

</body>
</html>