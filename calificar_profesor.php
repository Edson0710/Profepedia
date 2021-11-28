<?php require_once('includes/header.php'); ?>

<div class="container top-buffer bottom-buffer">
  <div class="row justify-content-center">
    <div class="col-md-6">
      <form class="form" action="#" method="POST">
        <div class="card">
          <div class="card-block">
            <div class="card-title p-3">
              <h4 class="text-center">Calificar profesor</h4>
            </div>
            <div class="card-text px-4">
              <div class="form-group">
                <label for="name" class="sr-only">Profesor a evaluar</label>
                <input type="text" style="text-align: center;" class="form-control-plaintext" name="name" value="NAVARRO BRIZUELA, EDSON DANIEL" id="name" autofocus readonly>
              </div>
              <div class="row justify-content-center">
                <div class="form-check form-check-inline px-4">
                  <input class="form-check-input" type="checkbox" id="inlineCheckbox1" value="option1">
                  <label class="form-check-label" for="inlineCheckbox1">Tag 1</label>
                </div>
                <div class="form-check form-check-inline px-4">
                  <input class="form-check-input" type="checkbox" id="inlineCheckbox2" value="option2">
                  <label class="form-check-label" for="inlineCheckbox2">Tag 2</label>
                </div>
                <div class="form-check form-check-inline px-4">
                  <input class="form-check-input" type="checkbox" id="inlineCheckbox3" value="option3">
                  <label class="form-check-label" for="inlineCheckbox3">Tag 3</label>
                </div>
              </div>
              <div class="form-group">
                <label for="exampleFormControlTextarea1">Reseña</label>
                <textarea class="form-control" id="review" rows="4" maxlength="240" style="resize: none;"></textarea>
              </div>
              <div class="form-inline float-right mb-3">
                <div class="custom-control custom-checkbox my-1 mr-4">
                  <input type="checkbox" class="custom-control-input" id="customControlInline">
                  <label class="custom-control-label" for="customControlInline">Hacer mi reseña anónima</label>
                </div>
                <button type="submit" class="btn btn-primary my-1 btn-md waves-effect text-center">Publicar calificación</button>                
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
<?php require_once('includes/footer.php'); ?>