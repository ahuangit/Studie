<?php include VIEWS_DIR . '_common/header.php' ?>

    <div class="container">

        <div class="jumbotron hero-spacer">
            <h1><?php echo $categorie->getTitre(); ?></h1>
            <p><?php echo $categorie->getDescription(); ?></p>
        </div>

        <hr>

        <div class="row">
            <div class="col-lg-12">
                <h3>Latest Features</h3>
            </div>
        </div>
        <!-- /.row -->

        <div class="row text-center">
            <?php foreach ($produits as $produit) : ?>
                <div class="col-lg-3 col-md-6 hero-feature">
                    <div class="thumbnail">
                        <img src="upload/<?php echo $produit -> getImage();?>" alt="">
                        <div class="caption">
                            <h3><?php echo $produit->getTitre(); ?></h3>
                            <p><?php echo $produit->getShortDescription(); ?></p>
                            <p><a href="#" class="btn btn-primary">Buy Now!</a>  <a href="produit.php?idp=<?php echo $produit->getId(); ?>" class="btn btn-default">More Info</a>
                            </p>
                        </div>
                    </div>
                </div>
            <?php endforeach; ?>
            
        </div>
    </div>

    <?php include VIEWS_DIR . '_common/footer.php' ?>