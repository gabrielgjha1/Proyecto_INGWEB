<?php
session_start();
$_SESSION['resultado']
?>
<script>
    function ocultar() {
        var boton = document.getElementById('registrar');
    }
</script>
<header>
    <nav class="navbar navbar-expand-lg navbar-dark bg-dark">
        <div class="container">
            <a href="?controller=Home&action=mensaje&log=2" class="navbar-brand">UTP</a>
            <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#menuNavegacion" aria-controls="menuNavegacion" aria-expanded="false" aria-label="Alternar Menu">
                <span class="navbar-toggler-icon"></span>
            </button>
            <div class="collapse navbar-collapse" id="menuNavegacion">
                <ul class="navbar-nav mr-auto">

                    <!-- Boton Desplegable -->
                    <li class="nav-item dropdown">
                        <a href="#" class="nav-link dropdown-toggle" id="navbarDropdown" name="menu" data-toggle="dropdown">
                            Administración docente
                        </a>
                        <div class="dropdown-menu" aria-labelledby="navbarDropdown">
                            <a href="?controller=Docente&action=add&log=2" class="dropdown-item" id="registrar">Registrar docente</a>
                            <a href="?controller=Docente&action=add4&log=2" class="dropdown-item" id="usuario">Modificar datos docente</a>
                        </div>
                    </li>
                    <li class="nav-item">
                        <a href="#" class="nav-link">Reparación de daños</a>
                    </li>
                </ul>

                <form class="form-inline my-2 my-lg-0" action="">
                    <input type="text" class="form-control mr-sm-2" type="search" placeholder="Buscar">
                    <button class="btn btn-primary my-2 my-sm-0" type="submit">Buscar</button>
                </form>
            </div>
        </div>
    </nav>
</header>