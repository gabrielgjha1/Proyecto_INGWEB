
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
                    <label for="rol">Ingrese rol (1=Administrativo,2=Docente)</label>
                    <input type="number"  name="rol" id="rol" class="form-control">
                </div>
            </div>
                <div class="form-group row">
                    <div class="col-6">
                        <label for="correo">Ingrese correo (aqui le llegara el usuario y la contraseña al administrativo)</label>
                        <input type="text" name="correo" id="correo" class="form-control">
                    </div>
                </div>

                <input type="submit"  value="Enviar" onclick="confirm('<? echo $resultado ?>')" class="btn btn-secondary">
                <a class="btn btn-secondary" href="?controller=Home&action=mensaje&log=1"  > Salir</a>

                </form>

    </div>


    </main>


    </div>




