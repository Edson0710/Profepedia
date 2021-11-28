<?php require_once('includes/header.php');?>

<div class="container top-buffer bottom-buffer">
  <div class="row justify-content-center">
    <div class="col-md-5">
      <form class="form" action="#" method="POST">
        <div class="card">
          <div class="card-block">
            <div class="card-title p-3">
              <h4 class="text-center">Agregar un nuevo profesor</h4>
            </div>
            <div class="card-text px-3">
              <div class="form-group">
                <label for="name">Nombre</label>
                <input type="text" class="form-control" name="name" value="" placeholder="Nombre del profesor" required id="name" autofocus>
              </div>
              <div class="form-group">
                <label for="clave">Clave</label>
                <input type="text" class="form-control" name="clave" placeholder="Clave de la materia" required value="" id="clave">
              </div>
              <div class="form-group">
                <label for="centro">Centro Universitario</label>
                <select class="custom-select" name="centro" id="centro" required>
                  <option value="">Elegir un Centro...</option>
                  <option value="1">CUCEI</option>
                </select>
              </div>
              <div class="row">
                <div class="col-md-12"> <input type="submit"
                  class="btn btn-primary btn-md btn-block waves-effect text-center m-b-20" name="submit" value="Iniciar sesión">
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
<?php require_once('includes/footer.php');?>