<?php include 'php/controller-access.php'; ?>

<?php include 'header.html'; ?>



<div class="jumbotron">
	<div class="container">

		<a href="index.php" class="btn btn-success">
			<span class="glyphicon glyphicon-chevron-left"></span>
			Retour à l'accueil
		</a>

		<h1>
			<span class="glyphicon glyphicon-lock"></span>
			Mot de passe
		</h1>

<?php /**
	============================================================
	Affichage du formulaire du mot de passe
	============================================================
*/ ?>
		<form action="php/auth.php" method="POST">

			<div class="form-group">
				<input type="text" class="form-control" name="email" placeholder="Petit indice : troiswa ...">
				<input type="password" class="form-control" name="password" placeholder="Petit indice : troiswa ...">
			</div>

			<input type="submit" class="form-control btn-primary" value="Login">

		</form>

	</div>
</div>



<?php include 'footer.html'; ?>
