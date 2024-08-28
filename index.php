<!doctype html>
<html lang="es">
<head>
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Crear Columnas</title>
    <link rel="icon" href="./img/PINIA.jpeg">
    <!--<link href="./resources/css/login.css" rel="stylesheet">-->
    <script type="module">
        //const { asyncReadFile } = require('./resources/js/promise.js')
        //asyncReadFile()
    </script>
</head>
<body>

<main>
    <section class="form">
        <div class="logo">
            <img src="./img/PINIA.jpeg" alt="logo-pinia" width="180">
        </div>
        <h1 class="title">La pinia</h1>

        <p class="description">Ingresa la pinia</p>
        <label class="form-control__label">Usuario</label>
        <input type="text" name="user" class="form-control">
        <label class="form-control__label">Contraseña</label>
        <div class="password-field">
            <input type="password" name="password" class="form-control" id="password">
            <!--
            <svg id="eye-icon" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 256 256" onclick="mostrarPassword()">
                <line id="eye-open" x1="48" y1="40" x2="208" y2="216" fill="none" stroke="#000" stroke-linecap="round" stroke-linejoin="round" stroke-width="12"/><path d="M154.9,157.6A39.6,39.6,0,0,1,128,168a40,40,0,0,1-26.9-69.6" fill="none" stroke="#000" stroke-linecap="round" stroke-linejoin="round" stroke-width="12"/><path d="M74,68.6C33.2,89.2,16,128,16,128s32,72,112,72a117.9,117.9,0,0,0,54-12.6" fill="none" stroke="#000" stroke-linecap="round" stroke-linejoin="round" stroke-width="12"/><path d="M208.6,169.1C230.4,149.6,240,128,240,128S208,56,128,56a123.9,123.9,0,0,0-20.7,1.7" fill="none" stroke="#000" stroke-linecap="round" stroke-linejoin="round" stroke-width="12"/><path d="M135.5,88.7a39.9,39.9,0,0,1,32.3,35.5" fill="none" stroke="#000" stroke-linecap="round" stroke-linejoin="round" stroke-width="12"/>
                <path id="eye-closed" d="M128,56C48,56,16,128,16,128s32,72,112,72,112-72,112-72S208,56,128,56Z" fill="none" stroke="#000" stroke-linecap="round" stroke-linejoin="round" stroke-width="12"/><circle cx="128" cy="128" r="40" fill="none" stroke="#000" stroke-linecap="round" stroke-linejoin="round" stroke-width="12"/>
            </svg>
            -->
        </div>
        <button type="submit" name="inicioSesion" class="form__submit" id="submit">Iniciar Sesión</button>
    </section>

    <button id="new_button">Create new column</button>
    <section id="new_section"></section>

    <div class="logo">
        <img src="./img/308789b0337fdf2779c25239cd697c76[1].jpg" alt="logo-2" width="180">
    </div>
    <div class="logo">
        <img src="./img/BLUE.jpeg" alt="logo-3" width="180">
    </div>
    <div class="logo">
        <img src="./img/pepe_el_pollo.png" alt="logo-3" width="180">
    </div>
    <div class="logo">
        <img src="./img/pinita.png" alt="logo-3" width="180">
    </div>
    
    <!--
    <section class="form__animation">
        <div id="ball">
            <div class="ball">
                <div id="face">
                    <div class="ball__eyes">
                        <div class="eye_wrap"><span class="eye"></span></div>
                        <div class="eye_wrap"><span class="eye"></span></div>
                    </div>
                    <div class="ball__mouth"></div>
                </div>
            </div>
        </div>
        <div class="ball__shadow"></div>
    </section>
    -->
</main>
<script src="./resources/js/column.js"></script>
</body>
</html>