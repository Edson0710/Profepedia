<?php require_once('../includes/header.php'); ?>

<div class="container top-buffer bottom-buffer">
    <div class="row justify-content-center">
        <div class="col-md-6">
            <form class="form" action="../validations/validation_agregar_profesor.php" method="POST">
                <div class="card">
                    <div class="card-block">
                        <div class="card-title p-3">
                            <h4 class="text-center">Agregar un nuevo profesor</h4>
                        </div>
                        <div class="card-text px-3">
                            <?php if (isset($_SESSION['error'])) : ?>
                                <div class="alert alert-danger" role="alert"><?= $_SESSION['error'] ?></div>
                            <?php unset($_SESSION['error']); endif ?>
                        </div>
                        <div class="card-text px-3">
                            <div class="form-group">
                                <label for="name">Nombre</label>
                                <input type="text" class="form-control" name="nombre" placeholder="Nombre del profesor" required id="name" autofocus oninput="this.value = this.value.toUpperCase()">
                            </div>
                            <div class="form-group">
                                <label for="clave">Clave de la materia</label>
                                <select name="clave" class="custom-select" required>
                                    <?php foreach ($materias as $materia) : ?>
                                        <option value="<?= $materia->clave ?>"><?= $materia->clave ?> - <?= $materia->materia ?></option>
                                    <?php endforeach; ?>
                                </select>
                            </div>
                            <div class="form-group">
                                <label for="centro">Centro Universitario</label>
                                <select class="custom-select" name="centro" required>
                                    <!-- <option value="1">CUCEI</option> -->
                                    <?php foreach ($planteles as $plantel) : ?>
                                        <option value="<?= $plantel->id ?>"><?= $plantel->plantel ?></option>
                                    <?php endforeach; ?>
                                </select>
                            </div>
                            <div class="row">
                                <div class="col-md-12"> <input type="submit" class="btn btn-primary btn-md btn-block waves-effect text-center m-b-20" name="submit" value="Guardar profesor">
                                </div>
                            </div> <br>
                        </div>
                    </div>
                </div>
            </form>
        </div>
    </div>
</div>
<?php
//  base_url() 
?>
<?php require_once('../includes/footer.php'); ?>