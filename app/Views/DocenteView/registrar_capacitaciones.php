<?php
session_start();

?>

<div class="container">
    <h2 class="mt-2">Registro Docente Capacitaciones</h2>
    <main class="row mt-3 ">
        <div class="col">
            <form action="?controller=Docente&action=Registrar_capacitaciones&log=2" method="POST">
                <div class="form-group row">
                    <div class="col-6 md-12">
                        <label for="nombrecap">Nombre de la capacitacion</label>
                        <input type="text" name="nombrecap" id="nombrecap" class="form-control" required>
                    </div>
                    <div class="col-6 md-12">
                        <label for="horas">Cantidad de horas</label>
                        <input type="text" name="horas" id="horas" class="form-control" required>

                    </div>

                </div>
                <div class="form-group row">
                    <div class="col">
                        <label for="año">Año de la capacitación</label>
                        <input type="text" name="año" id="año" class="form-control" required>
                    </div>

                </div>

                <br>
                <div id="botones">

                    <input type="submit" id="boton" value="Enviar" onclick="confirm('<? echo "Seguro que desea enviar este titulo ? "  ?>')" class="btn btn-primary btn-lg" >
                    <a class="btn btn-primary btn-lg" href="?controller=Docente&action=add3&log=2">Siguiente</a>
                    <a class="btn btn-primary btn-lg" href="?controller=Docente&action=Registrar_titulos&log=2">Atras</a>
                </div>
            </form>

            <?php
            if ($resultado2==1){
                echo '<script language="javascript">alert("Titulo registrado, rellene los campos si desea ingresar otro titulo y pulse enviar. si desea avanzar pulse siguiente");</script>';

            }
            elseif ($resultado2==2) {
                echo '<script language="javascript">alert("Error en el registro");</script>';
            }

            ?>
        </div>
</div>
