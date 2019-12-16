
    <div class="container">
        <h2 class="mt-2">Crear usuario de administrativo</h2>
        <main>
        <form action="?controller=Administrativo&action=crear_u&log=1" method="post">
                <div class="form-group row">
                    <div class="col-6">
                        <label for="usuario">Ingrese usuario</label>
                        <input type="text" name="usuario" id="usuario" class="form-control">
                    </div>
                </div>

                <div class="form-group row">
                    <div class="col-6">
                        <label for="Contrasena">Ingrese contraseña</label>
                        <input type="password" name="contrasena" id="contrasena" class="form-control">
                    </div>
                </div>
                <div class="form-group row">
                    <div class="col-6">
                        <label for="Contrasena">Repita contraseña</label>
                        <input type="password" name="contrasena" id="contrasena" class="form-control">
                    </div>
                </div>
            <div class="form-group row">
                <div class="col-6">
                    <label for="rol">Ingrese rol</label>
                    <input type="number" value="1=Administrativo,2=Docente" name="rol" id="rol" class="form-control">
                </div>
            </div>
                <div class="form-group row">
                    <div class="col-6">
                        <label for="correo">Ingrese correo (aqui le llegara el usuario y la contraseña al administrativo)</label>
                        <input type="text" name="correo" id="correo" class="form-control">
                    </div>
                </div>
                <input type="submit"  value="Enviar" onclick="confirm('<? echo $resultado ?>')" class="btn btn-secondary">

                </form>

    </div>


    </main>


    </div>




