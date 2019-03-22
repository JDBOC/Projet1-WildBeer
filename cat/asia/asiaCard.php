<?php
include 'asiaData.php';
?>
<div class="card custom-card col-12 col-lg-3 card-product-category kev-card m-1 mb-5">

  <div class="row">
    <div class="col-lg-12 col-md-12 col-sm-6 col-12 kev-card2">
      <img class="card-img-top" data-toggle="modal" data-target=#<?= $card['nom'] ?> src= <?= $card['img'] ?> alt="Card image">
    </div>
    <div class="col-lg-12 col-md-12 col-sm-6 col-12 bg-dark text-white kev-card2">
      <div class="card-body black-card d-flex flex-column justify-content-center">
        <h4 class="card-title text2 text-center font-text kh-text3"><?= $card['nom'] ?></h4>
        <div class="text text-center">
          <p class="card-text font-text">
            <?= $card['descriptif'] ?>
          </p>
        </div>
        <p class="text-success font-weight-bold text-center">
          <?= $card['prix'] ?> €
        </p>
        <button type="button" name="button" class="btn btn-warning center-block mb-3 kev-card3"> Ajouter au Panier !</button>
      </div>
    </div>
  </div>

</div>
