<?php require_once('./includes/header.php');?>


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
                        <tr>
                            <td><a href="controllers/panel_profesor_controller.php">CAMARENA ROBLES, CARLOS</a></td>
                            <td>61</td>
                        </tr>
                        <tr>
                            <td>DAVALOS BOITES, MICHEL</td>
                            <td>63</td>
                        </tr>
                        <tr>
                            <td>ROMERO GASTELU, MARIA ELENA</td>
                            <td>66</td>
                        </tr>
                        <tr>
                            <td>MORALES RAMIREZ, THELMA ISABEL</td>
                            <td>22</td>
                        </tr>
                        <tr>
                            <td>SANCHEZ SALAZAR, LUIS IGNACIO</td>
                            <td>33</td>
                        </tr>
                        <tr>
                            <td>ORTEGA SANCHEZ, NOE</td>
                            <td>61</td>
                        </tr>
                        <tr>
                            <td>LUQUE CHANG, ALBERTO</td>
                            <td>59</td>
                        </tr>

                </table>
            </div>

        </div>
        <div class="col-md-4">
            <form class="form login-container" action="#" method="POST">
                <div class="card">
                    <div class="card-block">
                        <div class="card-title p-3">
                            <h4 class="text-center">Crea tu cuenta en Profepedia.</h4>
                        </div>
                        <div class="card-text px-3">
                            <div class="form-group">
                                <input type="text" class="form-control" name="first_name" value="" placeholder="Nombre"
                                    id="first_name">
                            </div>
                            <div class="form-group">
                                <input type="text" class="form-control" name="email" value="" placeholder="Correo"
                                    id="email">
                            </div>
                            <div class="form-group">
                                <input type="password" class="form-control" name="password" placeholder="Contraseña"
                                    value="" id="password">
                            </div>
                            <div class="form-group">
                                <input type="password" class="form-control" name="password_confirm"
                                    placeholder="Repetir contraseña" value="" id="password_confirm">
                            </div>
                            <div class="row">
                                <div class="col-md-12"> <input type="submit"
                                        class="btn btn-primary btn-md btn-block waves-effect text-center m-b-20"
                                        name="submit" value="Sign Up">
                                </div>
                            </div>
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
                            <p class="text-inverse text-center">¿Ya tienes cuenta? <a href="" data-toggle="modal"
                                    data-target="#exampleModal" data-abc="true">Sign In</a></p>
                        </div>
                    </div>
                </div>
            </form>
        </div>
    </div>
</div>
<script>
    $(document).ready(function () {
        $('#example').DataTable();
    });
</script>
<?php require_once('includes/footer.php');?>