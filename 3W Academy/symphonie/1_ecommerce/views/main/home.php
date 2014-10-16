
<head>
 
    <title>Shop Homepage Template for Bootstrap</title>

</head>

<body>

    <?php include VIEWS_DIR . '_commun/header.php';?>
    <?php include VIEWS_DIR . '_commun/sidebar.php';?>


    <div class="container">

        <div class="row">


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

                    <?php
                    /**
                    FOREACH PAR FICHE DE PRODUIT
                    */
                    foreach ($produits as $produit) : ?>                   

                        <div class="col-sm-4 col-lg-4 col-md-4">
                            <div class="thumbnail">
                                <img src="http://placehold.it/320x150" alt="">
                                <div class="caption">
                                    <h4 class="pull-right"><?php echo $produit -> getPrice(); ?></h4>
                                    <h4><a href="produits.php?pid=<?php echo $produit -> getId(); ?>"><?php echo $produit -> getTitre(); ?></a>
                                    </h4>
                                    <p> <?php echo $produit -> getDescription(); ?> </p>
                                </div>


                                <div class="ratings">

                                    <p class="pull-right">


                                        <?php
                                        if(isset($com[$produit -> getId()]) )
                                        {
                                            echo $com[$produit -> getId()];
                                        }
                                    

                                        
                                        if(!isset($com[$produit -> getId()]) )
                                        {
                                            echo '<div class="glyphicon glyphicon-star-empty" ></div>'.
                                                 '<div class="glyphicon glyphicon-star-empty" ></div>'.
                                                 '<div class="glyphicon glyphicon-star-empty" ></div>'.
                                                 '<div class="glyphicon glyphicon-star-empty" ></div>'.
                                                 '<div class="glyphicon glyphicon-star-empty" ></div>'.
                                                 '<span class="pull-right ratings">0 commentaire</span>';
                                        }
                                        else
                                        {
                                             if($com[$produit -> getId()] == "1")
                                            {
                                                echo ' commentaire';
                                            }
                                            else
                                            {
                                                echo ' commentaires';
                                            }
                                        }
                                        
                                        ?>

                                    </p>
                                    


                                    <?php
                                    if(isset($moy[$produit -> getId()]) ): ?>

                                        <div class="ratings">

                                            <?php 
                                            for($i=1 ; $i < 6 ; $i++)
                                            {

                                                if ($i > $moy[$produit -> getId()] )
                                                    echo '<span class="glyphicon glyphicon-star-empty"></span>';

                                                else
                                                    echo '<span class="glyphicon glyphicon-star"></span>';
                                            
                                            } ?>

                                        </div>

                                    <?php endif; ?>
                                                                           
                                </div>

                            </div>
                        </div>

                    <?php endforeach; ?>
                    <?/**
                    ENDFOREACH PAR FICHE DE PRODUIT
                    */?>



                    <div class="col-sm-4 col-lg-4 col-md-4">
                        <h4><a href="#">Like this template?</a>
                        </h4>
                        <p>If you like this template, then check out <a target="_blank" href="http://maxoffsky.com/code-blog/laravel-shop-tutorial-1-building-a-review-system/">this tutorial</a> on how to build a working review system for your online store!</p>
                        <a class="btn btn-primary" target="_blank" href="http://maxoffsky.com/code-blog/laravel-shop-tutorial-1-building-a-review-system/">View Tutorial</a>
                    </div>

                </div>

            </div>

        </div>

    </div>
    <!-- /.container -->

    <div class="container">


    <?php include '../views/_commun/footer.php';?>





</body>

</html>
