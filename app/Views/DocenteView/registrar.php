
        <div class="container">
            <h2 class="mt-2">Registro Administrativo</h2>
        <main class="row mt-3 ">
            <div class="col">
                <form action="?controller=Docente&action=registrar" method="POST">
                    <div class="form-group row">
                        <div class="col-6">
                        <label for="nombre">Nombre</label>
                        <input type="text" name="nombre" id="nombre" class="form-control">
                        </div>
                        <div class="col-6">
                        <label for="apellido2">Segundo apellido</label>
                        <input type="text" name="apellido2" id="apellido2" class="form-control">
                        </div>

                    </div>
                    <div class="form-group row">
                        <div class="col">
                        <label for="apellido1">Apellido</label>
                        <input type="text" name="apellido1" id="apellido1" class="form-control">
                        </div>
                        <div class="col">
                        <label for="nombre2">Segundo nombre</label>
                        <input type="text" name="nombre2" id="nombre2" class="form-control">
                        </div>
                    </div>
                    <div class="form-group row">
                        <div class="col">
                        <label for="cedula">Cedula</label>
                        <input type="text" name="cedula" id="cedula" class="form-control">
                        </div>
                        <div class="col">
                        <label for="genero">Sexo</label>
                        <input type="text"  name="genero" id="genero" class="form-control">
                        </div>
                    </div>

                    <div class="form-group row">
                        <div class="col">
                        <label for="civil">Estado civil</label>
                        <input type="text"  name="civil" id="civil" class="form-control">
                        </div>
                        <div class="col">
                        <label for="sangre">Tipo de Sangre</label>
                        <input type="text"  name="sangre" id="sangre" class="form-control">
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
                        <label for="ubicesp">ubicacion especifica</label>
                        <input type="text" name="ubicesp" id="ubicesp" class="form-control">
                        </div>
                        <div class="col">
                        <label for="telefono">Telefono</label>
                        <input type="text" name="telefono" id="telefono" class="form-control">
                        </div>
                    </div>
                    <div class="form-group row">
                        <div class="col">
                        <label for="categoria">Categoria del docente</label>
                        <input type="text" name="categoria" id="categoria" class="form-control">
                        </div>
                        <div class="col">
                        <label for="ubi">ubicacion</label>
                        <input type="text" name="ubi" id="ubi" class="form-control">
                        </div>
                    </div>
                    <div class="form-group row">
                        <div class="col">
                        <label for="departamento">Departamento</label>
                        <input type="text" name="departamento" id="departamento" class="form-control">
                        </div>
                        <div class="col">
                        <label for="cargoadm">Cargo Administrativo</label>
                        <input type="text" name="cargoadm" id="cargoadm" class="form-control">
                        </div>
                    </div>

                        <label for="gobierno">gobiernos</label>
                        <input type="text" name="gobierno" id="gobierno" class="form-control">


                    <br>
                    <button type="submit" id="boton" class="btn btn-primary btn-lg"  data-toggle="modal" data-target="#exampleModal">Enviar</button>
                </form>
                <div class="modal fade" id="exampleModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">

                    <div class="modal-dialog" role="document">
                        <div class="modal-content">
                            <div class="modal-header">
                                <h5 class="modal-title" id="exampleModalLabel">Registro Docente</h5>
                                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                    <span aria-hidden="true">&times;</span>
                                </button>
                            </div>
                            <div class="modal-body">
                                <?php echo  $resultado; ?>
                            </div>
                            <div class="modal-footer">
                                <button type="button" class="btn btn-secondary" data-dismiss="modal">Cerrar</button>

                            </div>
                        </div>
                    </div>
                </div>



            </div>
        </div>
