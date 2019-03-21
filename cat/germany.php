<?php include('../doctype.php');
      include('../connector.php');
?>

<body style="background-color: #fffcf1;">
    <?php include('germanyData/formValidation.php')?>
  <header>
    <?php include('../header_cat.php');?>
  </header>
  <div class="container-fluid tom-page-bg">
    <?php include('germanyData/germanyJumbotron.php');?>
    <section id="nosProduits">
      <br />
      <h3 class="tom-cat-title font-weight-bold tom-caviar text-center">Retrouve les bières d'Allemagne</h3><br />
      <div class="container">
        <div class="row d-flex justify-content-around">
          <?php include('germanyData/germany_card.php');?>
        </div>
      </div>
      <br /><br />
        <?php include('germanyData/form.php'); ?>
    </section>
  </div>
  <footer>
    <?php include('../footer_cat.php');?>
  </footer>

  <?php include('../scriptImport.php');?>
