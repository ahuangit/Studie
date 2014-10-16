
<?php 
include 'header.php'; 
include 'php/c_index.php' ?>


<h1>DERNIER COMMENTAIRE</h1>



<div class="center">

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

<a href="index.php">ACCUEIL</a>