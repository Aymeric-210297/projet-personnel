<!DOCTYPE html>
<html lang="fr">

<head>
	<meta charset="UTF-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<link rel="stylesheet" href="CSS/index.css">
	<link rel="stylesheet" href="CSS/animation.css">
	<link rel="stylesheet" href="CSS/formulaire.css">
	<title>Inscription</title>
</head>

<body>
	<header>
		<ul class="flex space-evenly">
			<li class="menu"><a href="index.php">Home</a></li>
			<li class="menu"><a href="profil.php">Page profil</a></li>
			<li class="menu"><a href="connexion.php">Connexion</a></li>
			<li class="menu"><a href="inscription.php">Inscription</a></li>
			<li class="imageMenu"><a href="index.php">
					<ion-icon size="large" name="home-outline"></ion-icon>
				</a></li>
			<li class="imageMenu"><a href="profil.php">
					<ion-icon size="large" name="person-outline"></ion-icon>
				</a></li>
			<li class="imageMenu"><a href="connexion.php">
					<ion-icon size="large" name="log-in-outline"></ion-icon>
				</a></li>
			<li class="imageMenu"><a href="inscription.php">
					<ion-icon size="large" name="person-add-outline"></ion-icon>
				</a></li>
		</ul>
	</header>
	<main>
		<h1>Inscription</h1>
		<form action="inscription.php">
			<fieldset>
				<legend>Vos informations</legend>
				<div>
					<label for="username">Nom d'utilisateur</label>
					<input type="text" name="username" id="username">
				</div>
				<div>
					<label for="email">Adresse email</label>
					<input type="email" name="email" id="email">
				</div>
				<div>
					<label for="password">Mot de passe</label>
					<input type="password" name="password" id="password">
				</div>
				<div>
					<label for="password">Mot de passe (Confirmation)</label>
					<input type="password" name="password" id="password">
				</div>
				<button type="submit">
					S'inscrire
				</button>
			</fieldset>
		</form>
	</main>
	<footer>
		<div class="flex space-between align-item-center">
			<p><a href="https://www.christinesurges.be/" target="_blank" title="Aller à l'agence">Voir l'agence</a></p>
			<div>
				<img class="imageIcon" src="Images/icon1.jpg" alt="image twitter">
				<img class="imageIcon" src="Images/icon2.jpg" alt="image facebook">
				<img class="imageIcon" src="Images/icon3.jpg" alt="image google">
			</div>
		</div>
	</footer>
</body>
<script type="module" src="https://unpkg.com/ionicons@5.5.2/dist/ionicons/ionicons.esm.js"></script>
<script nomodule src="https://unpkg.com/ionicons@5.5.2/dist/ionicons/ionicons.js"></script>

</html>
