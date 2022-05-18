<?php
// $count = 3;
$count = 3;
if (!isset($_SESSION)) {
    session_start();
}
?>
<!doctype html>
<html lang="en">

<head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <script src="https://code.jquery.com/jquery-3.2.1.slim.min.js" integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN" crossorigin="anonymous">
    </script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js" integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q" crossorigin="anonymous">
    </script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js" integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl" crossorigin="anonymous">
    </script>

    <script src="https://code.jquery.com/jquery-3.5.1.js"></script>
    <script src="https://cdn.datatables.net/1.11.3/js/jquery.dataTables.min.js"></script>
    <script src="https://cdn.datatables.net/1.11.3/js/dataTables.bootstrap4.min.js"></script>
    <script src="https://cdn.datatables.net/responsive/2.2.9/js/dataTables.responsive.min.js"></script>
    <script src="https://cdn.datatables.net/responsive/2.2.9/js/responsive.bootstrap4.min.js"></script>

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">

    <link rel="stylesheet" href="<?= count(explode('/', $_SERVER['REQUEST_URI'])) > $count ? '../resources/css/styles.css' : './resources/css/styles.css'; ?>">
    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.8.1/css/all.css" integrity="sha384-50oBUHEmvpQ+1lW4y57PTFmhCaXp0ML5d60M1M7uH2+nqUivzIebhndOJK28anvf" crossorigin="anonymous">
    <link rel="stylesheet" href="https://cdn.datatables.net/1.11.3/css/dataTables.bootstrap4.min.css">
    <link rel="stylesheet" href="https://cdn.datatables.net/responsive/2.2.9/css/responsive.bootstrap4.min.css">
    <!-- FontAwesome icons -->
    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.8.1/css/all.css" integrity="sha384-50oBUHEmvpQ+1lW4y57PTFmhCaXp0ML5d60M1M7uH2+nqUivzIebhndOJK28anvf" crossorigin="anonymous">

    <title>Profepedia</title>
</head>

<body>
    <?php
    count(explode('/', $_SERVER['REQUEST_URI'])) > $count ? require_once '../models/usuarioModel.php' : require_once './models/usuarioModel.php';
    $usuarioMod = new UsuariosModel();
    $error = "";
    if ((isset($_POST['email-login']))) {
        $usuario =  $usuarioMod->getBy("correo", $_POST['email-login']);
        if ($usuario == NULL) {
            $error = "Usuario no encontrado";
        } else {
            $hashed_psw = $usuario[0]->contrasenia;
            $verify = password_verify($_POST['password-login'], $hashed_psw);
            if ($verify == false) {
                $error = "Fallo al autenticar usuario";
            } else {
                if (!isset($_SESSION)) {
                    session_start();
                }
                $_SESSION["user"] = $usuario[0];
            }
        }
    }

    ?>
    <nav class="navbar fixed-top navbar-expand-lg navbar-dark bg-dark">
        <a class="navbar-brand mb-0 h1" href="<?= count(explode('/', $_SERVER['REQUEST_URI'])) > $count ? '../index.php' : './index.php'; ?>">Profepedia</a>
        <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
        </button>

        <div class="collapse navbar-collapse" id="navbarSupportedContent">
            <form class="form-inline my-2 my-lg-0 mx-auto" style="width: 80%;" action="<?= count(explode('/', $_SERVER['REQUEST_URI'])) > $count ? '../controllers/busqueda_controller.php' : './controllers/busqueda_controller.php'; ?>" method="GET">
                <input class="form-control" style="width: 90%;" type="search" name="pattern" placeholder="Ingresa nombre del profesor o clave de la materia" aria-label="Search">
                <button class="btn btn-outline-primary my-2 my-sm-0 mx-auto" type="submit">Buscar</button>
            </form>
            <ul class="navbar-nav ml-auto">
                <li class="nav-item active">
                    <?php if (isset($_SESSION['user'])) : ?>
                        <a class="nav-link" href="<?= count(explode('/', $_SERVER['REQUEST_URI'])) > $count ? '../validations/cerrar_sesion.php' : './validations/cerrar_sesion.php'; ?>">Cerrar
                            sesión <span class="sr-only">(current)</span></a>
                    <?php else : ?>
                        <a class="nav-link" href="" data-toggle="modal" data-target="#exampleModal"><span class="text-danger"><?= $error ?></span>  Iniciar sesión <span class="sr-only">(current)</span></a>
                    <?php endif; ?>
                </li>
            </ul>
        </div>
    </nav>

    <!-- Modal -->
    <div class="modal fade" id="exampleModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
        <div class="modal-dialog" role="document">
            <div class="modal-content">
                <div class="modal-header">
                    <h4 class="modal-title text-center" id="exampleModalLabel">Inicia sesión en Profepedia.</h4>
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                        <span aria-hidden="true">&times;</span>
                    </button>
                </div>
                <div class="modal-body">
                    <form class="form-signin" action="#" method="POST">
                        <div class="card">
                            <div class="card-block">
                                <div class="card-text px-3 pt-3">
                                    <div class="form-group">
                                        <input type="email" class="form-control" name="email-login" value="" placeholder="Correo" required id="email">
                                    </div>
                                    <div class="form-group">
                                        <input type="password" class="form-control" name="password-login" placeholder="Contraseña" required value="" id="password">
                                    </div>
                                    <div class="row">
                                        <div class="col-md-12"> <input type="submit" class="btn btn-primary btn-md btn-block waves-effect text-center m-b-20" name="submit" value="Iniciar sesión">
                                        </div>
                                    </div>

                                    <div class="or-container">
                                        <div class="line-separator"></div>
                                        <div class="or-label">o</div>
                                        <div class="line-separator"></div>
                                    </div>
                                    <div class="row">
                                        <div class="col-md-12">
                                            <a class="btn btn-lg btn-google btn-block btn-outline" href="#">
                                                <img src="https://img.icons8.com/color/16/000000/google-logo.png">
                                                Iniciar sesión con Google
                                            </a>
                                        </div>
                                    </div> <br>
                                </div>
                            </div>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>