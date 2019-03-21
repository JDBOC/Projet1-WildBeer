<?php include('../header.php') ?>

      <div class="container"><br>

        <section id="descripCat" class="text-center">
          <h2 class="text-warning text-center khtext2">
            <!--LE NOM DE VOTRE CATEGORIE-->
            Les Bières d'Amérique du Sud
          </h2>
          <br>
          <!--LE TEXTE DESCRIPTIF DE VOTRE CATEGORIE-->
          <p class="text-justify">En Amérique du Sud aujourd’hui, la bière reste la boisson la plus populaire
            et la plus consommée dans une grande majorité de pays. Historiquement, on retrouve trace de boisson de mais fermenté mais
            c'est surtout au XVIe siècle que l'on retrouve trace des premières bières au manioc. Cette boisson est considérée comme sacrée par les peuples locaux.
            <br>
            Depuis 50 ans, les bières d'Amérique du Sud ont pu s'imposer dans le marché mondiale.
            Notament la société brésilienne AB-Inbev qui distibue la brahma qui est la cinquième bière la plus consommée au monde.
            <br>
            Le savoir faire européen dans le brassage de bière a migré avec les peuples colonisateurs et la plupart des grandes bières sont a l'origine créée par des Allemands, des Suisses ou des Belges.
            On retrouve donc des goûts de bières communs à l'Europe mais certaines spécificités sont très intéressantes a découvrir et vous en trouverez dans notre catalogue.
          </p>
        </section>
      </div>
      <div class="container">
        <?php include('southAmerica/caroussel.php') ?>
      </div>
      <div class="container">
        <section id="nosProduits">
          <h3 class="text-center text-warning khtext2">
            Notre Sélection :
          </h3>
          <div class="container">
            <div class="row d-flex justify-content-around">
              <?php include('southAmerica/southAmericaCards.php');?>
             </div>
           </div>
           <a href="southAmerica/addForm.php"><button type="button" name="button" class="btn btn-outline-secondary">Add a Product</button></a>
         </div>
       </section>


    <!--FOOTER Noel -->

      <?php include('../footer.php') ?>
