
    <div class="container">
        <h2 class="mt-2">Crear usuario de administrativo</h2>
        <main>
        <form action="?controller=Administrativo&action=crear_u" method="post">
                <div class="form-group row">
                    <div class="col-6">
                        <label for="usuario">Ingrese usuario</label>
                        <input type="text" name="usuario" id="usuario" class="form-control">
                    </div>
                </div>

                <div class="form-group row">
                    <div class="col-6">
                        <label for="Contrasena">Ingrese contraseña</label>
                        <input type="text" name="contrasena" id="contrasena" class="form-control">
                    </div>
                </div>
                <div class="form-group row">
                    <div class="col-6">
                        <label for="Contrasena">Repita contraseña</label>
                        <input type="text" name="contrasena" id="contrasena" class="form-control">
                    </div>
                </div>
                <div class="form-group row">
                    <div class="col-6">
                        <label for="correo">Ingrese correo</label>
                        <input type="text" name="correo" id="correo" class="form-control">
                    </div>
                </div>
                <input type="submit"  value="Enviar" class="btn btn-secondary">
                <?php echo $resultado ?>
                </form>
    </div>


    </main>


    </div>




