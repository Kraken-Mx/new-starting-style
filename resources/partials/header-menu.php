<?php
$menus = [
    [
        'href' => '../views/about_new.php',
        'label' => 'About the new'
    ],
    [
        'href' => '../views/color_generator.php',
        'label' => 'Random color generator'
    ],
    [
        'href' => '../views/pinneapple.php',
        'label' => 'Pinneapple surprise'
    ]
];
$current_page = basename($_SERVER['PHP_SELF']);
?>

<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="author" content="Kraken-Mx">
    <meta name="description" content="Portafolio de Desarrollo Web">
    <meta name="keywords" content="Kraken-Mx, HTML, CSS, JavaScript, React">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>New Starting Style | Kraken Mx</title>
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
            <?php foreach ($menus as $menu) {
                /*$header = '<li class="nav-item"><a class="nav-link" href="' . $menu['href'] . '">' . $menu['label'] . '</a></li>';
                echo $header;*/

                $active_class = ($current_page === basename($menu['href'])) ? 'active text-info bg-dark' : '';
                echo '<li class="nav-item"><a class="nav-link ' . $active_class . '" href="' . $menu['href'] . '">' . $menu['label'] . '</a></li>';

            }?>
            </ul>

        </div>
        </div>
    </nav>  
</div>
</body>
</html>
