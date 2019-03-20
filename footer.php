<footer>
  <div class="container-fluid bg-dark text-light">
    <div class="row justify-content-center back-footer">
      <div class="col-lg-6 col-12">
        <div class="row">
          <div class="col-3 text-center">
            <p class="font-weight-bold">REJOIGNER NOUS SUR:</p>
          </div>
          <div class="col-1 offset-1 text-center">
            <i class="fab fa-facebook-f fa-2x" style="color: white;"></i>
          </div>
          <div class="col-1 text-center">
            <i class="fab fa-twitter fa-2x" style="color: white;"></i>
          </div>
          <div class="col-1 text-center">
            <i class="fab fa-instagram fa-2x" style="color: white;"></i>
          </div>
        </div>
      </div>
      <div class="col-lg-6 col-12">
        <div class="row">
          <div class="col-3 text-center">
            <p class="font-weight-bold">APPLI MOBILE:</p>
          </div>
          <div class="col-1 offset-1 text-center">
            <i class="fab fa-apple fa-2x" style="color: white;"></i>
          </div>
          <div class="col-1 text-center">
            <i class="fab fa-android fa-2x" style="color: white;"></i>
          </div>
        </div>
      </div>
    </div>
    <div class="row">
      <div class="col-lg-3 text-center"><br>
        <img class="img-fluid logofooter" alt="Responsive image" src="asset/img/noel/iconeshop.png">
      </div>
      <div class="col-lg-4">
        <div class="form-group">
          <div class="row">
            <div class="col-12"><br>
              <p>1O euros Offert pour votre premier achat profiter en !</p>
            </div>
            <div class="col-lg-6">
              <label for="exampleFormControlInput1">Email address</label>
              <input type="email" class="form-control" id="exampleFormControlInput1" placeholder="name@example.com">
              <div class="form-group">
                <label for="exampleFormControlTextarea1">Your message</label>
                <textarea class="form-control" id="exampleFormControlTextarea1" rows="3"></textarea><br>
                <button class="btn btn-primary" type="submit">Submit</button>
              </div>
            </div>
          </div>
        </div>
      </div>
      <div class="col-lg-3"><br>
        <h2>Wild bazar</h2>
        <p>1 Rue de la paix<br>75 001 CEDEX<br>SAV 56 78<br>Recrutement<br>A propos de WildBeer</p>
      </div>
      <div class="col-lg-2"><br>
        <h2>Nos partenaires</h2><br>
        <a href="https://urlz.fr/96tG">
          <p>Wild Code School</p>
        </a>
        <a href="https://urlz.fr/96tG">
          <p>Bière académie</p>
        </a>
        <a href="https://urlz.fr/96tG">
          <p>Maison de l'Alcool</p>
        </a>
      </div>
    </div>
    <hr style="background-color: white;">
    <div class="row mx-auto">
      <div class="col-lg-3 col-12">
        <i class="fab fa-fedex fa-2x" style="color: white;"></i>
        <h4 class="font-weight-bold text-warning policefooter">Expedition rapide</h4>
        <p>Emballage anti-casse envoyés sous 24h</p>
      </div>
      <div class="col-lg-3 col-12">
        <i class="fab fa-tripadvisor fa-2x" style="color: white;"></i>
        <h4 class="font-weight-bold text-warning policefooter">4,8/5</h4>
        <p>Nos client nous adorent et nous leur rendons bien</p>
      </div>
      <div class="col-lg-3 col-12">
        <i class="fab fa-untappd fa-2x" style="color: white;"></i>
        <h4 class="font-weight-bold text-warning policefooter">Logo dans le thème</h4>
        <p>...</p>
      </div>
      <div class="col-lg-3 col-12">
        <i class="fab fa-dev fa-2x" style="color: white;"></i>
        <h4 class="font-weight-bold text-warning policefooter">Tu devras</h4>
        <p>N'est ce pas ?</p>
      </div>
    </div>
    <div class="row justify-content-center iconefooter">
      <div class="col-lg-2 col-4">
        <i class="fab fa-cc-mastercard fa-2x" style="color: white;"></i>
      </div>
      <div class="col-lg-2 col-4">
        <i class="fab fa-paypal fa-2x" style="color: white;"></i>
      </div>
      <div class="col-lg-2 col-4">
        <i class="fab fa-cc-visa fa-2x" style="color: white;"></i>
      </div>
    </div>
    <div class="row justify-content-center">
      <div class="col-12">
        <p class="taillepolicefooter  ">(L'ABUS D'ALCOOL EST DANGEROUS POUR LA SANTÉ.)</p>
      </div>
    </div>
  </div>
  <button onclick="topFunction()" id="myBtn" title="Go to top">Top</button>
</footer>
<!-- Optional JavaScript -->
<!-- jQuery first, then Popper.js, then Bootstrap JS -->
<?php
if ($offline==false){ //download stylesheet frameworks online  ?>
<script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js" integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1" crossorigin="anonymous"></script>
<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js" integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous"></script>
<?php }else{        // use vendor local repo for stylesheet frameworks?>
<script src="<?=$rootPath."vendor/jquery/jquery-3.3.1.min.js"?>"></script>

<script src="<?=$rootPath."vendor/popper/popper.min.js"?>"></script>
<script src="<?=$rootPath."vendor/bootstrap-4/js/bootstrap.min.js"?>"></script>
<?php
} ?>
<script src="<?=$rootPath."script.js"?>"></script>
</body>
</html>