<!doctype html>
<html lang="fr">
	<head>
		<!-- Required meta tags -->
		<meta charset="utf-8">
		<meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
		<!-- Bootstrap CSS -->
		<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T"
		crossorigin="anonymous">
		<link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.7.2/css/all.css" integrity="sha384-fnmOCqbTlWIlj8LyTjo7mOUStjsKC4pOpQbqyi7RrhN7udi9RwhKkMHpvLbHG9Sr"
		crossorigin="anonymous">
		<link href="https://stackpath.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css" rel="stylesheet" integrity="sha384-wvfXpqpZZVQGK6TAh5PVlGOfQNHSoD2xbE+QkPxCAFlNEevoEH3Sl0sibVcOQVnN"
		crossorigin="anonymous">
		<link href="https://fonts.googleapis.com/css?family=Roboto" rel="stylesheet">
		<link href="https://fonts.googleapis.com/css?family=Abril+Fatface" rel="stylesheet">
		<link rel="stylesheet" href="../../style.css">
		<title>Wild Beer Asia</title>
	</head>

	<body class="bg-secondary">
		<header>
<?php include('../../header_cat.php') ?>
		</header>
		<div class="container-fluid k-cat">
			<div class="container"><br>

				<section id="descripCat" class="text-center">
					<h2 class="text-warning text-center khtext2">
						<!--LE NOM DE VOTRE CATEGORIE-->
						Les Bières d'asie du Sud-Est
					</h2>
					<br>
					<p class="text-warning khtext">
						<!--LE TEXTE DESCRIPTIF DE VOTRE CATEGORIE-->
						L’Asie représente ainsi 33,6% de la consommation de bière mondiale, classant le continent devant l’Europe (27, 7%)
						et l’Amérique latine (16,2%). <br>
						Ces bières sont bien sûr à tester (sans modération) grâce à notre site sans besoin de prendre l'avion à l'autre
						bout du monde.<br>
						Préparez vous à déguster des blondes légères, rafraîchissantes et bon marché.
					</p>
				</section>
				<section>
			</div>
			<div class="container">

<?php include ('asiaCaroussel.php') ?>

				<section id="nosProduits">
					<h3 class="text-center text-warning khtext2">
						Notre Sélection :
						<!--VOTRE CATEGORIE-->
					</h3>
					<br/>
					<div class="container">
						<div class="row d-flex justify-content-around">
<?php
	include ('asiaData.php');
	foreach ($beerAsia as $key => $card) {

	include ('asiaCard.php');
	include ('asiaModal.php');

}
?>
						</div>
					</div>
				</section>
			</div>


			<!--FOOTER Noel -->
			<footer class="m-0">

<?php include('../../footer_cat.php') ?>

			</footer>
			<!-- Optional JavaScript -->
			<!-- jQuery first, then Popper.js, then Bootstrap JS -->
			<script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo"
			crossorigin="anonymous"></script>
			<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js" integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1"
			crossorigin="anonymous"></script>
			<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js" integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM"
			crossorigin="anonymous"></script>
			<script src="../../script.js"></script>


	</body>
</html>
