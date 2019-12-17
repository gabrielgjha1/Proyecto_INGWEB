<?php
session_start();
if ($resultado==1){
    echo '<script language="javascript">alert("Datos guardados");</script>';
    $resultado=0;
}

?>


<div class="container">
    <h2 class="mt-2">Registro Docente Titulos</h2>
    <main class="row mt-3 ">
        <div class="col">
            <form action="?controller=Docente&action=Registrar_titulos&log=2" method="POST">
                <div class="form-group row">
                    <div class="col-6 md-12">
                        <label for="titulo_ob">Titulo obtenido</label>
                        <input type="text" name="titulo_ob" id="Titulo_ob" class="form-control" required>
                    </div>
                    <div class="col-6 md-12">
                        <label for="año">Año</label>
                        <input type="text" name="año" id="año" class="form-control" required>

                    </div>

                </div>
                <div class="form-group row">
                    <div class="col">
                        <label for="institucion">institución</label>
                        <input type="text" name="institucion" id="institucion" class="form-control" required>
                    </div>
                    <div class="col">
                        <label for="tituload">Título adjunto</label>
                        <input type="text" name="tituload" id="tituload" class="form-control" required>

                    </div>
                </div>

                        <label for="nivel">Nivel</label>
                        <select name="nivel" id="nivel" class="form-control" required>
                            <option value="Diplomado">Diplomado</option>
                            <option value="Técnico">Técnico</option>
                            <option value="Licenciatura">Licenciatura</option>
                            <option value="Postgrado">Postgrado</option>
                            <option value="Maestría">Maestría</option>
                        </select>

                <br>
                <div id="botones">

                <input type="submit" id="boton" value="Enviar" onclick="confirm('<? echo "Seguro que desea enviar este titulo ? "  ?>')" class="btn btn-primary btn-lg" >
                    <a class="btn btn-primary btn-lg" href="?controller=Docente&action=add2&log=2">Siguiente</a>
                </div>
            </form>

            <?php
            if ($resultado1==1){
                echo '<script language="javascript">alert("Titulo registrado, rellene los campos si desea ingresar otro titulo y pulse enviar. si desea avanzar pulse siguiente");</script>';
                $resultado1=0;
            }
            elseif ($resultado1==2) {
                echo '<script language="javascript">alert("Error en el registro");</script>';
            }

            ?>
        </div>
</div>

