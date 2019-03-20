
    <?php require('header.php') ?>

    <!--caroussel KEVIN-->
    <section id="caroussel"class="container-fluid p-0">
        <div class="bd-example">
          <div id="carouselExampleCaptions" class="carousel slide" data-ride="carousel">
            <ol class="carousel-indicators">
              <li data-target="#carouselExampleCaptions" data-slide-to="0" class="active"></li>
              <li data-target="#carouselExampleCaptions" data-slide-to="1"></li>
              <li data-target="#carouselExampleCaptions" data-slide-to="2"></li>
            </ol>
            <div class="carousel-inner">
              <div class="carousel-item active kev-carousel-item kev-carousel-caption">
                <img src="asset/img/kevin/Picon-Photos-Culinaire-DavGemini.com-00062.jpg" class="d-block w-100" alt="...">
                <div class="carousel-caption d-none d-md-block">
                  <h5 class="khtopic">
                    Notre Best-Seller
                  </h5>
                  <p>
                    Le Picon c'est la vie !
                  </p>
                </div>
              </div>
              <div class="carousel-item kev-carousel-item kev-carousel-caption">
                <img src="asset/img/kevin/autour-monde2.jpg" class="d-block w-100" alt="...">
                <div class="carousel-caption d-none d-md-block">
                  <h5 class="khtopic">
                    Nouvel Arrivage !
                  </h5>
                  <p>
                    Faites vous plaisir avec notre nouvel arrivage !
                  </p>
                </div>
              </div>
              <div class="carousel-item kev-carousel-item kev-carousel-caption">
                <img src="asset/img/kevin/coffret.jpg" class="d-block w-100" alt="...">
                <div class="carousel-caption d-none d-md-block">
                  <h5 class="khtopic">
                    Concours !
                  </h5>
                  <p>
                    Participez à notre concours et gagnez votre coffret !
                  </p>
                </div>
              </div>
            </div>
            <a class="carousel-control-prev" href="#carouselExampleCaptions" role="button" data-slide="prev">
              <span class="carousel-control-prev-icon" aria-hidden="true"></span>
              <span class="sr-only">Previous</span>
            </a>
            <a class="carousel-control-next" href="#carouselExampleCaptions" role="button" data-slide="next">
              <span class="carousel-control-next-icon" aria-hidden="true"></span>
              <span class="sr-only">Next</span>
            </a>
          </div>

        </div>
    </section>

    <!--CATEGORIES Jean Michel-->
    <section class="container-fluid pt-3 bg-categories-home" id="categories">
      <div class="container">
        <h3 class="pl-3">Les bières du monde entier à votre porte en 48h !</h3>
        <div class="row px-4 pb-3">
          <!--TODO lier BgImg,flagImg, catName et CatText à chaque jmCardContainer -->
          <div class="jmCardContainer col-sm-6 col-lg-4 p-2">
            <!--asia category -->
            <a href="cat/asia.html">
            <div class="card p-0 ">
              <img src="asset/img/jm/catBackground/AsiaBackground.jpg" class="card-img" alt="...">
              <div class="card-img-overlay ">
                <h4 class="card-title text-center jmCatTitle">Asie</h4>
                <img src="asset/img/jm/flags/asia_flag.png" class="catFlagImg" alt="asia flag">
                <p class="card-text ">Préparez vous à déguster des blondes légères, rafraîchissantes et bon marché.</p>
              </div>
            </div></a>
          </div>
          <!--belgium category -->
          <div class="jmCardContainer col-sm-6 col-lg-4 p-2">
             <a href="cat/belgium.html">
            <div class="card p-0 ">
              <img src="asset/img/jm/catBackground/BelgiqueBackground.jpg" class="card-img" alt="...">
              <div class="card-img-overlay ">
                <h4 class="card-title text-center jmCatTitle">Belgique</h4>
                <img src="asset/img/jm/flags/belgium_flag.png" class="catFlagImg" alt="belgium flag">
                <p class="card-text "> Les bières belges comptent parmi les plus variées et les plus nombreuses collections de bières dans le monde.</p>
              </div>
            </div></a>
          </div>
          <!--germany category -->
          <div class="jmCardContainer col-sm-6 col-lg-4 p-2">
            <a href="cat/germany.html">
            <div class="card p-0 ">
              <img src="asset/img/jm/catBackground/germanyBackground.png" class="card-img" alt="...">
              <div class="card-img-overlay ">
                <h4 class="card-title text-center jmCatTitle">Allemagne</h4>
                <img src="asset/img/jm/flags/germany.png" class="catFlagImg" alt="germany flag">
                <p class="card-text ">Depuis des siècles, la bière fait partie de la culture et de la gastronomie allemande</p>
              </div>
            </div></a>
          </div>
          <!--south america category -->
          <div class="jmCardContainer col-sm-6 col-lg-4 p-2">
            <a href="cat/south_america.html">
            <div class="card p-0 ">
              <img src="asset/img/jm/catBackground/southAmericaBackground.png" class="card-img" alt="...">
              <div class="card-img-overlay ">
                <h4 class="card-title text-center jmCatTitle">Amerique du Sud</h4>
                <img src="asset/img/jm/flags/south_america_flag.png" class="catFlagImg" alt="South America flag">
                <p class="card-text ">Plein des bières carnavalesques!!</p>
              </div>
            </div></a>
          </div>
          <!--france category -->
          <div class="jmCardContainer col-sm-6 col-lg-4 p-2">
            <a href="cat/france.html">
            <div class="card p-0 ">
              <img src="asset/img/jm/catBackground/franceBackground.jpg" class="card-img" alt="...">
              <div class="card-img-overlay ">
                <h4 class="card-title text-center jmCatTitle">France</h4>
                <img src="asset/img/jm/flags/france_flag.png" class="catFlagImg" alt="france flag">
                <p class="card-text ">Plein des bières cocorico!!</p>
              </div>
            </div></a>
          </div>
          <!--UK category -->
          <div class="jmCardContainer col-sm-6 col-lg-4 p-2">
            <a href="cat/uk.html">
            <div class="card p-0 ">
              <img src="asset/img/jm/catBackground/UkBackground.jpg" class="card-img" alt="...">
              <div class="card-img-overlay ">
                <h4 class="card-title text-center jmCatTitle">Grande Bretagne</h4>
                <img src="asset/img/jm/flags/UK_flag.png" class="catFlagImg" alt="United Kingdom flag">
                <p class="card-text ">La bière britannique a une tradition fort ancienne et présente un vaste échantillon de types authentiques issus de la fermentation haute.</p>
              </div>
            </div></a>
          </div>
        </div>
      </div>
    </section>
    <!-- ABOUT US JDBOC PARTIE -->
    <section class="container-fluid jd-padding" id="aboutUs">    
      <div class="jd-card">
        <!--PARTIE OU QUENTIN CASSE LES BURNES-->
        <div class="container-fluid testVideo">
          <div class="jd-overlay"></div>
          <video playsinline="playsinline" autoplay="autoplay" muted="muted" loop="loop" class="video">
            <source src="asset/img/jd/biere.webm" type="video/webm" class="video">
          </video>
          <div class="container h-100">
            <div class="d-flex h-100 text-center align-items-center">
              <div class="w-100 text-white">
                <h3 class="txtVideo titreVideo">La bière vous réserve bien des surprises...</h3>
                <br />
                <p class="lead mb-0 txtVideo">Protége des maladies cardiovasculaires, du diabète par ses vertus diurétiques. Elle aurait de plus un effet bénéfique pour la peau et les ongles.</p>
                <br />
                <p class="lead mb-0 txtVideo">Contrairement aux idées reçues, elle ne fait pas grossir car elle contient moins de calories pour la même quantité de jus de fruit ou d'un verre de vin.</p>
                <br />
                <p class="lead mb-0 txtVideo">Bien sûr il n'est pas question d'en boire d'une façon immodérée... mais consommer de façon régulière et modérée n'aurait donc que des avantages.</p>
                <br />
                <p class="lead mb-0 txtVideo"> <strong>A la vôtre !</strong></p>
              </div>
            </div>
          </div>
        </div>
      </div>      
    </section>
    <!--PARTIE OU QUENTIN CASSE ENCORE LES BURNES-->
    <section id="topVente" class="container-fluid backgound-top-vente">    
      <div class="container">
        <h3>Tops ventes du mois</h3>
        <div id="carouselExampleControls" class="carousel slide" data-ride="carousel">
          <div class="carousel-inner">
            <div class="carousel-item active">
              <div class="container-fluid">
                <div class="row justify-content-around">
                  <div class="col-12">
                    <div class="card custom-card col-12 col-lg-6 offset-lg-3 col-md-6 offset-md-3 card-product-category">
                      <div class="row">
                        <div class="col-lg-6 col-md-6 col-sm-6 col-6">
                          <img class="card-img-top" src="asset/img/jd/ordebauce.png" alt="Bouteille Or de Beauce">
                        </div>
                        <div class="col-lg-6 col-12 d-flex align-items-center">
                          <div class="card-body black-card d-flex flex-column justify-content-center">
                            <h4 class="card-title text2 text-center font-text">Or de Bauce</h4>
                            <div class="text text-center">
                              <p class="card-text font-text">Pale Ale, houblonnée, fraîche et aromatique.</p>
                            </div>
                            <p class="text-success font-weight-bold text-center">7,50€</p>
                          </div>
                        </div>
                      </div>
                      <div class="row">
                        <div class="col-lg-12 col-md-12 col-sm-12 col-12 d-flex justify-content-center align-item-center">
                          <button type="button" name="button" class="btn btn-warning center-block mb-3"> Ajouter au Panier !</button>
                        </div>
                      </div>
                    </div>
                  </div>
                </div>
              </div>
            </div>
            <div class="carousel-item">
              <div class="container-fluid">
                <div class="row justify-content-around">
                  <div class="col-12">
                    <div class="card custom-card col-12 col-lg-6 offset-lg-3 col-md-6 offset-md-3 card-product-category">
                      <div class="row">
                        <div class="col-lg-6 col-md-6 col-sm-6 col-6">
                          <img class="card-img-top" src="asset/img/noel/beers/achel.png" alt="Card image">
                        </div>
                        <div class="col-lg-6 col-12 d-flex align-items-center">
                          <div class="card-body black-card d-flex flex-column justify-content-center">
                            <h4 class="card-title text2 text-center font-text">Achel</h4>
                            <div class="text text-center">
                              <p class="card-text font-text">Bière Trappiste aussi rare que peu connue en France ! Un produit exceptionel et de tradition !</p>
                            </div>
                            <p class="text-success font-weight-bold text-center">2,60€</p>
                          </div>
                        </div>
                      </div>
                      <div class="row">
                        <div class="col-lg-12 col-md-12 col-sm-12 col-12 d-flex justify-content-center">
                          <button type="button" name="button" class="btn btn-warning center-block mb-3"> Ajouter au Panier !</button>
                        </div>
                      </div>
                    </div>
                  </div>
                </div>
              </div>
            </div>
            <div class="carousel-item">
              <div class="container-fluid">
                <div class="row">
                  <div class="col-12">
                    <div class="card custom-card col-12 col-lg-6 offset-lg-3 col-md-6 offset-md-3 card-product-category">
                      <div class="row">
                        <div class="col-lg-6 col-md-6 col-sm-6 col-6">
                          <img class="card-img-top" src="asset/img/thomas/Kostritzer.png" alt="Card image">
                        </div>
                        <div class="col-lg-6 col-12 d-flex align-items-center">
                          <div class="card-body black-card d-flex flex-column justify-content-center">
                            <h4 class="card-title text2 text-center font-text">Köstritzer</h4>
                            <div class="text text-center">
                              <p class="card-text font-text">Une brune au nez légèrement fumé. Peu de bulles. Des notes sucrées, un peu pruneau. Mais ça reste très rafraîchissant.</p>
                            </div>
                            <p class="text-success font-weight-bold text-center">7€</p>
                          </div>
                        </div>
                      </div>
                      <div class="row">
                        <div class="col-lg-12 col-md-12 col-sm-12 col-12 d-flex justify-content-center">
                          <button type="button" name="button" class="btn btn-warning center-block mb-3"> Ajouter au Panier !</button>
                        </div>
                      </div>
                    </div>
                  </div>
                </div>
              </div>
            </div>
            <div class="carousel-item">
              <div class="container-fluid">
                <div class="row">
                  <div class="col-12">
                    <div class="card custom-card col-12 col-lg-6 offset-lg-3 col-md-6 offset-md-3 card-product-category">
                      <div class="row">
                        <div class="col-lg-6 col-md-6 col-sm-6 col-6">
                          <img class="card-img-top" src="asset/img/thomas/Berliner_Kindl.png" alt="Card image">
                        </div>
                        <div class="col-lg-6 col-12 d-flex align-items-center">
                          <div class="card-body black-card d-flex flex-column justify-content-center">
                            <h4 class="card-title text2 text-center font-text">Berliner Kindl</h4>
                            <div class="text text-center">
                              <p class="card-text font-text">Acide à fond. Trouble. Forte. Bue avec du sirop en Allemagne… Nous on a adorer… Ciao bella !</p>
                            </div>
                            <p class="text-success font-weight-bold text-center">5,00€</p>
                          </div>
                        </div>
                      </div>
                      <div class="row">
                        <div class="col-lg-12 col-md-12 col-sm-12 col-12 d-flex justify-content-center">
                          <button type="button" name="button" class="btn btn-warning center-block mb-3"> Ajouter au Panier !</button>
                        </div>
                      </div>
                    </div>
                  </div>
                </div>
              </div>
            </div>
            <div class="carousel-item">
              <div class="container-fluid">
                <div class="row">
                  <div class="col-12">
                    <div class="card custom-card col-12 col-lg-6 offset-lg-3 col-md-6 offset-md-3 card-product-category">
                      <div class="row">
                        <div class="col-lg-6 col-md-6 col-sm-6 col-6">
                          <img class="card-img-top" src="asset/img/quentin/bresilFactoryExport.png" alt="Card image">
                        </div>
                        <div class="col-lg-6 col-12 d-flex align-items-center">
                          <div class="card-body black-card d-flex flex-column justify-content-center">
                            <h4 class="card-title text2 text-center font-text">Factory Export</h4>
                            <div class="text text-center">
                              <p class="card-text font-text">Une bière de type lager avec un mélange de malts et une combinaison de houblon frappant. Couleur cuivre rougeâtre avec une note caramelée. </p>
                            </div>
                            <p class="text-success font-weight-bold text-center">2,50€</p>
                          </div>
                        </div>
                      </div>
                      <div class="row">
                        <div class="col-lg-12 col-md-12 col-sm-12 col-12 d-flex justify-content-center">
                          <button type="button" name="button" class="btn btn-warning center-block mb-3"> Ajouter au Panier !</button>
                        </div>
                      </div>
                    </div>
                  </div>
                </div>
              </div>
            </div>
            <div class="carousel-item">
              <div class="container-fluid">
                <div class="row">
                  <div class="col-12">
                    <div class="card custom-card col-12 col-lg-6 offset-lg-3 col-md-6 offset-md-3 card-product-category">
                      <div class="row">
                        <div class="col-lg-6 col-md-6 col-sm-6 col-6">
                          <img class="card-img-top w-100" src="asset/img/kevin/Beers/BEER-LAO_resultat_2.jpg" alt="Card image">
                        </div>
                        <div class="col-lg-6 col-12 d-flex align-items-center">
                          <div class="card-body black-card d-flex flex-column justify-content-center">
                            <h4 class="card-title text2 text-center font-text">BEER LAO</h4>
                            <div class="text text-center">
                              <p class="card-text font-text">Brassée avec un unique riz lao blanchi et eau fraîche naturelle du Laos.</p>
                            </div>
                            <p class="text-success font-weight-bold text-center">1,80€</p>
                          </div>
                        </div>
                      </div>
                      <div class="row">
                        <div class="col-lg-12 col-md-12 col-sm-12 col-12 d-flex justify-content-center">
                          <button type="button" name="button" class="btn btn-warning center-block mb-3"> Ajouter au Panier !</button>
                        </div>
                      </div>
                    </div>
                  </div>
                </div>
              </div>
            </div>
            <a class="carousel-control-prev" href="#carouselExampleControls" role="button" data-slide="prev">
              <span class="carousel-control-prev-icon" aria-hidden="true"></span>
              <span class="sr-only">Previous</span>
            </a>
            <a class="carousel-control-next" href="#carouselExampleControls" role="button" data-slide="next">
              <span class="carousel-control-next-icon" aria-hidden="true"></span>
              <span class="sr-only">Next</span>
            </a>
          </div>
        </div>
      </div>
    </section>
    
    <?php include('footer.php');?>
    