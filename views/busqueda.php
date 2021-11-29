<?php require_once('../includes/header.php'); ?>

<div class="container panel-profesor mt-5 bottom-buffer">
    <div class="row profesor-header text-center py-4 pl-4">
        <h1>Resultados de la busqueda</h1>
    </div>
    <div class="row">
        <div class="col-lg-12 text-center">
            <div class="tab-content" id="nav-tabContent">
                <div class="tab-pane fade show active" id="nav-home-general" role="tabpanel" aria-labelledby="nav-home-tab-general">
                    <div class="row">
                        <?php
                        foreach ($maestroM->buscarMaestro($_GET["pattern"]) as $maestro) :
                        ?>
                            <div class="col-lg-12 text-left comentario">
                                <?
                                $calAsistencia = $reviewM->getAsistencia($maestro->id);
                                $calConocimientos = $reviewM->getConocimientos($maestro->id);
                                $prom = ($calAsistencia + $calConocimientos) / 2;

                                ?>
                                <p>
                                    <span><?= $maestro->nombre ?></span>
                                    <span class="float-right"><?= $prom ?></span>
                                </p>

                            </div>
                        <?php endforeach; ?>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>