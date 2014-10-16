    <?php include VIEWS_DIR . '_commun/header.php';?>

    <div class="container">


        <div class="jumbotron hero-spacer">
            <h1>Tout les catégories</h1>
        </div>

        <hr>

        <div class="row">
            <div class="col-lg-12">
                <h3>Latest Features</h3>
            </div>
        </div>
        <!-- /.row -->

        <div class="row text-center">

            <?php foreach ($allcategories as $all) :?>

                <div class="col-lg-3 col-md-6 hero-feature">
                    <div class="thumbnail">
                        <div class="caption">

                        
                            <h3><?php echo $all -> getTitre() . 
                                ' ( ' .
                                $total[$all -> getCategories_id()] .
                                ' produits )'

                                ?></h3>

                            <p><?php echo $all -> getDescription() ?></p>
                            
                                
                            <a href="categorie.php?cid=<?php echo $all -> getCategories_id() ?>" 
                                class="btn btn-default">More Produit</a>
                            </p>
                        </div>
                    </div>
                </div>

            <?php endforeach; ?>

    

        </div>
        <!-- /.row -->



    </div>
    <!-- /.container -->

    <?php include '../views/_commun/footer.php';?>