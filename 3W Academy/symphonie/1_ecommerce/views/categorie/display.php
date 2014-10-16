    <?php include VIEWS_DIR . '_commun/header.php';?>
    <?php include VIEWS_DIR . '_commun/sidebar.php';?>
        
    <div class="container">


        <div class="jumbotron hero-spacer perso">
            <h1><?php echo $categorie -> getTitre() ?></h1>
            <p><?php echo $categorie -> getDescription() ?>
            </p>
        </div>

        <hr>

        <div class="row">
            <div class="col-lg-12">
                <h3>Latest Features</h3>
            </div>
        </div>
        <!-- /.row -->

        <div class="row text-center">

            <?php foreach ($produitcate as $p) : ?>

                <div class="col-lg-3 col-md-6 hero-feature">
                    <div class="thumbnail">
                        <img src="http://placehold.it/800x500" alt="">
                        <div class="caption">

                        
                            <h3><?php echo $p  -> getTitre() ?></h3>
                            <p> <?php echo $p  -> getDescription() ?></p>
                            <p><a href="#" class="btn btn-primary">Buy Now!</a>  
                                
                            <a href="produits.php?pid=<?php echo $p -> getId() ;?>" 
                                class="btn btn-default">More Info</a>
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