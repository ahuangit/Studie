<?php include 'php/controller-comments.php'; ?>

<?php include 'header.php'; ?>

<a href="index.php" class="btn btn-success">
	<span class="glyphicon glyphicon-chevron-left"></span>
	Retour à l'accueil
</a>



<?php /**

	LIVRE D'OR

*/ ?>


<table>
	<tr>
		<th COLSPAN="2">LIVRE D'OR</th>
	</tr>
	<tr class="titre">
		<th>NOM</th>
		<th>COMMENTAIRE</th>
	</tr>

<?php foreach ($livre as $l): ?>

			<tr>
				<th class="nom"		><?php echo $l['name']; ?></th>
				<th class="comment"	><?php echo $l['text']; ?></th>	
			</tr>

		<?php endforeach ?>
	
</table>	



<?php if (isset($_GET['error'])): ?>

<?php endif ?>


<?php /**

	COMMENTAIRE

*/ ?>

<?php if (is_connected()): ?>
<div class="jumbotron new_comment">
	<div class="container">


	<form action="commentscheck.php" method="post">
		<div class="form-group">
			<label>Votre nom</label>
			<input type="text" class="form-control" name="name" value="<?php echo get_connected_user()['name']; ?>" readonly>
		</div>

		<div class="form-group">
			<label>Votre commentaire</label>

			<input type="text" class="form-control" name="comment"
			placeholder="<?php if (isset($_GET['error'])) : ?>Oups ! <?php echo $_GET['error']; endif?>"	>

		</div>
		
		<input type="submit" class="form-control btn-primary" value="Valider">
	</form>

	</div>
</div>



<?php /**

	PAGINATION

*/ ?>


<ul class="pagination">

	<?php foreach ($paginations as $p): ?>

		<li>
			<a href="<?php echo $p['uri']; ?>">
				<?php echo $p['page_number']; ?>
			</a>
		</li>

	<?php endforeach ?>

</ul>












<?php else : ?>
<p> VOUS DEVEZ ÊTRE IDENTIFIER POUR COMMENTER.</p>

<?php endif; ?>

