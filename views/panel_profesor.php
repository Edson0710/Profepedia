<?php require_once('../includes/header.php');?>

<div class="container panel-profesor mt-4 bottom-buffer">
    <!-- <div class="panel-profesor"> -->
    <div class="row profesor-header py-4">
        <div class="col-lg-12 text-center">
            <img src="../resources/img/default.jpg" width="16%" alt="logo" class="rounded-circle"
                style="min-width: 98px;">
        </div>
        <div class="col-lg-12 text-center mt-3">
            <h4><?=$maestro->nombre?></h4>
            <h6>CUCEI</h6>
            <ul class="list-inline tags-header">
                <li class="list-inline-item">
                    Tag 1
                    <span class="tag-count">1</span>
                </li>
                <li class="list-inline-item">
                    Tag 2
                    <span class="tag-count">2</span>
                </li>
                <li class="list-inline-item">
                    Tag 3
                    <span class="tag-count">3</span>
                </li>
            </ul>
            <div class="row mt-4">
                <div class="col-3 text-center">
                    <h5>General</h5>
                    <h5>9.7</h5>
                </div>
                <div class="col-3 text-center">
                    <h5>Asistencia</h5>
                    <h5>9.6</h5>
                    </h5>
                </div>
                <div class="col-3 text-center">
                    <h5>Conocimiento</h5>
                    <h5>9.5</h5>
                </div>
                <div class="col-3 text-center">
                    <h5>Dificultad</h5>
                    <h5>100</h5>
                </div>
            </div>
        </div>
    </div>
    <div class="row">
        <div class="col-lg-12 text-center">
            <nav>
                <div class="nav nav-tabs nav-fill" id="nav-tab" role="tablist">
                    <?php foreach($materias as $materia):?>
                    <a class="nav-item nav-link" id="nav-home-tab-<?=$materia->id?>" data-toggle="tab"
                        href="#nav-home-<?=$materia->id?>" role="tab" aria-controls="nav-home-<?=$materia->id?>"
                        aria-selected="true"><?=$materia->clave?></a>
                    <?php endforeach;?>
                </div>
            </nav>
            <div class="tab-content" id="nav-tabContent">
                <?php foreach($materias as $materia):?>
                <div class="tab-pane fade show" id="nav-home-<?=$materia->id?>" role="tabpanel" aria-labelledby="nav-home-tab-<?=$materia->id?>">
                    <div class="row">
                        <div class="col-lg-12 text-center py-4">
                            <h3><?=$materia->materia?></h3>
                            <h1 style="color: #888;">10</h1>
                            <a href="" class="btn btn-evaluar mt-3">Evaluar al profesor</a>
                        </div>
                        <?php
                            $reviews = $reviewsModel->getReviewsMateria($materia->idmateria, $materia->idmaestro);
                            foreach($reviews as $review):
                        ?>
                        <div class="col-lg-12 text-left comentario">
                            <h5><?=$review->nombre?></h5>
                            <ul class="list-inline tags">
                                <li class="list-inline-item">Tag 1</li>
                                <li class="list-inline-item">Tag 2</li>
                                <li class="list-inline-item">Tag 3</li>
                            </ul>
                            <p><?=$review->contenido?></p>
                            <p class="likes">
                                <i class="fas fa-arrow-up"></i>
                                <span><?=$review->votos?></span>
                                <i class="fas fa-arrow-down"></i>
                            </p>
                        </div>
                        <?php endforeach;?>
                    </div>
                </div>
                <?php endforeach;?>
            </div>
        </div>
    </div>
</div>
<?php require_once('../includes/footer.php');?>
