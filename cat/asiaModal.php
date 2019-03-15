<?php ?>
<!-- DEBUT partie popup  -->
<div id= <?= $card['nom'] ?> class="modal fade" role="dialog">
  <div class="modal-dialog modal-lg">
    <div class="modal-content kev-card5">
      <div class="modal-header bg-dark text-light kev-card2 kev-card2">
        <div class="container-fluid">
          <div class="row">
            <div class="col-lg-6 col-md-6 col-sm-6 col-6">
              <!-- TITRE DU POPUP  -->
              <h4 class="modal-title kh-text3"><?= $card['nom']?></h4>
            </div>
            <div class="col-lg-6 col-md-6 col-sm-6 col-6">
              <!--  BOUTON CROIX FERMETURE -->
              <button type="button" class="close text-light" data-dismiss="modal">&times;</button>
            </div>
          </div>
        </div>
      </div>
      <div class="modal-body k-bg">
        <!-- CORPS DU POP UP  -->
        <div class="container-fluid">
          <div class="row">
            <div class="col-lg-4 col-md-4 col-sm-4 col-4">
              <!--  IMAGE DANS LE POPUP -->
              <img class="card-img-top kev-card5" src=<?= $card['img']?> alt="Card image">
            </div>
            <div class="col-lg-8 col-md-8 col-sm-8 col-8">
              <div class="row">
                <table class="table table-borderless table-responsive k-shade">
                  <tr>
                    <td class="align-middle font-weight-bold">
                      Note
                    </td>
                    <td>
                      <table class="table table-bordered k-shade">
                        <!-- TABLEAU GOUT/SOIF  -->
                        <tr class="k-shade">
                          <td>
                            Gout
                          </td>
                          <td>
                            Soif
                          </td>
                          <td>
                            Amertume
                          </td>
                        </tr>
                        <tr>
                          <td>
                            <?= $card['gout'] ?> / 5
                          </td>
                          <td>
                            <?= $card['soif'] ?> / 2
                          </td>
                          <td>
                            <?= $card['amertume'] ?> / 2
                          </td>
                        </tr>
                      </table>
                    </td>
                  </tr>
                  <tr>
                  <td class="font-weight-bold">
                    Pays :
                  </td>
                  <td>
                    <?= $card['pays'] ?>
                  </td>
                  </tr>
                  <tr>
                    <td class="font-weight-bold">
                      Alcool / Volume
                    </td>
                    <td>
                      <?= $card['pourcent'] ?> %
                    </td>
                  </tr>
                  <tr>
                    <td class="font-weight-bold">
                      Fermentation
                    </td>
                    <td>
                      Basse
                    </td>
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
              <br>
              <br>
              <table class="table k-shade">
                <!--TABLEAU PRIX-->
                <tr>
                  <td class="font-weight-bold">
                    Unité
                  </td>
                  <td>
                    <?= $card['prix'] ?> €
                  </td>
                </tr>
                <tr>
                  <td class="font-weight-bold">
                    Caisse (x6)
                  </td>
                  <td>
                    <?= $card['prixCaisse'] ?> €
                  </td>
                </tr>
                <tr>
                  <td class="font-weight-bold">
                    Fut
                  </td>
                  <td>
                    NA
                  </td>
                </tr>
              </table>
            </div>
          </div>
        </div>
      </div>
    </div>
  </div>
</div>
