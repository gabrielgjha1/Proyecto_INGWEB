
        <div class="container">
            <h2 class="mt-2">Modificar datos</h2>
        <main class="row mt-3 ">
            <div class="col">
                <form action="?controller=Home&action=mensaje" method="POST">
                    <div class="form-group row">
                        <div class="col-6">
                        <label for="nombre">Nombre</label>
                        <input type="text" value="<?php echo $resultados['nombre'] ?>" name="nombre" id="nombre" class="form-control">
                        </div>
                        <div class="col-6">
                            <label for="nombre2">Segundo nombre</label>
                            <input type="text" name="nombre2" value="<?php echo $resultados['Segundo_nombre'] ?>" id="nombre2" class="form-control">

                        </div>

                    </div>
                    <div class="form-group row">
                        <div class="col">
                        <label for="apellido1">Apellido</label>
                        <input type="text" name="apellido1" value="<?php echo $resultados['primer_apellido'] ?>" id="apellido1" class="form-control">
                        </div>
                        <div class="col">
                            <label for="apellido2">Segundo apellido</label>
                            <input type="text" name="apellido2" value="<?php echo $resultados['Segundo_apellido'] ?>"  id="apellido2" class="form-control">
                        </div>
                    </div>
                    <div class="form-group row">
                        <div class="col-12">
                        <label for="cedula">Cédula</label>
                        <input type="text" name="cedula" value="<?php echo $resultados['cedula'] ?>" id="cedula" class="form-control">
                        </div>
                    </div>


                    <br>
                    <button type="submit" id="boton" onclick="confirm('<? echo $resultados2 ?>')" class="btn btn-primary btn-lg"  >Enviar</button>
                </form>
                </div>
            </div>
        </div>

