<?php require_once('./includes/header.php'); ?>


<div class="container top-buffer bottom-buffer">
    <div class="row mb-5">
        <div class="col-md-8 main">
            <h1>Bienvenidos a Profepedia</h1>
            <p>Somos una platafaforma que permite conocer lo que los alumnos opinan sobre sus profesores.</p>

            <div class="table-container mb-5">
                <table id="example" class="table table-striped table-bordered dt-responsive nowrap" style="width:100%">
                    <thead>
                        <tr>
                            <th style="width: 90%;">Nombre</th>
                            <th>Calificacion</th>
                        </tr>
                    </thead>
                    <tbody>
                        <?php foreach ($maestros as $maestro) : ?>
                            <tr>
                                <td><a href="controllers/panel_profesor_controller.php?id=<?= $maestro->id ?>"><?= $maestro->nombre ?></a></td>
                                <?php
                                $reviewModel = new ReviewModel();
                                $calConocimientos = $reviewModel->getConocimientos($maestro->id);
                                $calAsistencia = $reviewModel->getAsistencia($maestro->id);
                                $calGeneral = ($calAsistencia + $calConocimientos)/2;
                                ?>
                                <td><?=$calGeneral?></td>
                            </tr>
                        <?php endforeach; ?>

                </table>
                <a class="btn btn-agregar my-3 <?=(!isset($_SESSION['user'])) ? 'disabled' : '' ?>" href="controllers/agregar_profesor_controller.php">Agregar profesor</a>
            </div>

        </div>
        <div class="col-md-4">
            <?php if($_SESSION['user']): ?>
                <div class="card">
                    <div class="card-block">
                        <div class="card-title p-3">
                            <h4 class="text-center"><?=$_SESSION['user']->nombre?></h4>
                            <a class="btn btn-agregar mt-3" href="controllers/mis_reviews_controller.php">Mis Reviews</a>
                        </div>
                        <div class="card-text px-3">
                            
                        </div>
                    </div>
                </div>
            <?php else: ?>
                <form class="form login-container" action="#" method="POST">
                    <div class="card">
                        <div class="card-block">
                            <div class="card-title p-3">
                                <h4 class="text-center">Crea tu cuenta en Profepedia.</h4>
                            </div>
                            <div class="card-text px-3">
                                <div class="form-group">
                                    <input type="text" class="form-control" name="first_name" value="" placeholder="Nombre" id="first_name">
                                </div>
                                <div class="form-group">
                                    <input type="text" class="form-control" name="email" value="" placeholder="Correo" id="email">
                                </div>
                                <div class="form-group">
                                    <input type="password" class="form-control" name="password" placeholder="Contraseña" value="" id="password">
                                </div>
                                <div class="form-group">
                                    <input type="password" class="form-control" name="password_confirm" placeholder="Repetir contraseña" value="" id="password_confirm">
                                </div>
                                <div class="row">
                                    <div class="col-md-12"> <input type="submit" class="btn btn-primary btn-md btn-block waves-effect text-center m-b-20" name="submit" value="Sign Up">
                                    </div>
                                </div>
                                <?php if ((isset($_POST['first_name']))) {
                                    if($usuarioM->addUser($_POST['first_name'], $_POST['email'], $_POST['password'], $_POST['password_confirm'])){
                                        echo "<div>Usuario creado con exito</div>";
                                    }else{
                                        echo "<div>Error al crear usuario</div>";
                                    }
                                } ?>
                                <div class="or-container">
                                    <div class="line-separator"></div>
                                    <div class="or-label">or</div>
                                    <div class="line-separator"></div>
                                </div>
                                <div class="row">
                                    <div class="col-md-12">
                                        <a class="btn btn-lg btn-google btn-block btn-outline" href="#">
                                            <img src="https://img.icons8.com/color/16/000000/google-logo.png">
                                            Sign Up with Google
                                        </a>
                                    </div>
                                </div> <br>
                                <p class="text-inverse text-center">¿Ya tienes cuenta? <a href="" data-toggle="modal" data-target="#exampleModal" data-abc="true">Sign In</a></p>
                            </div>
                        </div>
                    </div>
                </form>
            <?php endif; ?>
            
        </div>
    </div>
</div>
<script>
    $(document).ready(function() {
        $('#example').DataTable();
    });
</script>
<?php require_once('includes/footer.php'); ?>