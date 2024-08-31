<?php
$menus = [
    [
        'href' => '#',
        'label' => 'Tickets',
        'permission' => 'menu_tickets',
        'submenus' => [
            ['href' => '../tickets/index.php', 'label' => 'Generar Ticket', 'permission' => '#'],
            ['href' => '../tickets/tickets-levantados.php', 'label' => 'Tickets levantados', 'permission' => '#'],
            ['href' => '../tickets/tickets-asignados.php', 'label' => 'Tickets asignados', 'permission' => '#'],
        ]
    ],
    [
        'href' => '#',
        'label' => 'Catalogos',
        'permission' => 'menu_catalogos',
        'submenus' => [
            ['href' => '../areas/index.php', 'label' => 'Areas', 'permission' => '#'],
            ['href' => '../categorias/index.php', 'label' => 'Categorias', 'permission' => '#'],
            ['href' => '../usuarios/index.php', 'label' => 'Usuarios', 'permission' => '#'],
            ['href' => '../tipotickets/index.php', 'label' => 'Incidencias', 'permission' => '#'],
            ['href' => '../tipousuario/index.php', 'label' => 'Tipos de usuario', 'permission' => '#'],
            ['href' => '../sucursales/index.php', 'label' => 'Sucursales', 'permission' => '#'],
            ['href' => '../cargos/index.php', 'label' => 'Cargos', 'permission' => '#'],
            ['href' => '../supervisores/index.php', 'label' => 'Supervisores', 'permission' => '#'],
            ['href' => '../permisos/index.php', 'label' => 'Permisos', 'permission' => '#'],
        ]
    ],
    [
        'href' => '#',
        'label' => 'Reportes',
        'permission' => 'menu_reportes',
        'submenus' => [
            ['href' => '../diario-actividades/index.php', 'label' => 'Diario Actividades', 'permission' => '#'],
            ['href' => '../versionado/menu.php', 'label' => 'Versionado', 'permission' => '#'],
            ['href' => '#', 'label' => 'Requerimientos', 'permission' => '#', 'submenus' => [
                ['href' => '../requerimientos/index.php', 'label' => 'Listado requerimientos', 'permission' => '#'],
                ['href' => '../requerimientos/create.php', 'label' => 'Generar requerimiento', 'permission' => '#'],
            ]],
            ['href' => '#', 'label' => 'Minutas', 'permission' => '#', 'submenus' => [
                ['href' => '../minutas/index.php', 'label' => 'Generar Minuta', 'permission' => '#'],
                ['href' => '../minutas/list.php', 'label' => 'Listado Minutas', 'permission' => '#'],
            ]],
        ]
    ]
];
?>

<div class="container4">
    <nav class="navbar navbar-expand-md navbar-dark bg-dark">
        <div class="container-fluid">
        <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbar-toggler" aria-controls="navbarTogglerDemo01" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
        </button>
        <div class="collapse navbar-collapse" id="navbar-toggler">
            <a class="navbar-brand" href="#">
                <img class="rounded-circle" src="./assets/img/imagenes_desarrollador/desarrollador-ejemplo.svg" alt="user" width="50px">
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

<!--
<div id="appNotification">
    <header class="p-2 mb-3 border-bottom bg-white">
        <div class="header-menu">
            <div class="d-flex flex-wrap align-items-center justify-content-between justify-content-lg-start">
                <a href="../tickets/tickets-levantados.php" class="d-flex align-items-center mb-2 mb-lg-0 link-body-emphasis text-decoration-none">
                    <img class="img-fluid " src="../../assets/img/pinneaples/PINIA.jpeg" width="162" height="162" alt="lapinia">
                </a>
                <div class="d-none d-lg-flex justify-content-start">
                    <ul id="nav-links" class="nav-links nav">
                        <?php foreach ($menus as $menu) {
                            if ($check_permission->byPermission($menu['permission'])) {
                                $header = '
                            <li class="nav-item dropdown">
                                <a class="nav-link dropdown-toggle" href="#" role="button" data-bs-toggle="dropdown" id="dropdownMenuButton" aria-expanded="false">
                                    ' . $menu['label'] . '
                                </a>
                                <ul class="dropdown-menu" aria-labelledby="dropdownMenuButton">';
                                foreach ($menu['submenus'] as $submenu) {
                                    if (!isset($submenu['submenus'])) {
                                        $header .= '<li><a class="dropdown-item" href="' . $submenu['href'] . '">' . $submenu['label'] . '</a></li>';
                                    } else {
                                        $header .= '<li>
                                                    <a class="dropdown-item" href="#">
                                                        ' . $submenu['label'] . ' &raquo;
                                                    </a>
                                                    <ul class="dropdown-menu dropdown-submenu">';
                                        foreach ($submenu['submenus'] as $sub) {
                                            $header .= '<li><a class="dropdown-item" href="' . $sub['href'] . '">' . $sub['label'] . '</a></li>';
                                        }
                                        $header .= '</ul>
                                                     </li>';
                                    }
                                }
                                $header .= '</ul>
                                                     </li>';
                                echo $header;
                            }
                        }
                        ?>
                    </ul>
                </div>

                <div class="d-flex">
                    <button class="navbar-toggler ms-auto d-lg-none" type="button" @click="getNotifications()" data-bs-toggle="offcanvas" data-bs-target="#offcanvasRight" aria-controls="offcanvasRight">
                        <i class="bi bi-bell-fill position-relative">
                            <span v-if="count > 0" class="position-absolute top-0 start-100 translate-middle badge rounded-pill bg-danger campanita">
                                {{count}}
                                <span class="visually-hidden">unread messages</span>
                            </span>
                        </i>
                    </button>
                    <button id="hamburger-icon" class="navbar-toggler ms-auto d-lg-none" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
                        <i class="fas fa-bars"></i>
                    </button>
                </div>

                <div class="ms-auto d-none d-lg-block">
                    <div class="d-flex align-items-center">
                        <div class="col-12 col-lg-auto me-lg-3" style="line-height:1;">
                            <span class="fw-bolder"><?= $session->authUser()['NOMBRE_USUARIO'] ?></span><br>
                            <span class="text-muted fw-semibold"><?= $session->authUser()['Area'] ?>, <?= $session->authUser()['SUCURSAL'] ?></span>
                        </div>
                        <button class="navbar-toggler btn-campanita ms-auto" type="button" @click="getNotifications()" data-bs-toggle="offcanvas" data-bs-target="#offcanvasRight" aria-controls="offcanvasRight">
                            <i class="bi bi-bell-fill position-relative">
                                <span v-if="count > 0" class="position-absolute top-0 start-100 translate-middle badge rounded-pill bg-danger campanita">
                                    {{count}}
                                    <span class="visually-hidden">unread messages</span>
                                </span>
                            </i>
                        </button>
                        <div class="dropdown text-end">
                            <a href="#" class="d-block link-body-emphasis text-decoration-none dropdown-toggle" data-bs-toggle="dropdown" aria-expanded="false">
                                <img src="../img/usuario.png" alt="avatar" width="42" height="42" class="rounded-circle">
                            </a>
                            <ul class="dropdown-menu text-small">
                                <li><a class="dropdown-item" href="../perfiles/index.php">Perfil</a></li>
                                <li>
                                    <hr class="dropdown-divider">
                                </li>
                                <li><a class="dropdown-item" href="../logoutTickets.php">Cerrar Sesión</a></li>
                            </ul>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="mx-auto user-area-section">
            <span class="fw-bolder"><?= $session->authUser()['NOMBRE_USUARIO'] ?></span><br>
            <span class="text-muted fw-semibold"><?= $session->authUser()['Area'] ?>, <?= $session->authUser()['SUCURSAL'] ?></span>
        </div>

        <div class="collapse navbar-collapse dropdown-menu-start mt-lg-0 mt-3" id="navbarSupportedContent" style="border: none;">
            <ul id="nav-links-small" class="nav-links nav flex-column d-lg-none">
                <?php foreach ($menus as $menu) {
                    if ($check_permission->byPermission($menu['permission'])) {
                        $header = '
                            <li class="nav-item dropdown">
                                <a class="nav-link dropdown-toggle" href="#" role="button" data-bs-toggle="dropdown" id="dropdownMenuButton" aria-expanded="false">
                                    ' . $menu['label'] . '
                                </a>
                                <ul class="dropdown-menu" aria-labelledby="dropdownMenuButton">';
                        foreach ($menu['submenus'] as $submenu) {
                            if (!isset($submenu['submenus'])) {
                                $header .= '<li><a class="dropdown-item" href="' . $submenu['href'] . '">' . $submenu['label'] . '</a></li>';
                            } else {
                                $header .= '<li class="dropdown-submenu-toggle" id="li-' . $submenu['label'] . '" onclick="mostrarSubMenu(event,\'ul-' . $submenu['label'] . '\')">
                                                    <a class="dropdown-item dropdown-toggle" href="#" aria-expanded="false">
                                                        ' . $submenu['label'] . '
                                                    </a>
                                                    <ul class="dropdown-menu dropdown-submenu" id="ul-' . $submenu['label'] . '">';
                                foreach ($submenu['submenus'] as $sub) {
                                    $header .= '<li><a class="dropdown-item" href="' . $sub['href'] . '">' . $sub['label'] . '</a></li>';
                                }
                                $header .= '</ul>
                                            </li>';
                            }
                        }
                        $header .= '</ul>
                                    </li>';
                        echo $header;
                    }
                }
                ?>
                <a class="dropdown-item" href="../perfiles/index.php">Perfil</a>
                <a class="dropdown-item" href="../logoutTickets.php">Cerrar Sesión</a>
            </ul>

        </div>
    </header>

    <section>
        <div class="offcanvas offcanvas-end windows-style" tabindex="-1" id="offcanvasRight" aria-labelledby="offcanvasRightLabel">
            <div class="offcanvas-header">
                <h6 id="offcanvasRightLabel">Notificaciones</h6>
                <button @click="deleteNotifications()" type="button" class="btn btn-all">
                    Borrar todo
                </button>
            </div>
            <div class="offcanvas-body">
                <div v-if="!loading" :class="(notifications.length == 0 ? 'h-100' : '')">
                    <div class="notification-card" v-for="(n,index) in notifications" :key="n.ID">
                        <div class="d-flex justify-content-between align-items-center notification-header">
                            <span>Gay desarrollo</span>
                            <button @click="deleteNotification(n.ID,index)" class="btn btn-all btn-sm" type="button"><i class="bi bi-x"></i></button>
                        </div>
                        <div class="d-flex notification-body">
                            <img width="62" height="62" src="../../assets/img/pinneaples/PINIA.jpeg" alt="lapinia">
                            <div class="py-1 d-flex flex-column notificacion-content">
                                <span class="title">{{n.TITLE}}</span>
                                <span class="body">{{n.BODY}}</span>
                            </div>
                        </div>
                    </div>
                    <div v-if="notifications.length == 0" class="empty-notification">
                        No hay nuevas notificaciones
                    </div>
                </div>

                <div v-if="loading">
                    <div class="notification-card" aria-hidden="true">
                        <h5 class="card-title placeholder-glow">
                            <span class="placeholder col-6"></span>
                        </h5>
                        <p class="card-text placeholder-glow">
                            <span class="placeholder col-7"></span>
                            <span class="placeholder col-4"></span>
                            <span class="placeholder col-4"></span>
                            <span class="placeholder col-6"></span>
                            <span class="placeholder col-8"></span>
                        </p>
                    </div>
                    <div class="notification-card" aria-hidden="true">
                        <h5 class="card-title placeholder-glow">
                            <span class="placeholder col-6"></span>
                        </h5>
                        <p class="card-text placeholder-glow">
                            <span class="placeholder col-7"></span>
                            <span class="placeholder col-4"></span>
                            <span class="placeholder col-4"></span>
                            <span class="placeholder col-6"></span>
                            <span class="placeholder col-8"></span>
                        </p>
                    </div>
                    <div class="notification-card" aria-hidden="true">
                        <h5 class="card-title placeholder-glow">
                            <span class="placeholder col-6"></span>
                        </h5>
                        <p class="card-text placeholder-glow">
                            <span class="placeholder col-7"></span>
                            <span class="placeholder col-4"></span>
                            <span class="placeholder col-4"></span>
                            <span class="placeholder col-6"></span>
                            <span class="placeholder col-8"></span>
                        </p>
                    </div>
                </div>

            </div>
        </div>
    </section>
    
</div>
-->