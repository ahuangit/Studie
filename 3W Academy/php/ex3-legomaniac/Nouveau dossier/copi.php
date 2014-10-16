<!--

<?php include "controller.php"; ?>

<!DOCTYPE html>

<html>
<head>
    <meta charset="utf-8">
    <link rel="stylesheet" type="text/css" href="style.css">

    <title>Real Tea</title>
</head>

<body>

<table rules="all">

<thead>
    <th>Nom du produit</th>
    <th>Catégories</th>
    <th>Prix</th>
</thead>

<?php while ($data = mysql_fetch_array($q)): ?>

    <tr>
        <td><?=$data['name_lego']?></td>
        <td><?=$data['name_category']?></td>
        <td><?=round ($data['total_price'],2)?></td>
    </tr>


<?php endwhile; ?>


</table>


<form method="get" action="">
    <select name="cid">
        <option value="1">enfant</option>
        <option value="2">collection</option>
        <option value="3">s h</option>
        <option value="4">classic</option>
    </select>
    <input type="submit">
</form>

</body>
</html>

-->
<!DOCTYPE html>

<html>
<head>
    <meta charset="utf-8">
    <link rel="stylesheet" type="text/css" href="style.css">

    <title>Lego Shop</title>
</head>
<body>
<nav>
    <a href="#"><img src="img/logo.png"></a></li>
    <ul>
        <li><a href="#">Accueil </a></li>
        <li><a href="#">Nos produits</a></li>
        <li><a href="#">Contactez-nous</a></li>
    </ul>
</nav>



</body>
</html>
