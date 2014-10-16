<?php include VIEWS_DIR . '_common/header.php' ?>

    <div class="container">

        <div class="row">

            <?php include VIEWS_DIR . '_common/sidebar.php' ?>

            <div class="col-md-9">
                <div class="thumbnail">
                    <img class="img-responsive" src="upload/<?php echo $produit -> getImage();?>" alt="">
                    <div class="caption-full">
                        <h4 class="pull-right"><?php echo $produit->getPrix(); ?> €</h4>
                        <h4><a href="#"><?php echo $produit->getTitre(); ?></a>
                        </h4>
                        <p><?php echo $produit->getDescription(); ?></p>
                    </div>
                    <div class="ratings">
                        <p class="pull-right"><?php echo count($commentaires); ?> reviews</p>
                        <p>
                            <?php
                            for ($i=1; $i < 6; $i++) {
                                if ($i > $moyenne)
                                    echo '<span class="glyphicon glyphicon-star-empty"></span>';
                                else
                                    echo '<span class="glyphicon glyphicon-star"></span>';
                            }
                            ?>
                            <?php echo $moyenne; ?> stars
                        </p>
                    </div>
                    <?php if ($categories) : ?>
                    <div class="caption-full">
                        Catégories : 
                        <?php
                        $nbCat = count($categories);
                        foreach ($categories as $key => $cat) {
                            echo '<a href="categorie.php?idc='.$cat->getId().'">'.$cat->getTitre().'</a>';
                            if ($key < $nbCat - 1)
                            {
                                echo ', ';
                            }
                        }
                        ?>
                    <br>
                    <div class="text-right">
                        <button class="btn btn-primary">Ajouter au panier</button>
                    </div>
                    </div>
                    <?php endif;  ?>

                </div>

                <div class="well">

                    <div class="text-right">
                        <a id="btnleavemessage" class="btn btn-success">Leave a Review</a>
                    </div>

                    <hr>

                    <form id="addcommentaire" class="form-signin" method="post" action="add_commentaire.php">
                        <h2 class="form-signin-heading">Ajouter un commentaire</h2>
                        <input name="auteur" type="text" class="form-control" placeholder="auteur">
                        <textarea name="contenu" class="form-control" placeholder="votre commentaire"></textarea>
                        <div class="raty"></div>
                        <input name="id_produit" type="hidden" value="<?php echo $produit->getId(); ?>">
                        <br><button class="btn btn-lg btn-primary btn-block" type="submit">Ajouter un commentaire</button>
                    </form>

                    <hr>

                    <?php foreach ($commentaires as $com) : ?>
                    <div class="row">
                        <div class="col-md-12">
                            <?php
                            for ($i=1; $i < 6; $i++) {
                                if ($i > $com->getNote())
                                    echo '<span class="glyphicon glyphicon-star-empty"></span>';
                                else
                                    echo '<span class="glyphicon glyphicon-star"></span>';
                            }
                            ?>
                            <?php echo $com->getAuteur() ?>
                            <span class="pull-right"><?php echo $com->getDatecommentaire() ?></span>
                            <p><?php echo $com->getContenu() ?></p>
                        </div>
                    </div>

                    <hr>

                    <?php endforeach; ?>

                </div>

                <div class="col-md-12">
                    <div class="row">
                    <?php foreach ($crossSelling as $produit) : ?>
                        <div class="col-sm-4 col-lg-4 col-md-4">
                            <div class="thumbnail">
                                <img src="http://placehold.it/320x150" alt="">
                                <div class="caption">
                                    <h4 class="pull-right"><?php echo $produit->getPrix(); ?> €</h4>
                                    <h4><a href="produit.php?idp=<?php echo $produit->getId(); ?>"><?php echo $produit->getTitre(); ?></a>
                                    </h4>
                                    <p><?php echo $produit->getShortDescription(); ?></p>
                                </div>
                            </div>
                        </div>
                    <?php endforeach; ?>
                    </div>
                </div>

            </div>

        </div>

    </div>
    <!-- /.container -->

<?php include VIEWS_DIR . '_common/footer.php' ?>