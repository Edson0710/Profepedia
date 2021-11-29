<?php
require_once('../models/reviewModel.php');
    // Update votos in review
    $id = $_POST['id'];
    $votos = $_POST['votos'];
    $review = new ReviewModel();
    $review->updateVotos($id, $votos);

?>
