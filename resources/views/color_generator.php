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
  <?php include '../partials/header-menu.php' ?>
  
  <section class="new1 principal align-items-stretch">
    <!-- EJEMPLO PARA USAR CLASS="ROW" EN VEZ DE UNA TABLA
    <div class="card-body">
      <div class="row">
          <div class="col-12 col-sm-6 col-md-4 col-lg-4">
              <label for="fecha_inicial" class="col-form-label text-start">Fecha inicial</label>
              <input class="form-control" type="date" v-model="form.fecha_inicial" required>
          </div>
          <div class="col-12 col-sm-6 col-md-4 col-lg-4">
              <label for="fecha_final" class="col-form-label text-start">Fecha final</label>
              <input class="form-control" type="date" v-model="form.fecha_final" required>
          </div>
          <div class="col-12 col-sm-6 col-md-4 col-lg-4">
              <label for="idUser" class="form-label">Usuario</label>
              <select class="form-select" name="idUser" id="idUser" v-model="form.user" required>
                  <option value="">Selecciona una opción...</option>
                  <option v-for="(user, index) in users" :key="index" :value="user.ID_USUARIO">{{user.NOMBRE_USUARIO}}
                  </option>
              </select>
          </div>
      </div>
      <div class="row mt-2">
          <div class="mb-3 row">
              <div class="col-sm" style="text-align: right;">
                  <button type="button" name="clean" id="clean" class="btn btn-danger me-2" onclick="cleanFilter()">Limpiar Filtros</button>
                  <button type="button" name="filtra" id="filtra" class="btn btn-success me-2" onclick="filtrarLista()">Filtrar</button>
              </div>
          </div>
      </div>
    </div>
    -->
    <div class="table-responsive">
      <table class="new2 table table-bordered table-dark">
        <thead>
          <tr>
            <th scope="col" colspan="2"><button class="rounded text-light bg-dark border border-light" id="new_color">Create New Color</button></th>
            <!--
            <th scope="col">#</th>
            <th scope="col">First</th>
            <th scope="col">Last</th>-->
          </tr>
        </thead>
        <tbody>
          <tr>
            <th id="row_one" scope="row"></th>
          </tr>
          <tr>
            <th id="row_two" scope="row"></th>
          </tr>
        </tbody>
      </table>
    </div>
    <div class="principal-superior d-flex flex-column justify-content-center align-items-center">
        <img class="principal-image" src="../../assets/img/pineapples/PINIA.jpeg" alt="logo-pinia">
        <h1 class="seccion-titulo">Sección 'Generador de colores'</h1>
        <h2>Crea !!! <button class="btn btn-outline-info my-2 my-sm-0" id="new_button">Create new row</button></h2>
        <section class="mt-3" id="new_section"></section>
    </div>
  </section>
</main>
<script src="../js/column.js"></script>
<!--Bootstrap Javascript-->
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-C6RzsynM9kWDrMNeT87bh95OGNyZPhcTNXj1NW7RuBCsyN/o0jlpcV8Qyq46cDfL" crossorigin="anonymous"></script>

</body>
</html>
