<?php
	for ($i=0; $i < 9 ; $i++) { 
		echo '
	 <div class="col-12 col-sm-6 col-md-4 col-lg-3 px-1 py-2 ">
  <div class="card p-1">
    <div class="row m-0">
      <div class="col-sm-12  col-5 px-0 d-flex align-items-center">
        <img class="card-img-top " data-toggle="modal" data-target="#brewIpa" src="'.$biereFrance[$i]['image'].'" alt="Card image">
      </div>
      <div class="card-body  col-sm-12  col-7 bg-dark text-white">
        <h4 class="card-title  text-center  ">'.$biereFrance[$i]['titre'].'</h4>
        <p class="card-text text-justify">'.$biereFrance[$i]['descriptif'].'</p>
        
        <p class="text-success font-weight-bold text-center">1.80 €</p>
        <button type="button" name="button" class="btn btn-warning btn-block  p-1"> Ajouter au Panier !</button>
      </div>
    </div>
  </div>
</div>
<!-- DEBUT partie popup  -->
            <div id="'.$biereFrance[$i]['titre'].'" class="modal fade" role="dialog">
              <div class="modal-dialog modal-lg">
                <div class="modal-content">
                  <div class="modal-header bg-dark text-light">
                    <div class="container-fluid">
                      <div class="row">
                        <div class="col-lg-6 col-md-6 col-sm-6 col-6">
                          <!-- TITRE DU POPUP  -->
                          <h4 class="modal-title">'.$biereFrance[$i]['titre'].'</h4>
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
                          <img class="card-img-top" src="../asset/img/noel/beers/achel.png" alt="Card image">
                        </div>
                        <div class="col-lg-8 col-md-8 col-sm-8 col-8">
                          <div class="row">
                            <table class="table table-borderless">
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
                                      <td>'.$biereFrance[$i]['gout'].'</td>
                                      <td>'.$biereFrance[$i]['soif'].'</td>
                                      <td>'.$biereFrance[$i]['amertume'].'</td>
                                    </tr>
                                  </table>
                                </td>
                              </tr>
                              <tr>
                                <td class="font-weight-bold">Alcool/volume</td>
                                <td>'.$biereFrance[$i]['degres'].'/td>
                              </tr>
                              <tr>
                                <td class="font-weight-bold">Fermentation</td>
                                <td>Basse</td>
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
                              <td>'.$biereFrance[$i]['unitaire'].'</td>
                            </tr>
                            <tr>
                              <td class="font-weight-bold">Caisse (x6)</td>
                              <td>'.$biereFrance[$i]['caisse'].'</td>
                            </tr>
                            <tr>
                              <td class="font-weight-bold">Fut</td>
                              <td>'.$biereFrance[$i]['fut'].'</td>
                            </tr>
                          </table>
                        </div>
                      </div>
                    </div>
                  </div>
                </div>
              </div>
            </div>';}
?>
