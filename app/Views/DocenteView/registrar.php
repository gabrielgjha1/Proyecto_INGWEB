<?php
    session_start();


?>

<div class="container">



            <h2 class="mt-2">Registro Docente</h2>
        <main class="row mt-3 ">
            <div class="col">
                <form action="?controller=Docente&action=Registrar&log=2" method="POST">
                    <div class="form-group row">
                        <div class="col-6 md-12">
                        <label for="nombre">Nombre</label>
                        <input type="text" name="nombre" id="nombre" class="form-control" required>
                        </div>
                        <div class="col-6 md-12">
                            <label for="nombre2">Segundo nombre</label>
                            <input type="text" name="nombre2" id="nombre2" class="form-control" required>

                        </div>

                    </div>
                    <div class="form-group row">
                        <div class="col">
                            <label for="apellido1">Apellido</label>
                             <input type="text" name="apellido1" id="apellido1" class="form-control" required>
                        </div>
                        <div class="col">
                            <label for="apellido2">Segundo apellido</label>
                            <input type="text" name="apellido2" id="apellido2" class="form-control" required>

                        </div>
                    </div>
                    <div class="form-group row">
                        <div class="col">
                        <label for="cedula">Cédula</label>
                        <input type="text" name="cedula" id="cedula" class="form-control" required>
                        </div>
                        <div class="col">
                        <label for="genero">Sexo</label>
                        <select name="genero" id="genero" class="form-control" required>
                            <option value="M">M</option>
                            <option value="F">F</option>
                        </select>
                        </div>
                    </div>

                    <div class="form-group row">
                        <div class="col">
                        <label for="civil">Estado civil</label>
                        <select name="civil" id="civil" class="form-control" required>
                            <option value="Casado">Viudo</option>
                            <option value="Casado">Casado</option>
                            <option value="Soltero">Soltero</option>
                        </select>
                       
                        </div>
                        <div class="col">
                        <label for="sangre">Tipo de Sangre</label>
                        <select name="sangre" id="sangre" class="form-control" required>
                            <option value="O+">O+</option>
                            <option value="O-">O-</option>
                            <option value="A+">A+</option>
                            <option value="B-">B-</option>
                            <option value="B+">B+</option>
                            <option value="AB-">AB-</option>
                            <option value="AB+">AB+</option>
                        </select>
                        </div>
                    </div>
                    <div class="form-group row">
                        <div class="col">
                        <label for="Usuario">Usuario</label>
                        <input type="text" name="usuario" id="usuario" class="form-control" required>
                        </div>
                        <div class="col">
                        <label for="provincia">Provincia</label>
                            <select name="provincia" id="provincia" class="form-control" required>
                                <option value="Bocas del Toro">Bocas del Toro</option>
                                <option value="Coclé">Coclé</option>
                                <option value="Colón">Colón</option>
                                <option value="Chiriquí">Chiriquí</option>
                                <option value="Darién">Darién</option>
                                <option value="Herrera">Herrera</option>
                                <option value="Panamá">Panamá</option>
                                <option value=" Panamá Oeste"> Panamá Oeste</option>
                                <option value="Veraguas">Veraguas</option>
                            </select>
                        </div>
                    </div>
                    <div class="form-group row">
                        <div class="col">
                        <label for="distrito">Distrito</label>
                        <input type="text" name="distrito" id="distrito" class="form-control" required>
                        </div>
                        <div class="col">
                        <label for="corregimiento">Corregimiento</label>
                        <input type="text" name="corregimiento" id="corregimiento" class="form-control" required>
                        </div>
                    </div>
                    <div class="form-group row">
                        <div class="col">
                        <label for="ubicesp">Ubicación específica</label>
                        <input type="text" name="ubicesp" id="ubicesp" class="form-control" required>
                        </div>
                        <div class="col">
                        <label for="telefono">Teléfono</label>
                        <input type="tel" name="telefono" id="telefono" class="form-control" required>
                        </div>
                    </div>
                    <div class="form-group row">
                        <div class="col">
                        <label for="categoria">Categoria del docente</label>
                        <select name="categoria" id="categoria" class="form-control" required>
                            <option value="Apoyo">Tiempo completo</option>
                            <option value="Auxiliar">Tiempo parcial</option>

                        </select>
                        </div>
                        <div class="col">
                        <label for="ubi">Ubicación</label>
                            <select name="ubi" id="ubi" class="form-control" required>
                                <option value="Sede">Sede</option>
                                <option value="Azuero">Azuero</option>
                                <option value="Bocas del Toro">Bocas del Toro</option>
                                <option value="Chiriqí">Chiriqí</option>
                                <option value="Coclè">Coclè</option>
                                <option value="Panamá Oeste">Panamá Oeste</option>
                                <option value="Veraguas">Veraguas</option>
                            </select>

                        </div>
                    </div>
                    <div class="form-group row">
                        <div class="col">
                        <label for="departamento">Departamento</label>
                        <select name="departamento" id="departamento" class="form-control" required>
                            <option value="No definido">No definido</option>
                            <option value="Arquitectura y Redes de computadoras">Arquitectura y Redes de computadoras</option>
                            <option value="Computaciòn y simulaciòn de sistemas">Computación y simulación de sistemas</option>
                            <option value="Ingenierìa de software">Ingeniería de software</option>
                            <option value="Programaciòn de computadoras">Programación de computadoras</option>
                            <option value="Sistema de informaciòn">Sistema de información</option>
                        </select>
                        </div>
                        <div class="col">
                        <label for="cargoadm">Cargo administrativo</label>
                            <select name="cargoadm" id="cargoadm" class="form-control" required>
                                <option value="Sin Cargo">Sin Cargo</option>
                                <option value="Decano">Decano</option>
                                <option value="Vicedecano">Vicedecano</option>
                                <option value="Jefe de departamento">Jefe de departamento</option>
                                <option value="Coordinador de carrera">Coordinador de carrera</option>
                                <option value="Coordinador de FISC en centro regional">Coordinador de FISC en centro regional</option>
                                <option value="Coordinador de Extension">Coordinador de Extension</option>
                                <option value="Coordinador de postgrado">Coordinador de postgrado</option>
                                <option value="Coordinador de investigacion">Coordinador de investigacion</option>
                                <option value="Director de Centro Regional">Director de Centro Regional</option>
                                <option value="Subdirector Academico de Centro Regional">Subdirector Academico de Centro Regional</option>
                                <option value="Subdirector Administrativo de Centro Regional">Subdirector Administrativo de Centro Regional</option>
                                <option value="Subdirector investigacion, postgrado y extension de Centro Regional">Subdirector investigacion, postgrado y extension de Centro Regional</option>
                                <option value="Coordinador de extension en centro regional">Coordinador de extension en centro regional</option>
                                <option value="Coordinador de postgrado en centro regional">Coordinador de postgrado en centro regional</option>
                                <option value="Coordinador de investigacion en centro regional">Coordinador de investigacion en centro regional</option>
                                </select>
                        </div>
                    </div>
                   
                        <label for="Gobierno">Gobierno rep</label>
                        <select name="gobierno" id="gobierno" class="form-control" required>
                            <option value="Consejo General">Consejo General</option>
                            <option value="Consejo Acadèmico">Consejo Académico</option>
                            <option value="Consejo Investigaciòn">Consejo Investigación</option>
                            <option value="Consejo Administrativo">Consejo Administrativo</option>
                        </select>
    
                    <br>
                    <div id="botones">
                    <input type="submit" id="boton" value="Enviar" class="btn btn-primary btn-lg" onclick="confirm('Seguro que desea continuar')">





                    </div>
                </form>
               <?php
                if ($resultado==2){

                    echo '<script language="javascript">alert("error");</script>';
                }

               ?>
            </div>
        </div>
