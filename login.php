<?php require_once('includes/header.php');?>

<div class="container top-buffer bottom-buffer">
  <div class="row justify-content-center">
    <div class="col-md-4 ">
      <form class="form-signin" action="#" method="POST">
        <div class="card">
          <div class="card-block">
            <div class="card-title p-3">
              <h4 class="text-center">Inicia sesión en Profepedia.</h4>
            </div>
            <div class="card-text px-3">
              <div class="form-group">
                <input type="email" class="form-control" name="email" value="" placeholder="Correo" required id="email">
              </div>
              <div class="form-group">
                <input type="password" class="form-control" name="password" placeholder="Contraseña" required value=""
                  id="password">
              </div>
              <div class="row">
                <div class="col-md-12"> <input type="submit"
                    class="btn btn-primary btn-md btn-block waves-effect text-center m-b-20" name="submit" value="Iniciar sesión">
                </div>
              </div>
              <div class="or-container">
                <div class="line-separator"></div>
                <div class="or-label">o</div>
                <div class="line-separator"></div>
              </div>
              <div class="row">
                <div class="col-md-12">
                  <a class="btn btn-lg btn-google btn-block btn-outline" href="#">
                    <img src="https://img.icons8.com/color/16/000000/google-logo.png">
                    Iniciar sesión con Google
                  </a>
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