<?php require_once('../includes/header.php');?>

<div class="container panel-profesor mt-5 bottom-buffer">
    <!-- <div class="panel-profesor"> -->
    <div class="row profesor-header py-4">
        <div class="col-lg-12 text-center">
            <img src="../resources/img/default.jpg" width="16%" alt="logo" class="rounded-circle" style="min-width: 98px;">
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
                    <a class="nav-item nav-link active" id="nav-home-tab" data-toggle="tab" href="#nav-home" role="tab"
                        aria-controls="nav-home" aria-selected="true">Materia 1</a>
                    <a class="nav-item nav-link" id="nav-profile-tab" data-toggle="tab" href="#nav-profile" role="tab"
                        aria-controls="nav-profile" aria-selected="false">Materia 2</a>
                </div>
            </nav>
            <div class="tab-content" id="nav-tabContent">
                <div class="tab-pane fade show active" id="nav-home" role="tabpanel" aria-labelledby="nav-home-tab">
                    <div class="row">
                        <div class="col-lg-12 text-center py-4">
                            <h2>Materia</h2>
                            <h2 style="color: #888;">10</h2>
                            <button class="btn btn-evaluar mt-3">Evaluar al profesor</button>
                        </div>
                        <div class="col-lg-12 text-left comentario">
                            <h5>Anonimo</h5>
                            <ul class="list-inline tags">
                                <li class="list-inline-item">Tag 1</li>
                                <li class="list-inline-item">Tag 2</li>
                                <li class="list-inline-item">Tag 3</li>
                            </ul>
                            <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Nunc pharetra dictum urna ac
                                pharetra. Nam at justo mauris. Vivamus elementum ultrices velit vel lacinia. Nulla
                                ligula sapien, rhoncus ac tempor id, rutrum quis velit. Cras sit amet nibh sit amet nibh
                                ornare ultrices eu ut enim.</p>
                            <p class="likes">
                                <i class="fas fa-arrow-up"></i>
                                <span>2</span>
                                <i class="fas fa-arrow-down"></i>
                            </p>
                        </div>
                        <div class="col-lg-12 text-left comentario">
                            <h5>Alumno Valiente</h5>
                            <ul class="list-inline tags">
                                <li class="list-inline-item">Tag 1</li>
                                <li class="list-inline-item">Tag 3</li>
                            </ul>
                            <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Nunc pharetra dictum urna ac
                                pharetra. Nam at justo mauris. Vivamus elementum ultrices velit vel lacinia. Nulla
                                ligula sapien, rhoncus ac tempor id, rutrum quis velit. Cras sit amet nibh sit amet nibh
                                ornare ultrices eu ut enim.</p>
                            <p class="likes">
                                <i class="fas fa-arrow-up"></i>
                                <span>-4</span>
                                <i class="fas fa-arrow-down"></i>
                            </p>
                        </div>
                    </div>
                </div>
                <div class="tab-pane fade" id="nav-profile" role="tabpanel" aria-labelledby="nav-profile-tab">
                    <h5>Materia 2</h5>
                </div>
            </div>
        </div>
    </div>
</div>
<?php require_once('../includes/footer.php');?>