<div class="container">


<main role="main" class="col-md-12 ">

    <h2 class="mt-2">Administrativos Información personal</h2>
    <div class="table-responsive">
        <table class="table table-striped table-sm table-hover table-bordered">
            <thead>
            <tr>
                <th>Nombre</th>
                <th>Segundo Nombre </th>
                <th>Apellido</th>
                <th>Segundo Apellido </th>
                <th>Cédula</th>
                <th>Estado civil</th>
                <th>Sexo</th>
                <th>Tipo de Sangre</th>
                <th>Usuario</th>
                <th>Provincia</th>
                <th>Distrito</th>
                <th>Corregimiento</th>
                <th>Dirección</th>
                <th>Teléfono</th>
                <th>Categoria</th>
                <th>Ubicación</th>
                <th>Departamento</th>
                <th>Cargo</th>
                <th>Gobierno_rep</th>

            </tr>
            </thead>
            <tbody>
            <?php
            foreach ($datos as $dato) { ?>
                <tr>
                    <td><?php echo $dato["nombre"] ?></td>
                    <td><?php echo $dato["Segundo_nombre"] ?></td>
                    <td><?php echo $dato["primer_apellido"] ?></td>
                    <td><?php echo $dato["Segundo_apellido"] ?></td>
                    <td><?php echo $dato["cedula"] ?></td>
                    <td><?php echo $dato["Estado_civil"] ?></td>
                    <td><?php echo $dato["genero"] ?></td>
                    <td><?php echo $dato["Tipo_sangre"] ?></td>
                    <td><?php echo $dato["Usuario_Id_usuario"] ?></td>
                    <td><?php echo $dato["provincia"] ?></td>
                    <td><?php echo $dato["Distrito"] ?></td>
                    <td><?php echo $dato["corregimiento"] ?></td>
                    <td><?php echo $dato["Direccion_especifica"] ?></td>
                    <td><?php echo $dato["Telefono"] ?></td>
                    <td><?php echo $dato["categoria_administrativo"] ?></td>
                    <td><?php echo $dato["ubicacion"] ?></td>
                    <td><?php echo $dato["departamento"] ?></td>
                    <td><?php echo $dato["cargo_adm"] ?></td>
                    <td><?php echo $dato["Gobierno_Repre"] ?></td>
                </tr>
            <?php }
            ?>
            </tbody>
        </table>
    </div>
    <h2 class="mt-2">Administrativos titulos</h2>
    <div class="table-responsive">
        <table class="table table-striped table-sm table-hover table-bordered">
            <thead>
            <tr>
                <th>Titulo obtenido</th>
                <th>Nivel </th>
                <th>Año</th>
                <th>Institución </th>
                <th>Titulo_adjunto</th>
                <th>Capacitaciones del Administrativo</th>
                <th>codigo academico</th>
                <th>Cedula Administrativo</th>
            </tr>
            </thead>
            <tbody>
            <?php
            foreach ($titulo as $dato) { ?>
                <tr>
                    <td><?php echo $dato["Titulo_obtenido"] ?></td>
                    <td><?php echo $dato["Nivel"] ?></td>
                    <td><?php echo $dato["Año"] ?></td>
                    <td><?php echo $dato["Institucion"] ?></td>
                    <td><?php echo $dato["Titulo_adjunto"] ?></td>
                    <td><?php echo $dato["Capacitaciones_administrativo"] ?></td>
                    <td><?php echo $dato["cod_academico"] ?></td>
                    <td><?php echo $dato["Administrativo_cedula"] ?></td>
                </tr>
            <?php }
            ?>
            </tbody>
        </table>
    </div>

    <h2 class="mt-2">Administrativo Capacitaciones</h2>
    <div class="table-responsive">
        <table class="table table-striped table-sm table-hover table-bordered">
            <thead>
            <tr>
                <th>Nombre capacitación</th>
                <th>Horas </th>
                <th>Año</th>
                <th>Codigo capacitación </th>
                <th>Cedula docente </th>

            </tr>
            </thead>
            <tbody>
            <?php
            foreach ( $capacitacion  as $dato) { ?>
                <tr>
                </tr>
                <tr>
                    <td><?php echo $dato["nombre_capacita"] ?></td>
                    <td><?php echo $dato["horas"] ?></td>
                    <td><?php echo $dato["Año"] ?></td>
                    <td><?php echo $dato["cod_capacitaciones"] ?></td>
                    <td><?php echo $dato["Administrativo_cedula"] ?></td>
                </tr>
            <?php }
            ?>
            </tbody>
        </table>
        <br>

    </div>

    <a href="?controller=Home&action=mensaje&log=1" class="btn btn-primary mt-5" role="button">Salir</a>

</main>
</div>
