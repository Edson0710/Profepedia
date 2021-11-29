<?php require_once('../includes/header.php'); ?>

<div class="container panel-profesor mt-5 bottom-buffer">
    <!-- <div class="panel-profesor"> -->
    <div class="row profesor-header py-4">
        <div class="col-lg-12 text-center">
            <img src="../resources/img/default.jpg" width="16%" alt="logo" class="rounded-circle"
                style="min-width: 98px;">
        </div>
        <div class="col-lg-12 text-center mt-3">
            <h4>USUARIO</h4>
        </div>
    </div>
    <div class="row">
        <div class="col-lg-12 text-center">
            <nav>
                <div class="nav nav-tabs nav-fill" id="nav-tab" role="tablist">
                    <a class="nav-item nav-link active" id="nav-home-tab-general" data-toggle="tab"
                        href="#nav-home-general" role="tab" aria-controls="nav-home-general"
                        aria-selected="true">Mis Reviews</a>
                </div>
            </nav>
            <div class="tab-content" id="nav-tabContent">
                <div class="tab-pane fade show active" id="nav-home-general" role="tabpanel"
                    aria-labelledby="nav-home-tab-general">
                    <div class="row">
                        <div class="col-lg-12 text-center py-4">
                            <h3>General</h3>
                            <a href="../controllers/calificar_profesor_controller.php?id=<?=$id?>&clave=0"
                                class="btn btn-evaluar mt-3 <?=(!isset($_SESSION['user'])) ? 'disabled' : '' ?>">Evaluar al profesor</a>
                        </div>
                        <?php
                            foreach($generales as $review):
                        ?>
                        <div class="col-lg-12 text-left comentario" id="<?=$review->id?>">
                            <h5><?= $review->anonimo == 0 ? $review->nombre : "Anónimo"?></h5>
                            <ul class="list-inline tags">
                                <li class="list-inline-item"><?=$review->idmateria?></li>
                                <li class="list-inline-item"><?=$review->tipo?></li>
                                <li class="list-inline-item"><?='Tarea: '.$review->tareas?></li>
                                <li class="list-inline-item"><?='Examen: '.$review->examenes?></li>
                            </ul>
                            <p><?=$review->contenido?></p>
                        </div>
                        <?php
                            endforeach;
                        ?>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
<?php require_once('../includes/footer.php'); ?>