<?php require_once('../includes/header.php'); ?>

<div class="container top-buffer bottom-buffer">
    <div class="row justify-content-center">
        <div class="col-md-6">
            <form class="form" action="../validations/validation_calificar_profesor.php" method="POST">
                <div class="card">
                    <div class="card-block">
                        <?php if (isset($_SESSION['error'])) : ?>
                            <div class="alert alert-danger" role="alert"><?= $_SERVER['error'] ?></div>
                        <?php unset($_SESSION['error']); endif ?>
                        <div class="card-title pt-3">
                            <h4 class="text-center">Calificar profesor</h4>
                        </div>
                        <div class="card-text px-4">
                            <div class="form-group">
                                <input type="text" style="text-align: center;" class="form-control-plaintext" name="idUsuario" value="<?= $_SESSION['user']->id ?>" id="idUsuario" readonly hidden>
                                <input type="text" style="text-align: center;" class="form-control-plaintext" name="idMaestro" value="<?= $maestro->id ?>" id="idMaestro" readonly hidden>
                                <input type="text" style="text-align: center;" class="form-control-plaintext" name="name" value="<?= $maestro->nombre ?>" id="name" readonly>
                                <?php if($clave == '0'): ?>
                                <div class="col my-1">
                                    <label class="mr-sm-2" for="claveMateria">Materia</label>
                                    <select class="custom-select" name="claveMateria" id="claveMateria" required>
                                        <?php foreach($claves as $clave): ?>
                                            <option value="<?= $clave->clave ?>"><?= $clave->clave.' - '.$clave->materia ?></option>
                                        <?php endforeach ?>
                                    </select>
                                </div>
                                <?php else : ?>
                                <input type="text" style="text-align: center;" class="form-control-plaintext" name="claveMateria" value="<?= $clave ?>" id="name" readonly>
                                <?php endif ?>
                            </div>
                            <!-- Cantidad de tareas -->
                            <div class="form-group">
                                <h5 class="text-center">Cantidad de tareas</h5>
                                <div class="row justify-content-center">
                                    <div class="col form-check ml-4">
                                        <input class="form-check-input" type="radio" name="cantTareas" value="Pocas" id="cantTareas1" required>
                                        <label class="form-check-label tag-check" for="cantTareas1">Pocas</label>
                                    </div>
                                    <div class="col form-check">
                                        <input class="form-check-input" type="radio" name="cantTareas" value="Normal" id="cantTareas2">
                                        <label class="form-check-label tag-check" for="cantTareas2">Normal</label>
                                    </div>
                                    <div class="col form-check">
                                        <input class="form-check-input" type="radio" name="cantTareas" value="Muchas" id="cantTareas3">
                                        <label class="form-check-label tag-check" for="cantTareas3">Muchas</label>
                                    </div>
                                </div>
                            </div>
                            <!-- Dificultad de los ex??menes -->
                            <div class="form-group">
                                <h5 class="text-center">Dificultad de los ex??menes</h5>
                                <div class="row justify-content-center">
                                    <div class="col form-check ml-4">
                                        <input class="form-check-input" type="radio" name="dificultad" id="dificultad1" value="F??cil" required>
                                        <label class="form-check-label tag-check" for="dificultad1">F??cil</label>
                                    </div>
                                    <div class="col form-check">
                                        <input class="form-check-input" type="radio" name="dificultad" value="Normal" id="dificultad2">
                                        <label class="form-check-label tag-check" for="dificultad2">Normal</label>
                                    </div>
                                    <div class="col form-check">
                                        <input class="form-check-input" type="radio" name="dificultad" value="Dif??cil" id="dificultad3">
                                        <label class="form-check-label tag-check" for="dificultad3">Dif??cil</label>
                                    </div>
                                </div>
                            </div>
                            <!-- Forma de trabajo -->
                            <div class="form-group">
                                <h5 class="text-center">Forma de trabajo</h5>
                                <div class="row justify-content-center">
                                    <div class="col form-check ml-4">
                                        <input class="form-check-input" type="radio" name="formaTrabajo" id="formaTrabajo1" value="Virtual" required>
                                        <label class="form-check-label tag-check" for="formaTrabajo1">Virtual</label>
                                    </div>
                                    <div class="col form-check">
                                        <input class="form-check-input" type="radio" name="formaTrabajo" id="formaTrabajo2" value="H??brida">
                                        <label class="form-check-label tag-check" for="formaTrabajo2">H??brida</label>
                                    </div>
                                    <div class="col form-check">
                                        <input class="form-check-input" type="radio" name="formaTrabajo" id="formaTrabajo3" value="Presencial">
                                        <label class="form-check-label tag-check" for="formaTrabajo3">Presencial</label>
                                    </div>
                                </div>
                            </div>
                            <!-- Calificaciones -->
                            <div class="form-row align-items-center">
                                <div class="col my-1">
                                    <label class="mr-sm-2" for="calificacionAsistencia">Asistencia</label>
                                    <select class="custom-select" name="calificacionAsistencia" id="calificacionAsistencia" required>
                                        <option value="10" selected>10</option>
                                        <option value="9">9</option>
                                        <option value="8">8</option>
                                        <option value="7">7</option>
                                        <option value="6">6</option>
                                        <option value="5">5</option>
                                        <option value="4">4</option>
                                        <option value="3">3</option>
                                        <option value="2">2</option>
                                        <option value="1">1</option>
                                        <option value="0">0</option>
                                    </select>
                                </div>
                                <div class="col my-1">
                                    <label class="mr-sm-2" for="calificacionConocimientos">Conocimientos</label>
                                    <select class="custom-select" name="calificacionConocimientos" id="calificacionConocimientos" required>
                                        <option value="10" selected>10</option>
                                        <option value="9">9</option>
                                        <option value="8">8</option>
                                        <option value="7">7</option>
                                        <option value="6">6</option>
                                        <option value="5">5</option>
                                        <option value="4">4</option>
                                        <option value="3">3</option>
                                        <option value="2">2</option>
                                        <option value="1">1</option>
                                        <option value="0">0</option>
                                    </select>
                                </div>
                                <div class="col my-1">
                                    <label class="mr-sm-2" for="calificacionDificultad">Dificultad</label>
                                    <select class="custom-select" name="calificacionDificultad" required>
                                        <option value="10" selected>10</option>
                                        <option value="9">9</option>
                                        <option value="8">8</option>
                                        <option value="7">7</option>
                                        <option value="6">6</option>
                                        <option value="5">5</option>
                                        <option value="4">4</option>
                                        <option value="3">3</option>
                                        <option value="2">2</option>
                                        <option value="1">1</option>
                                        <option value="0">0</option>
                                    </select>
                                </div>
                            </div>

                            <!-- Review -->
                            <div class="form-group">
                                <label for="comentarios">Comentarios</label>
                                <textarea id="comentarios" name="comentarios" class="form-control" id="comentarios" rows="4" maxlength="240" style="resize: none;" autofocus></textarea>
                            </div>

                            <!--  -->
                            <div class="form-inline float-right mb-3">
                                <div class="custom-control custom-checkbox my-1 mr-4">
                                    <input type="checkbox" name="anonimo" class="custom-control-input" id="anonimo">
                                    <label class="custom-control-label" for="anonimo">Hacer mi rese??a an??nima</label>
                                </div>
                                <button type="submit" class="btn btn-primary my-1 btn-md waves-effect text-center">Publicar calificaci??n</button>
                            </div>

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