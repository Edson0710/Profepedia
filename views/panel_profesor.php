<?php require_once('../includes/header.php');?>

<div class="container panel-profesor mt-5 bottom-buffer">
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
                <?php if(count($generales)>0):?>
                <li class="list-inline-item">
                    <?=$tagTipo->tipo?>
                    <span class="tag-count"><?=$tagTipo->cont?></span>
                </li>
                <li class="list-inline-item">
                    Tarea: <?=$tagTarea->tareas?>
                    <span class="tag-count"><?=$tagTarea->cont?></span>
                </li>
                <li class="list-inline-item">
                    Examen: <?=$tagExamen->examenes?>
                    <span class="tag-count"><?=$tagExamen->cont?></span>
                </li>
                <?php endif;?>
            </ul>
            <div class="row mt-4">
                <div class="col-3 text-center">
                    <h5>General</h5>
                    <h5><?=number_format($calGeneral, 1)?></h5>
                </div>
                <div class="col-3 text-center">
                    <h5>Asistencia</h5>
                    <h5><?=number_format($calAsistencia, 1)?></h5>
                    </h5>
                </div>
                <div class="col-3 text-center">
                    <h5>Conocimiento</h5>
                    <h5><?=number_format($calConocimientos, 1)?></h5>
                </div>
                <div class="col-3 text-center">
                    <h5>Dificultad</h5>
                    <h5><?=number_format($calDificultad, 1)?></h5>
                </div>
            </div>
        </div>
    </div>
    <div class="row">
        <div class="col-lg-12 text-center">
            <nav>
                <div class="nav nav-tabs nav-fill" id="nav-tab" role="tablist">
                    <a class="nav-item nav-link active" id="nav-home-tab-general" data-toggle="tab"
                        href="#nav-home-general" role="tab" aria-controls="nav-home-general"
                        aria-selected="true">General</a>
                    <?php if(isset($materias)):?>
                    <?php foreach($materias as $materia):?>
                    <a class="nav-item nav-link" id="nav-home-tab-<?=$materia->id?>" data-toggle="tab"
                        href="#nav-home-<?=$materia->id?>" role="tab" aria-controls="nav-home-<?=$materia->id?>"
                        aria-selected="true"><?=$materia->clave?></a>
                    <?php endforeach;?>
                    <?php endif;?>
                    <a class="nav-item nav-link" id="nav-add" href="#" role="tab" aria-controls="nav-add"
                        aria-selected="true" style="width: 10%;">Agregar</a>
                </div>

            </nav>
            <div class="tab-content" id="nav-tabContent">
                <div class="tab-pane fade show active" id="nav-home-general" role="tabpanel"
                    aria-labelledby="nav-home-tab-general">
                    <div class="row">
                        <div class="col-lg-12 text-center py-4">
                            <h3>General</h3>
                            <a href="../controllers/calificar_profesor_controller.php?id=<?=$id?>&clave=0"
                                class="btn btn-evaluar mt-3">Evaluar al profesor</a>
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
                            <p class="likes">
                                <i id="up-<?=$review->id?>" class="up fas fa-arrow-up"></i>
                                <span id="votos" class="neutro"><?=$review->votos?></span>
                                <i class="down fas fa-arrow-down"></i>
                                <span style="font-size: 12px;" class="float-right"><i><?=$review->fecha?></i></span>
                            </p>

                        </div>
                        <?php endforeach;?>
                    </div>
                </div>
                <?php if(isset($materias)):?>
                <?php foreach($materias as $materia):?>
                <div class="tab-pane fade show" id="nav-home-<?=$materia->id?>" role="tabpanel"
                    aria-labelledby="nav-home-tab-<?=$materia->id?>">
                    <div class="row">
                        <div class="col-lg-12 text-center py-4">
                            <h3><?=$materia->materia?></h3>
                            <a href="../controllers/calificar_profesor_controller.php?id=<?=$id?>&clave=<?=$materia->clave?>"
                                class="btn btn-evaluar mt-3">Evaluar al profesor</a>
                        </div>
                        <?php
                            $reviews = $reviewsModel->getReviewsMateria($materia->idmateria, $materia->idmaestro);
                            foreach($reviews as $review):
                        ?>
                        <div class="col-lg-12 text-left comentario" id="<?=$review->id?>">
                            <h5><?= $review->anonimo == 0 ? $review->nombre : "Anónimo"?></h5>
                            <ul class="list-inline tags">
                                <li class="list-inline-item"><?=$review->tipo?></li>
                                <li class="list-inline-item"><?='Tarea: '.$review->tareas?></li>
                                <li class="list-inline-item"><?='Examen: '.$review->examenes?></li>
                            </ul>
                            <p><?=$review->contenido?></p>
                            <p class="likes">
                                <i id="up-<?=$review->id?>" class="up fas fa-arrow-up"></i>
                                <span id="votos"><?=$review->votos?></span>
                                <i class="down fas fa-arrow-down"></i>
                                <span style="font-size: 12px;" class="float-right"><i><?=$review->fecha?></i></span>
                            </p>

                        </div>
                        <?php endforeach;?>
                    </div>
                </div>
                <?php endforeach;?>
                <?php endif;?>
            </div>
        </div>
    </div>
</div>
<script>
    $(document).ready(function () {
        console.log("ready!");
        $('.up').click(function () {
            if($(this).hasClass('up-active')){
                console.log("up");
            }
            else{
                $(this).css('color', '#0062cc');
                $(this).parent().find('.down').css('color', '#333');
                var votos = $(this).parent().find('#votos').text();
                votos = parseInt(votos);
                var id = $(this).parent().parent().attr('id');
                if($(this).parent().find('.down').hasClass('down-active')){
                    votos+=2;
                    $(this).parent().find('#votos').text(votos);
                    $(this).addClass('up-active');
                    $(this).parent().find('.down').removeClass('down-active');
                    updateReview(id, votos);
                }
                else{
                    votos++;
                    $(this).parent().find('#votos').text(votos);
                    $(this).addClass('up-active');
                    updateReview(id, votos);
                }
                
            }

        });
        $('.down').click(function () {
            if($(this).hasClass('down-active')){
                console.log("down");
            }
            else{
                $(this).css('color', '#0062cc');
                $(this).parent().find('.up').css('color', '#333');
                var votos = $(this).parent().find('#votos').text();
                // Convertir a entero
                votos = parseInt(votos);
                var id = $(this).parent().parent().attr('id');
                if($(this).parent().find('.up').hasClass('up-active')){
                    votos-=2;
                    $(this).parent().find('#votos').text(votos);
                    $(this).addClass('down-active');
                    $(this).parent().find('.up').removeClass('up-active');
                    updateReview(id, votos);
                }
                else{
                    votos--;
                    $(this).parent().find('#votos').text(votos);
                    $(this).addClass('down-active');
                    updateReview(id, votos);
                }
            }
            
        });
        function updateReview(id, votos){
            // console.log(id);
            // console.log(votos);
            $.ajax({
                url: '../validations/update_review.php',
                type: 'POST',
                data: {
                    id: id,
                    votos: votos
                },
                success: function (response) {
                    console.log(response);
                },
                error: function (error) {
                    console.log(error);
                }
            });
        }
    });
</script>
<?php require_once('../includes/footer.php');?>