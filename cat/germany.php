<?php include('../doctype.php');?>
<body>
  <header>
    <?php include('../header_cat.php');?>
  </header>

  <div class="container-fluid tom-page-bg">
    <section id="descripCat">
      <br><br>
      <div class="container">
        <div class="row d-flex justify-content-center">
          <h2 class="font-weight-bold tom-cat-title">Les Bierres allemandes</h2><br /><br />
        </div>
        <br><br>
        <div class="row">
          <p class="tom-cat-title tom-desc-size">
            La bière allemande trouve son origine dans le haut Moyen Âge.
            Depuis des siècles, la bière fait partie de la culture et de la
            gastronomie allemande, et le pays est constellé de Bierpalast,
            de Biergarten, de Bierstube1, de Bierkeller, de Bierhaus et Bierzelt
            que l'on retrouve lors des nombreuses fêtes de la bière. </p>
        </div>
        <br><br>
      </div>
    </section>
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
