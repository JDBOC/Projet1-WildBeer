<?php

$myArray = array_map('str_getcsv', file('../asset/infos/bdd.csv'));

foreach ($myArray as $bierre) {
    // code...
    //echo count($value).BR; ==== 11 de lenght

    echo '<div class="col-12 col-sm-6 col-md-4 col-lg-3 px-1 py-2 ">'
    .'<div class="card p-1 tom-card-border">'
      .'<div class="row m-0">'
      .'<div class="col-sm-12  col-12 px-0 d-flex align-items-center">'
          .'<img class="card-img-top " data-toggle="modal" data-target="#'.substr($bierre[10], 0, -4).'" src="../asset/img/thomas/'.$bierre[10].'" alt="Card image">'
      .'</div>'
        .'<div class="card-body  col-sm-12  col-12 tom-card-bg text-white">'
          .'<h4 class="card-title tom-card-text  text-center  ">'.$bierre[0].'</h4>'
          .'<p class="card-text tom-card-desc text-justify">'.$bierre[1].'</p>'
          .'<p class="tom-card-text font-weight-bold text-center">1.80 €</p>'
          .'<button type="button" name="button" class="btn tom-btn-bg btn-block  p-1"> Ajouter au Panier !</button>'
        .'</div>'
      .'</div>'
.'</div>'
.'</div>'
.'
<div id="'.substr($bierre[10], 0, -4).'" class="modal fade" role="dialog">
  <div class="modal-dialog modal-lg">
    <div class="modal-content">
      <div class="modal-header tom-card-bg text-light">
        <div class="container-fluid">
          <div class="row">
            <div class="col-lg-6 col-md-6 col-sm-6 col-6">
              <!-- TITRE DU POPUP  -->
              <h4 class="modal-title tom-card-text">'.$bierre[0].'</h4>
            </div>
            <div class="col-lg-6 col-md-6 col-sm-6 col-6">
              <!--  BOUTON CROIX FERMETURE -->
              <button type="button" class="close text-light" data-dismiss="modal">&times;</button>
            </div>
          </div>
        </div>
      </div>
      <div class="modal-body">
        <!-- CORPS DU POP UP  -->
        <div class="container-fluid">
          <div class="row">
            <div class="col-lg-4 col-md-4 col-sm-4 col-4">
              <!--  IMAGE DANS LE POPUP -->
              <img class="card-img-top tom-image" src="../asset/img/thomas/'.$bierre[10].'" alt="Card image">
            </div>
            <div class="col-lg-8 col-md-8 col-sm-8 col-8">
              <div class="row">
                <table class="table table-borderless table-responsive">
                  <tr>
                    <td class="align-middle font-weight-bold">Note</td>
                    <td>
                      <table class="table table-bordered">
                        <!-- TABLEAU GOUT/SOIF  -->
                        <tr>
                          <td>Gout</td>
                          <td>Soif</td>
                          <td>Amertume</td>
                        </tr>
                        <tr>
                          <td>'.$bierre[2].'</td>
                          <td>'.$bierre[3].'</td>
                          <td>'.$bierre[4].'</td>
                        </tr>
                      </table>
                    </td>
                  </tr>
                  <tr>
                    <td class="font-weight-bold">Alcool/volume</td>
                    <td>'.$bierre[5].'</td>
                  </tr>
                  <tr>
                    <td class="font-weight-bold">Fermentation</td>
                    <td>'.$bierre[6].'</td>
                  </tr>
                </table>
              </div>
              <div class="row">
                <!-- BOUTON RESEAU SOCIAUX  -->
                <button class="btn"><i class="fa fa-twitter"></i></button>
                <button class="btn"><i class="fa fa-facebook"></i></button>
                <button class="btn"><i class="fa fa-google-plus"></i></button>
              </div>
            </div>
          </div>
          <div class="row">
            <div class="col-lg-12 col-md-12 col-sm-12 col-12">
              <br><br>
              <table class="table">
                <!--TABLEAU PRIX   -->
                <tr>
                  <td class="font-weight-bold">Unité</td>
                  <td>'.$bierre[7].'</td>
                </tr>
                <tr>
                  <td class="font-weight-bold">Caisse (x6)</td>
                  <td>'.$bierre[8].'</td>
                </tr>
                <tr>
                  <td class="font-weight-bold">Fut</td>
                  <td>'.$bierre[9].'</td>
                </tr>
              </table>
            </div>
          </div>
        </div>
      </div>
    </div>
  </div>
</div>'
;
}?>
