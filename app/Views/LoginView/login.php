<!doctype html>
<html lang="en">

<head>
    <title>Title</title>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <link rel="stylesheet" href="css/index.css">
    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
</head>

<body>
    <main class="modal-dialog text-center">
        <div class="col-sm-8 main-section">
            <div class=" modal-content ">
                <div class="col-12 img">
                    <img src="img/index.png" alt="">
                </div>
                <form class="col-12" method="POST" action="">
                    <div class="form-group">
                        <label for="usuario">Ingrese Usuario</label>
                        <input type="text" name="usuario" id="usuario" required placeholder="Usuario" class="form-control">
                    </div>
                    <div class="form-group">
                        <label for="contra">Ingrese Contraseña</label>
                        <input type="password" name="contra" id="contra"  required placeholder="Contraseña" class="form-control">
                    </div>
                    <input type="submit" value="Enviar" onclick="confirm('<? echo $resultado  ?>')" class="btn btn-primary">
                    <div class="forgot"> <br>
                        <a href="">Olvide la contraseña</a>
                    </div>

                </form>
            </div>
        </div>
    </main>





    <!-- Optional JavaScript -->
    <!-- jQuery first, then Popper.js, then Bootstrap JS -->
    <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js" integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1" crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js" integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous"></script>
</body>

</html>