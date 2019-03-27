<!DOCTYPE html>
<html lang="en" dir="ltr">
  <head>
    <meta charset="utf-8">
    <title>Form</title>
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
    <style>
    .error {color: #FF0000;}
    </style>
  </head>
  <body>
<?php
include 'asiaFormTest.php';
?>
    <div class="container">
      <form class="m-5" action="<?php echo htmlspecialchars($_SERVER["PHP_SELF"]);?>"  method="post">
        <h2 class="text-center mb-5">ADD BEER</h2>
        <div class="row">
          <div class="form-group col-7 ml-5">
            <label for="nom"></label><span class="error">* <?php echo $nomErr;?></span>
            <input type="text" name="nom" class="form-control" id="nom" placeholder="BeerName" value="<?php if(isset($_POST['nom'])) echo $_POST['nom']; ?>" >

          </div>
          <div class="form-group col-4 mr-4">
            <label for="prix"></label><span class="error">* <?php echo $prixErr;?></span>
            <input type="number" name="prix" class="form-control" id="prix" pattern="[.]?[0-9]" placeholder="Price" value="<?php if(isset($_POST['prix'])) echo $_POST['prix']; ?>" >
          </div>
        </div>
        <div class="form-group ml-5 mr-5 mb-5">
          <label for="description"></label><span class="error">* <?php echo $descriptionErr;?></span>
          <textarea class="form-control" name="description" id="description" placeholder="Beer Desciption"rows="3" value="<?php if(isset($_POST['description'])) echo $_POST['description']; ?>" ></textarea>
        </div>
        <div class="row">
          <div class="form-group col-md-8 ml-auto mr-5 mb-5">
            <label for="img" class="mr-5" >Uploader votre image:</label>
            <span class="error">* <?php echo $imgErr;?></span>
            <input type="file" name="img" class="form-control-file" id="img"  value="<?php if(isset($_POST['img'])) echo $_POST['img']; ?>" >
          </div>
        </div>
        <div class="row mb-5">
          <div class="form-group col-lg-3 ml-5 mr-5">
            <label for="gout">Goût :</label><span class="error">* <?php echo $goutErr;?></span>
            <select class="form-control" name="gout" id="gout" value="<?php if(isset($_POST['gout'])) echo $_POST['gout']; ?>" >
              <option value= "0"   >  0 / 5</option>
              <option value= "0.5" >0.5 / 5</option>
              <option value= "1"   >  1 / 5</option>
              <option value= "1.5" >1.5 / 5</option>
              <option value= "2"   >  2 / 5</option>
              <option value= "2.5" >2.5 / 5</option>
              <option value= "3"   >  3 / 5</option>
              <option value= "3.5" >3.5 / 5</option>
              <option value= "4"   >  4 / 5</option>
              <option value= "4.5" >4.5 / 5</option>
              <option value= "5"   >  5 / 5</option>
            </select>
          </div>
          <div class="form-group col-lg-3 ml-5 mr-5">
            <label for="soif">Soif :</label><span class="error">* <?php echo $soifErr;?></span>
            <select class="form-control" name="soif" id="soif" value="<?php if(isset($_POST['soif'])) echo $_POST['soif']; ?>" >
              <option value= "0"   >0 / 2</option>
              <option value= "0.5" >0.5 / 2</option>
              <option value= "1"   >1 / 2</option>
              <option value= "1.5" >1.5 / 2</option>
              <option value= "2"   >2 / 2</option>
            </select>
          </div>
          <div class="form-group col-lg-3 ml-4 mr-4">
            <label for="amertume">Amertume :</label><span class="error">* <?php echo $amertumeErr;?></span>
            <select class="form-control" name="amertume" id="amertume" value="<?php if(isset($_POST['amertume'])) echo $_POST['amertume']; ?>" >
              <option value= "0"   >0 / 2</option>
              <option value= "0.5" >0.5 / 2</option>
              <option value= "1"   >1 / 2</option>
              <option value= "1.5" >1.5 / 2</option>
              <option value= "2"   >2 / 2</option>
            </select>
          </div>
        </div>
        <div class="row mb-5">
          <div class="form-group col-lg-3 ml-5 mr-5">
            <label for="pays">Pays :</label><span class="error">* <?php echo $paysErr;?></span>
            <input type="text" name="pays" class="form-control" id="pays" placeholder="Country" value="<?php if(isset($_POST['pays'])) echo $_POST['pays']; ?>" >
          </div>
          <div class="form-group col-lg-3 ml-5 mr-5">
            <label for="pourcent">Pourcent :</label><span class="error">* <?php echo $pourcentErr;?></span>
            <input type="number" name="pourcent" class="form-control" id="pourcent" placeholder="%" value="<?php if(isset($_POST['pourcent'])) echo $_POST['pourcent']; ?>" >
          </div>
          <div class="form-group col-lg-3 ml-4 mr-4">
            <label for="prixCaisse">PrixCaisse :</label><span class="error">* <?php echo $prixCaisseErr;?></span>
            <input type="number" name="prixCaisse" class="form-control" id="prixCaisse" placeholder="Price" value="<?php if(isset($_POST['prixCaisse'])) echo $_POST['prixCaisse']; ?>" >
          </div>
        </div>
        <button type="submit" class="btn btn-secondary btn-lg btn-block" value="submit">Submit</button>
      </div>
    </form>
    <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js" integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1" crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js" integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous"></script>
<?php print_r($_POST) ?>
  </body>

</html>
