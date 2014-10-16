<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="description" content="">
    <meta name="author" content="">

    <title>Shop Homepage Template for Bootstrap</title>

    <!-- Bootstrap core CSS -->
    <link href="css/bootstrap.css" rel="stylesheet">
    <?php if ($object == 'main') : ?>
        <!-- Add custom CSS here -->
        <link href="css/shop-homepage.css" rel="stylesheet">
    <?php endif; ?>

    <?php if ($object == 'produit') : ?>
        <!-- Add custom CSS here -->
       <link href="css/shop-item.css" rel="stylesheet">
    <?php endif; ?>

    <?php if ($object == 'categorie') : ?>
        <!-- Add custom CSS here -->
        <link href="css/shop-categorie.css" rel="stylesheet">
        <?php if ($action == 'all') : ?>
            <!-- Add custom CSS here -->
            <link href="css/shop-categories.css" rel="stylesheet">
        <?php endif; ?>
    <?php endif; ?>


</head>

<body>

    <nav class="navbar navbar-inverse navbar-fixed-top" role="navigation">
        <div class="container">
            <div class="navbar-header">
                <button type="button" class="navbar-toggle" data-toggle="collapse" data-target=".navbar-ex1-collapse">
                    <span class="sr-only">Toggle navigation</span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                </button>
                <a class="navbar-brand" href="main.php">Start Bootstrap</a>
            </div>

            <!-- Collect the nav links, forms, and other content for toggling -->
            <div class="collapse navbar-collapse navbar-ex1-collapse">
                <ul class="nav navbar-nav">
                    <li><a href="categories.php">Categories</a>
                    </li>
                    <li><a href="cart.php">Panier</a>
                    </li>
                    <li><a href="#services">Services</a>
                    </li>
                    <li><a href="#contact">Contact</a>
                    </li>
                    <li><a href="new_produit.php">New produits</a>
                    </li>
                </ul>
            </div>
            <!-- /.navbar-collapse -->
        </div>
        <!-- /.container -->
    </nav>