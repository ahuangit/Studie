
<head>
    <title>Shop Item Template for Bootstrap</title>
</head>

<body>

    <?php include VIEWS_DIR . '_commun/header.php';?>
    <?php include VIEWS_DIR . '_commun/sidebar.php';?>

    <div class="container">

        <div class="row">

            <div class="col-md-9">

                <div class="thumbnail">
                    <img class="img-responsive" src="http://placehold.it/800x300" alt="">
                    
                    <div class="caption-full">
                        <h4 class="pull-right"><?php echo $produit -> getPrice(); ?></h4>
                        <h4><a href="#"><?php echo $produit -> getTitre(); ?></a>
                        </h4>
                        <p> <?php echo $produit -> getDescription(); ?>
                        </div>
                    
                    <div class="ratings">
                        <p class="pull-right"><?php echo count($commentaires) . " Commentaires"; ?></p>
                 
                        <?php
                        for ($i=1; $i < 6; $i++)
                            {
                                if ($i > $moyenne)
                                    echo '<span class="glyphicon glyphicon-star-empty"></span>';

                                else
                                    echo '<span class="glyphicon glyphicon-star"></span>';
                                    
                            }
                        ?>                            
                                          
                    </div>
                </div>



<?php /**
    
    TABLEAU DES COMMENTAIRES

*/ ?>

                
                <div class="well" >

                    <div class="text-right" >
                        <a class="btn btn-success" id="displayfonction">Leave a Review</a>
                    </div>

                    <hr>
                    <div id="formcom">
<?php 
/**
    FOREACH
*/
                    foreach($commentaires as $c ): ?>


                        <div class="row" >
                            <div class="col-md-12">

                                <?php
                                for ($i=1; $i < 6; $i++)
                                    {
                                        if ($i > $c -> getNote() )
                                            echo '<span class="glyphicon glyphicon-star-empty"></span>';

                                        else
                                            echo '<span class="glyphicon glyphicon-star"></span>';
                                            
                                    }
                                ?>                              
                                
                            <?php echo $c -> getAuteur(); ?>
                            <span class="pull-right"> <?php echo $c -> getdate_c(); ?></span>
                            <p><?php echo $c -> getContenu(); ?></p>

                            </div>
                        </div>


                        <hr>
<?php 
/**
    ENDFOREACH
*/                   endforeach ?>
                    </div>
                </div>

            </div>

        </div>

    </div>
    <!-- /.container -->


<?php /**
    
    NOUVEAU COMMENTAIRE

*/ ?>

    <div class="container">

        <form class="form-signin" role="form" method="post" action="add_commentaire.php">
        
        <h2 class="form-signin-heading">Votre commentaire</h2>

            <input type="text" class="form-control" name="nom"      placeholder="Nom" >
            <input type="text" class="form-control" name="comment"  placeholder="Commentaire" >
            <div   id="star"   class="form-control"></div>
            <input type="hidden"class="form-control"name="pid"      value="<?php echo $produit -> getId(); ?>">
        
        <button class="btn btn-lg btn-primary btn-block" type="submit">Enrengistrer</button>
      </form>
    
      
    </div>



    <div class="container">  
        <h1>PRODUIT EN COMMUN</h1>


        <?php foreach ($produitcommun as $commun) :?>


                        <div class="col-sm-4 col-lg-4 col-md-4">
                            <div class="thumbnail">
                                <img src="http://placehold.it/320x150" alt="">
                                <div class="caption">
                                    <h4 class="pull-right"><?php echo $commun -> getPrice(); ?></h4>
                                    <h4><a href="produits.php?pid=<?php echo $commun -> getId(); ?>"><?php echo $commun -> getTitre(); ?></a>
                                    </h4>
                                    <p> <?php echo $commun -> getDescription(); ?> </p>
                                </div>
                            </div>
                        </div>

        <?php endforeach; ?>
    </div>


    <?php include VIEWS_DIR . '_commun/footer.php';?>






<!-- JavaScript -->
<script src="js/jquery-1.10.2.js"></script>
<script src="js/bootstrap.js"></script>
<script type="text/javascript" src="js/lib/jquery.raty.js"> </script>



<script type="text/javascript">
    $(document).ready(function()
    {
        $("#formcom").hide();
        $("#displayFormCom").click(function(e)
        {
            e.preventDefault();
            $("#formcom").slideToggle();
        });
        $('#star').raty(
            {
                path:"js/lib/images",
                scoreName: 'note'
            })
        $("#star input").val (0);

    })

</script>

</body>

</html>
