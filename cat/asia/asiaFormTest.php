<?php

$nomErr = $prixErr = $descriptionErr = $imgErr = $paysErr = $pourcentErr = $prixCaisseErr = "";
$nom = $prix = $description = $img = $pays = $pourcent = $prixCaisse = "";

// Verifs //
if ($_SERVER["REQUEST_METHOD"] == "POST") {

  // VERIF NOM //
  if (empty($_POST["nom"])) {
    $nomErr = "Beer Name is required";
  } else {
    $nom = test_input($_POST["name"]);
    if (!preg_match("/^[a-zA-Z -]*$/",$nom)) {
    $nomErr = "Only letters and white space allowed";
    }
  }

  // VERIF PRIX //
  if (empty($_POST["prix"])) {
    $prixErr = "Price is required";
  } else {
    $prix = test_input($_POST["prix"]);
    if (!preg_match("/^[0-9.]*$/",$prix)) {
    $prixErr = "Only numbers and . allowed";
    }
  }

  // VERIF DESCRIPTION //
  if (empty($_POST["description"])) {
    $descriptionErr = "A description is required";
  } else {
    $description = test_input($_POST["description"]);
  }

  // VERIF IMAGE //
  if (empty($_POST["img"])) {
    $imgErr = "Image of the beer is required";
  } else {
    $img = test_input($_POST["img"]);
  }

  // VERIF PAYS //
  if (empty($_POST["pays"])) {
    $paysErr = "Country is required";
  } else {
    $pays = test_input($_POST["pays"]);
    if (!preg_match("/^[a-zA-Z -]*$/",$pays)) {
    $paysErr = "Only letters and white space allowed";
    }
  }

  //VERIF POURCENTAGE //
  if (empty($_POST["pourcent"])) {
    $pourcentErr = "% is required";
  } else {
    $pourcent = test_input($_POST["pourcent"]);
    if (!preg_match("/^[0-9.]*$/",$pourcent)) {
    $pourcentErr = "Only numbers and . allowed";
    }
  }

  //VERIF PRIX PACK //
  if (empty($_POST["prixCaisse"])) {
    $prixCaisseErr = "% is required";
  } else {
    $prixCaisse = test_input($_POST["prixCaisse"]);
    if (!preg_match("/^[0-9.]*$/",$prixCaisse)) {
    $prixCaisseErr = "Only numbers and . allowed";
    }
  }

  // SI PAS D'ERREUR, REDIRECTION VERS PAGE CATEGORIE //
  if (empty($nomErr) && empty($prixErr) && empty($descriptionErr) && empty($imgErr) && empty($paysErr) && empty($pourcentErr) && empty($prixCaisseErr)) {
    header("Location: asia.php");
    exit();
  }
}
function test_input($data) {
  $data = trim($data);
  $data = stripslashes($data);
  $data = htmlspecialchars($data);
  return $data;
}

 ?>
