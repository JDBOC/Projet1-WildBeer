<!doctype html>
<html lang="fr">

  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.7.2/css/all.css" integrity="sha384-fnmOCqbTlWIlj8LyTjo7mOUStjsKC4pOpQbqyi7RrhN7udi9RwhKkMHpvLbHG9Sr" crossorigin="anonymous">
    <link href="https://stackpath.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css" rel="stylesheet" integrity="sha384-wvfXpqpZZVQGK6TAh5PVlGOfQNHSoD2xbE+QkPxCAFlNEevoEH3Sl0sibVcOQVnN" crossorigin="anonymous">
    <link href="https://fonts.googleapis.com/css?family=Roboto" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css?family=Abril+Fatface" rel="stylesheet">
    <link rel="stylesheet" href="../style.css">
    <title>Wild Beer!</title>
  </head>

  <body>
    <header>
    <!-- NAVBAR Thomas -->
     <?php include('../header_cat.php');?>
    </header>
<div class="container-fluid">
    <section id="nosProduits">
      <h3 class="text-dark font-weight-bold">Retrouve les bières de
        <!--VOTRE CATEGORIE-->
      </h3>
      <div class="container">
        <div class="row ">

<?php

// header things

$myArray = array_map('str_getcsv', file('../asset/infos/bdd.csv'));

foreach ($myArray as $bierre) {
    // code...
    //echo count($value).BR; ==== 11 de lenght

    echo '<div class="col-12 col-sm-6 col-md-4 col-lg-3 px-1 py-2 ">'
    .'<div class="card p-1">'
      .'<div class="row m-0">'
      .'<div class="col-sm-12  col-5 px-0 d-flex align-items-center">'
          .'<img class="card-img-top " data-toggle="modal" data-target="#'.substr($bierre[10], 0, -4).'" src="../asset/img/thomas/'.$bierre[10].'" alt="Card image">'
      .'</div>'
        .'<div class="card-body  col-sm-12  col-7 bg-dark text-white">'
          .'<h4 class="card-title  text-center  ">'.$bierre[0].'</h4>'
          .'<p class="card-text text-justify">'.$bierre[1].'</p>'
          .'<p class="text-success font-weight-bold text-center">1.80 €</p>'
          .'<button type="button" name="button" class="btn btn-warning btn-block  p-1"> Ajouter au Panier !</button>'
        .'</div>'
      .'</div>'
.'</div>'
.'</div>'
.'
<div id="'.substr($bierre[10], 0, -4).'" class="modal fade" role="dialog">
  <div class="modal-dialog modal-lg">
    <div class="modal-content">
      <div class="modal-header bg-dark text-light">
        <div class="container-fluid">
          <div class="row">
            <div class="col-lg-6 col-md-6 col-sm-6 col-6">
              <!-- TITRE DU POPUP  -->
              <h4 class="modal-title">'.$bierre[0].'</h4>
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
}

// footer things
?>


</div>
</div>
</section>
</div>

<footer>
      <?php include('../footer_cat.php');?>
    </footer>
    <!-- Optional JavaScript -->
    <!-- jQuery first, then Popper.js, then Bootstrap JS -->
    <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js" integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1" crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js" integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous"></script>
    <script src="../script.js"></script>


  </body>

</html>
