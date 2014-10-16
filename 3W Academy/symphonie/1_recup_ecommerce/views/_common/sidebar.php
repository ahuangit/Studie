<?php
	$categorieManager = new CategorieManager($db);
	$categoriessidebar = $categorieManager->getAllCategorie();
?>
<?php if ($categoriessidebar) : ?>
<div class="col-md-3">
    <p class="lead">Shop Name</p>
    <div class="list-group">
    	<?php foreach($categoriessidebar as $cat) : ?>
	        <a href="categorie.php?idc=<?php echo $cat->getId(); ?>" class="list-group-item<?php echo (isset($tabCat) && in_array($cat->getId(), $tabCat) ? ' active' : '')  ?>"><?php echo $cat->getTitre(); ?></a>
   		<?php endforeach; ?>
    </div>
</div>
<?php endif; ?>