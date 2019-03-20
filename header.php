<?php 
  require_once('config/config.php');
  $_SERVER['REQUEST_URI']=="/index.php"?$rootPath="":$rootPath="../";
  $_SERVER['REQUEST_URI']=="/index.php"?$catPath="cat/":$catPath="";
?>

<!doctype html>
<html lang="fr">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <?php
    
    if ($offline==false){ //download stylesheet frameworks online  ?>
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.7.2/css/all.css" integrity="sha384-fnmOCqbTlWIlj8LyTjo7mOUStjsKC4pOpQbqyi7RrhN7udi9RwhKkMHpvLbHG9Sr" crossorigin="anonymous">
    <link href="https://fonts.googleapis.com/css?family=Roboto" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css?family=Abril+Fatface" rel="stylesheet">
    <?php }else{        // use vendor local repo for stylesheet frameworks?>
    <link rel="stylesheet" href="<?=$rootPath."vendor/bootstrap-4/css/bootstrap.min.css"?>" >
    <link rel="stylesheet" href="<?=$rootPath."vendor/fontawesome/css/all.css"?>">
    <?php
    } ?>
    
    <link rel="stylesheet" href="<?=$rootPath."style.css"?>">
    <title>Wild Beer!</title>
  </head>
  <body>
    <header>
      <div class="container-fluid p-0 ">
        <nav class="navbar navbar-expand-lg navbar-dark bg-dark">
          <a href="<?=$rootPath."index.php"?>" class="navbar-brand text-light ">
            <img width="30" height="30" class="d-inline-block align-top" src="<?=$rootPath."asset/img/thomas/iconeshop.png"?>" alt="logo">
            Wild bazard
          </a>
          <button class="navbar-toggler text-light" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
          <span class="fas fa-bars fa-1x"></span>
          </button>
          <div class="collapse navbar-collapse justify-content-end" id="navbarSupportedContent">
            <ul class="navbar-nav">
              <li class="nav-item"><a class="nav-link" href="<?=$catPath."belgique.php"?>">Belgique</a></li>
              <li class="nav-item nav-link d-none d-md-block">|</li>
              <li class="nav-item"><a class="nav-link" href="<?=$catPath."germany.php"?>">Allemagne</a></li>
              <li class="nav-item nav-link d-none d-md-block">|</li>
              <li class="nav-item"><a class="nav-link" href="<?=$catPath."south_america.php"?>">Amérique du sud</a></li>
              <li class="nav-item nav-link d-none d-md-block">|</li>
              <li class="nav-item"><a class="nav-link" href="<?=$catPath."asia.php"?>">Asie</a></li>
              <li class="nav-item nav-link d-none d-md-block">|</li>
              <li class="nav-item"><a class="nav-link" href="<?=$catPath."france.php"?>">France</a></li>
              <li class="nav-item nav-link d-none d-md-block">|</li>
              <li class="nav-item"><a class="nav-link" href="<?=$catPath."uk.php"?>">Angleterre</a></li>
            </ul>
          </div>
        </nav>
      </div>
    </header>


