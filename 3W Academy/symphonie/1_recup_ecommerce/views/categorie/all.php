
    <?php include VIEWS_DIR . '_common/header.php' ?>

    <div class="container">

      <div class="row row-offcanvas row-offcanvas-right">

        <div class="col-xs-12 col-sm-9">
          <p class="pull-right visible-xs">
            <button type="button" class="btn btn-primary btn-xs" data-toggle="offcanvas">Toggle nav</button>
          </p>
          <div class="jumbotron">
            <h1>Toutes les catégories</h1>
            <p>This is an example to show the potential of an offcanvas layout pattern in Bootstrap. Try some responsive-range viewport sizes to see it in action.</p>
          </div>
          <div class="row">

            <?php foreach ($categories as $cat) : ?>
            <div class="col-6 col-sm-6 col-lg-4">
              <h2>
                <?php
                echo $cat->getTitre();
                if (isset($nbProduitsIncateg[$cat->getId()]))
                {
                  echo ' ('.$nbProduitsIncateg[$cat->getId()].')';
                }
                ?>
              </h2>
              <p><?php echo $cat->getDescription(); ?></p>
              <p><a class="btn btn-default" href="categorie.php?idc=<?php echo $cat->getId(); ?>" role="button">View details »</a></p>
            </div><!--/span-->
            <?php endforeach; ?>
           
          </div><!--/row-->
        </div><!--/span-->

        <!--/span-->
      </div><!--/row-->

    </div>


<?php include VIEWS_DIR . '_common/footer.php' ?>