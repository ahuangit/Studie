<?php


$produitManager = New ProduitManager($db);
$allcategories  = $produitManager -> getAllCategories(); ?>

            <div class="col-md-3">
                <p class="lead">Shop Name</p>
                <div class="list-group">


<!--
                    <?php foreach ($categorie as $c) :?>

                    <a href="produits.php?cid= <?php echo $c -> getCid(); ?>" class="list-group-item">Categories</a>
                    </li>

                    <?php endforeach ?>
-->
                <?php foreach ($allcategories as $all) :?>

                    <a href="categorie.php?cid=<?php echo $all -> getCategories_id() ?>" 
                    class="list-group-item"><?php echo $all -> getTitre() ?></a>
                    

                <?php endforeach; ?>
                </div>
            </div>