<?php include('../doctype.php');?>
<body>
  <header>
    <?php include('../header_cat.php');?>
  </header>
  
  <div class="container-fluid tom-page-bg">
    <section id="descripCat">
      <br><br>
      <h2 class="font-weight-bold tom-cat-title text-center">Les Bierres allemandes</h2><br /><br />
      <p class="tom-cat-title ">
        <!--LE TEXTE DESCRIPTIF DE VOTRE CATEGORIE-->La bière allemande trouve son origine dans le haut Moyen Âge. Depuis des siècles, la bière fait partie de la culture et de la gastronomie allemande, et le pays est constellé de Bierpalast («
        palais de la bière »), de Biergarten (« jardin de la bière »), de Bierstube1 (« brasserie »), de Bierkeller (« cave à bière »), de Bierhaus (« maison de la bière ») et Bierzelt (« tente à bière ») que l'on retrouve lors des nombreuses fêtes
        de la bière. </p>
    </section>

    <div class="container-fluid">
       <div class="row">
         <img src="../asset/img/thomas/cat-img.jpg" class="img-responsive" alt="Beer">
       </div>
     </div>

  <section id="nosProduits">
    <br /><h3 class="tom-cat-title font-weight-bold text-center">Retrouve les bières d'Allemagne</h3><br />
    <div class="container">
      <div class="row d-flex justify-content-around">
        <?php include('germany_card.php');?>
      </div>
    </div>
  </section>
  </div>

<footer>
  <?php include('../footer_cat.php');?>
</footer>

<?php include('../scriptImport.php');?>
