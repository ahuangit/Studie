
    <?php include VIEWS_DIR . '_common/header.php' ?>

    <div class="container">

        <div class="row">

            <?php include VIEWS_DIR . '_common/sidebar.php' ?>

            <div class="col-md-9">

                <div class="row carousel-holder">

                    <div class="col-md-12">
                        <div id="carousel-example-generic" class="carousel slide" data-ride="carousel">
                            <ol class="carousel-indicators">
                                <li data-target="#carousel-example-generic" data-slide-to="0" class="active"></li>
                                <li data-target="#carousel-example-generic" data-slide-to="1"></li>
                                <li data-target="#carousel-example-generic" data-slide-to="2"></li>
                            </ol>
                            <div class="carousel-inner">
                                <div class="item active">
                                    <img class="slide-image" src="http://placehold.it/800x300" alt="">
                                </div>
                                <div class="item">
                                    <img class="slide-image" src="http://placehold.it/800x300" alt="">
                                </div>
                                <div class="item">
                                    <img class="slide-image" src="http://placehold.it/800x300" alt="">
                                </div>
                            </div>
                            <a class="left carousel-control" href="#carousel-example-generic" data-slide="prev">
                                <span class="glyphicon glyphicon-chevron-left"></span>
                            </a>
                            <a class="right carousel-control" href="#carousel-example-generic" data-slide="next">
                                <span class="glyphicon glyphicon-chevron-right"></span>
                            </a>
                        </div>
                    </div>

                </div>

                <div class="row">
                    <?php foreach ($produits as $produit) : ?>

                    <div class="col-sm-4 col-lg-4 col-md-4">
                        <div class="thumbnail">
                            <img src="upload/<?php echo $produit -> getImage();?>" alt="">
                            <div class="caption">
                                <h4 class="pull-right"><?php echo $produit->getPrix(); ?> €</h4>
                                <h4><a href="produit.php?idp=<?php echo $produit->getId(); ?>"><?php echo $produit->getTitre(); ?></a>
                                </h4>
                                <p><?php echo $produit->getShortDescription(); ?></p>
                            </div>
                            <div class="ratings">
                            <?php if (isset($moy[$produit->getId()])): ?>
                                <p class="pull-right"><?php echo $moy[$produit->getId()]['nb'];  ?> reviews</p>
                                <p>
                                    <?php
                                    for ($i=1; $i < 6; $i++) {
                                        if ($i > $moy[$produit->getId()]['moyenne'])
                                            echo '<span class="glyphicon glyphicon-star-empty"></span>';
                                        else
                                            echo '<span class="glyphicon glyphicon-star"></span>';
                                    }
                                    ?>
                                </p>
                            <?php else: ?>
                                <p>Aucun commentaire</p>
                            <?php endif; ?>
                            </div>
                        </div>
                    </div>
                    <?php endforeach; ?>

                </div>

            </div>

        </div>

    </div>
    <!-- /.container -->


<?php include VIEWS_DIR . '_common/footer.php' ?>