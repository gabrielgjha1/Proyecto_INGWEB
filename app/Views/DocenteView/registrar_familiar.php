<?php
session_start();

?>


<div class="container">
    <h2 class="mt-2">Registro Docente Familiar</h2>
    <main class="row mt-3 ">
        <div class="col">
            <form action="?controller=Docente&action=Registrar_familiar&log=2" method="POST">
                <div class="form-group row">
                    <div class="col-6 md-12">
                        <label for="Parentezco">Parentezco</label>
                        <input type="text" name="Parentezco" id="Parentezco" class="form-control" required>
                    </div>
                    <div class="col-6 md-12">
                        <label for="Nombre">Nombre completo</label>
                        <input type="text" name="Nombre" id="Nombre" class="form-control" required>

                    </div>

                </div>
                <div class="form-group row">
                    <div class="col">
                        <label for="Locali">Localización</label>
                        <input type="text" name="Locali" id="Locali" class="form-control" required>
                    </div>
                    <div class="col">
                        <label for="prioridad">Prioridad</label>
                        <input type="text" name="prioridad" id="prioridad" class="form-control" required>

                    </div>

                </div>

                <div class="form-group row">
                    <div class="col">
                        <label for="telefono_of">Telefono_oficina</label>
                        <input type="text" name="telefono_of" id="telefono_of" class="form-control" required>
                    </div>
                    <div class="col">
                        <label for="telefono_res">Telefono Residencial</label>
                        <input type="text" name="telefono_res" id="telefono_res" class="form-control" required>

                    </div>

                </div>
                <div class="form-group row">
                    <div class="col">
                        <label for="celular">Celular</label>
                        <input type="text" name="celular" id="celular" class="form-control" required>
                    </div>
                    <div class="col">
                        <label for="correo">Correo</label>
                        <input type="text" name="correo" id="correo" class="form-control" required>
                    </div>

                </div>

                <br>
                <div id="botones">

                    <input type="submit" id="boton" value="Enviar" onclick="confirm('<? echo "Seguro que desea enviar este titulo ? "  ?>')" class="btn btn-primary btn-lg" >
                    <a class="btn btn-primary btn-lg" href="?controller=Home&action=mensaje&log=2">Siguiente</a>
                </div>
            </form>

            <?php
            if ($resultado3==1){
                echo '<script language="javascript">alert("Familiar registrado, rellene los campos si desea ingresar otro familiar y pulse enviar. si desea avanzar pulse siguiente");</script>';

            }
            elseif ($resultado3==2) {
                echo '<script language="javascript">alert("Error en el registro");</script>';
            }

            ?>
        </div>
</div>