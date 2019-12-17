<?php
session_start();

?>
<header>
    <nav class="navbar navbar-expand-lg navbar-dark bg-dark">
        <div class="container">
            <a href="?controller=Home&action=mensaje&log=1" class="navbar-brand">UTP</a>
            <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#menuNavegacion" aria-controls="menuNavegacion" aria-expanded="false" aria-label="Alternar Menu">
                <span class="navbar-toggler-icon"></span>
            </button>
            <div class="collapse navbar-collapse" id="menuNavegacion">
                <ul class="navbar-nav mr-auto">
                    <li class="nav-item">
                        <a href="#" class="nav-link">Control de usuarios</a>
                    </li>
                    <!-- Boton Desplegable -->
                    <li class="nav-item dropdown">
                        <a href="#" class="nav-link dropdown-toggle" id="navbarDropdown" name="menu" data-toggle="dropdown">
                            Administración docente
                        </a>
                        <div class="dropdown-menu" aria-labelledby="navbarDropdown">
                            <a href="?controller=Docente&action=mostrar&log=1" class="dropdown-item" id="listard">Listar docentes</a>
                            <a href="?controller=Administrativo&action=mostrar&log=1" class="dropdown-item" id="listara">Listar administrativos</a>
                            <a href="?controller=Administrativo&action=add6&log=1" class="dropdown-item" id="listard">Listar docentes por cédula</a>
                            <a href="?controller=Administrativo&action=add5&log=1" class="dropdown-item" id="usuario">Crear usuarios</a>
                        </div>
                    </li>
                    <li class="nav-item">
                        <a href="#" class="nav-link">Reparación de daños</a>
                    </li>
                    <li class="nav-item">
                        <a  class="nav-link" id="registrar" href="http://localhost:8000">Salir</a>
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