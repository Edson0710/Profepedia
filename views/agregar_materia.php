<?php require_once('../includes/header.php'); ?>

<div class="container top-buffer bottom-buffer">
    <div class="row justify-content-center">
        <div class="col-md-6">
            <form class="form" action="../validations/validation_agregar_materia.php" method="POST">
                <div class="card">
                    <div class="card-block">
                        <div class="card-title p-3">
                            <h4 class="text-center">Agregar una materia al profesor</h4>
                        </div>
                        <input type="text" style="text-align: center;" class="form-control-plaintext" name="idMaestro" value="<?= $id ?>" id="name" hidden readonly>
                        <div class="card-text px-3">
                            <div class="form-group">
                                <label for="clave">Clave de la materia</label>
                                <select name="clave" class="custom-select" required>
                                    <?php foreach ($claves as $materia) : ?>
                                        <option value="<?= $materia->clave ?>"><?= $materia->clave ?> - <?= $materia->materia ?></option>
                                    <?php endforeach; ?>
                                </select>
                            </div>
                            <!-- <div class="form-group">
                                <label for="name">Nueva clave</label>
                                <input type="text" maxlength="5" class="form-control" name="clave" placeholder="I5900" required id="name" autofocus oninput="this.value = this.value.toUpperCase()">
                            </div>
                            <div class="form-group">
                                <label for="name">Nombre de materia</label>
                                <input type="text" class="form-control" name="nombre" required id="name" placeholder="INGENIERIA DE SOFTWARE II" oninput="this.value = this.value.toUpperCase()">
                            </div> -->
                            <div class="row">
                                <div class="col-md-12"><input type="submit" class="btn btn-primary btn-md btn-block waves-effect text-center m-b-20" name="submit" value="Guardar materia"></div>
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