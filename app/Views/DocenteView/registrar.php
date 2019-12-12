        <div class="container">
            <h2 class="mt-2">Registro Docente</h2>
        <main class="row mt-3 ">
            <div class="col">
                <form action="?controller=Docente&action=Registrar_titulos" method="POST">
                    <div class="form-group row">
                        <div class="col-6 md-12">
                        <label for="nombre">Nombre</label>
                        <input type="text" name="nombre" id="nombre" class="form-control">
                        </div>
                        <div class="col-6 md-12">
                            <label for="nombre2">Segundo nombre</label>
                            <input type="text" name="nombre2" id="nombre2" class="form-control">

                        </div>

                    </div>
                    <div class="form-group row">
                        <div class="col">
                            <label for="apellido1">Apellido</label>
                             <input type="text" name="apellido1" id="apellido1" class="form-control">
                        </div>
                        <div class="col">
                            <label for="apellido2">Segundo apellido</label>
                            <input type="text" name="apellido2" id="apellido2" class="form-control">

                        </div>
                    </div>
                    <div class="form-group row">
                        <div class="col">
                        <label for="cedula">Cédula</label>
                        <input type="text" name="cedula" id="cedula" class="form-control">
                        </div>
                        <div class="col">
                        <label for="genero">Sexo</label>
                        <select name="genero" id="genero" class="form-control">
                            <option value="M">M</option>
                            <option value="F">F</option>
                        </select>
                        </div>
                    </div>

                    <div class="form-group row">
                        <div class="col">
                        <label for="civil">Estado civil</label>
                        <select name="civil" id="civil" class="form-control">
                            <option value="Casado">Viudo</option>
                            <option value="Casado">Casado</option>
                            <option value="Soltero">Soltero</option>
                        </select>
                       
                        </div>
                        <div class="col">
                        <label for="sangre">Tipo de Sangre</label>
                        <select name="sangre" id="sangre" class="form-control">
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
                        <input type="text" name="usuario" id="usuario" class="form-control">
                        </div>
                        <div class="col">
                        <label for="provincia">Provincia</label>   
                        
                        <input type="number" name="provincia" id="provincia" class="form-control">
                        </div>
                    </div>
                    <div class="form-group row">
                        <div class="col">
                        <label for="distrito">Distrito</label>
                        <input type="text" name="distrito" id="distrito" class="form-control">
                        </div>
                        <div class="col">
                        <label for="corregimiento">Corregimiento</label>
                        <input type="text" name="corregimiento" id="corregimiento" class="form-control">
                        </div>
                    </div>
                    <div class="form-group row">
                        <div class="col">
                        <label for="ubicesp">Ubicación específica</label>
                        <input type="text" name="ubicesp" id="ubicesp" class="form-control">
                        </div>
                        <div class="col">
                        <label for="telefono">Teléfono</label>
                        <input type="text" name="telefono" id="telefono" class="form-control">
                        </div>
                    </div>
                    <div class="form-group row">
                        <div class="col">
                        <label for="categoria">Categoria del docente</label>
                        <select name="categoria" id="categoria" class="form-control">
                            <option value="Apoyo">Tiempo completo</option>
                            <option value="Auxiliar">Tiempo parcial</option>

                        </select>
                        </div>
                        <div class="col">
                        <label for="ubi">Ubicación</label>
                            <select name="ubi" id="ubi" class="form-control">
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
                        <select name="departamento" id="departamento" class="form-control">
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
                        <input type="text" name="cargoadm" id="cargoadm" class="form-control">
                        </div>
                    </div>
                   
                        <label for="Gobierno">Gobierno rep</label>
                        <select name="gobierno" id="gobierno" class="form-control">
                            <option value="Consejo General">Consejo General</option>
                            <option value="Consejo Acadèmico">Consejo Académico</option>
                            <option value="Consejo Investigaciòn">Consejo Investigación</option>
                            <option value="Consejo Administrativo">Consejo Administrativo</option>
                        </select>
    
                    <br>
                    <input type="submit" id="boton" value="Enviar" class="btn btn-primary btn-lg" onclick="confirm('<? echo $resultado  ?>')">

                </form>
            </div>
        </div>
