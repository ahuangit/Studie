<?php

include 'header.php'; 
include 'php/c_index.php'; ?>


<div class="center">

	<div class="create">
		<form action="a_create.php" method="post">
		
			<label>Nouveau Compte</label> <br>
			<input type="text" name="name"> <br>
			<input type="submit" value="Login">

		</form>
	</div>


	<div class="login">
		<form action="a_log.php" method="post">

			<label>Connectez-vous : </label> <br>
			<input type="text" name="login"> <br>
			<input type="submit" value="Login">

		</form>
	</div>

	<div class="new">
		<form action="a_new_comment.php" method="post">

			<label>Nom : </label>
			<input type = "text" name="name"> <br>

			<label>Commentaire : </label>
			<input type = "text" name="comment"> <br>

			<input type = "submit" value="Valider"> <br>

		</form>
	</div>










<?php /**

	BOUTON POUR OUVRIR LA LISTE DES COMMENTAIRES

*/ ?>

	<a href="index.html">LES DERNIERS COMMENTAIRES</a>
	

<?php  /**

LE DESSUS : EXPERIENCE

*/ ?>


	<div class="comments">
		<table>
			<tr>
				<td>Nom</td>
				<td>Commentaire</td>
			</tr>

	<?php foreach ($comment as $c): ?>

			<tr>
				<td> <?php echo $c['name']; ?> </td>
				<td> <?php echo $c['comment']; ?></td>
			</tr>

	<?php endforeach; ?>

		</table>
	</div>



</div>