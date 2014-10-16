<?php include 'php/controller-show.php'; ?>

<?php include 'header.php'; ?>



<div class="jumbotron">
	<div class="container">

<?php /**
	============================================================
	Affichage des info du lego
	============================================================
*/ ?>

		<div style="background: url(img/legos/<?php echo $lego['lego_id']; ?>.png) center center; height: 400px; width: 40%; margin: 5px; float: right;"></div>

		<a href="index.php?cid=<?php echo $lego['category_id']; ?>" class="btn btn-success">
			<span class="glyphicon glyphicon-chevron-left"></span>
			Retour à la catégorie <?php echo $lego['category']; ?>
		</a>

		<h1>
			<?php echo $lego['name']; ?> <br>
			<small>ref #<?php echo $lego['lego_id']; ?></small>
		</h1>
		<p>
			<?php echo $lego['total_price']; ?> € <br>
			<i>frais de port inclus!</i>
		</p>

<?php if (is_connected()): ?>
		<a href="edit.php?lid=<?php echo $lego['lego_id']; ?>" class="btn btn-primary">
			<span class="glyphicon glyphicon-edit"></span>
			Editer
		</a>
<?php endif; ?>


<?php /**
	============================================================
	COMMENTAIRE
	============================================================
*/ ?>



<?php if (is_connected()): ?>
<div class="jumbotron">
	<div class="container">


	<form action="show_comments.php" method="post">
		<div class="form-group">
			<label>Votre nom</label>
			<input type="text" class="form-control" name="name" value="<?php echo get_connected_user()['name']; ?>" readonly>
		</div>

		<div class="form-group">
			<label>Votre commentaire</label>

			<input type="text" class="form-control" name="comment"
			placeholder="<?php if (isset($_GET['error'])) : ?>Oups ! <?php echo $_GET['error']; endif?>"	>


		</div>
		
		<input type="hidden" name="lid" value="<?php echo $data['lego_id'] ?>">


		<input type="submit" class="form-control btn-primary" value="Valider">
	</form>

	</div>
</div>


	
	</div>
</div>


<?php else : ?>
<p> VOUS DEVEZ ÊTRE IDENTIFIER POUR COMMENTER.</p>

<?php endif; ?>






<?php /**

	LISTE COMMENTAIRE

*/ ?>

<table>

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









<?php if (isset($_GET['error'])): ?>

<?php endif ?>




<?php include 'footer.html'; ?>
