<?php include VIEWS_DIR . '_common/header.php' ?>
 
	 <div class="jumbotron">
		<h1>Création d'un produit</h1>
			
<form enctype="multipart/form-data" id="addproduit" class="form-signin" method="post" action="new_add_produit.php">

    <h2 class="form-signin-heading">Création d'un produit</h2>

    <input name="titre" type="text" class="form-control" placeholder="Titre">

	<input name="description"type="text" class="form-control" placeholder="Description">

	<input name="prix"type="text" class="form-control" placeholder="Prix">

	<input name="image"type="file" class="form-control" accept="image/*">

	
    
    <br><button class="btn btn-lg btn-primary btn-block" type="submit">Ajouter un commentaire</button>
</form>


	</div>

<?php include VIEWS_DIR . '_common/footer.php' ?>




