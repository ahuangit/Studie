<!DOCTYPE HTML>
<html lang="en-US">
<head>
    <meta charset="UTF-8">
    <title>LegoManiac</title>
    <link rel="stylesheet" href="style.css" type="text/css"/>

</head>
<body>



<?php


include "listController.php";

?>


<nav>
<ul>
    <li><a href="?cid=">No Filter</a></li>
    <li><a href="?cid=1">Enfant</a></li>
    <li><a href="?cid=2">Collection</a></li>
    <li><a href="?cid=3">Super-hero</a></li>
    <li><a href="?cid=4">Classique</a></li>
    <li><a href="?cid=5">Discount</a></li>
    <li><a href="?cid=6">Starswars</a></li>

</ul>
</nav>



<h2>  <?php echo $array ["name"];
       
?> </h2>


<table>

    <tbody>
    <?php

    while ($data = mysql_fetch_array($q)): ?>

        <tr>
            <td><?php echo ($data["Legoname"]); ?></td>
            <td><?php echo ($data["name"]); ?></td>
            <td><?php echo ($data["margin_rate"]); ?></td>
            <td><?php echo round( $data ["total_price"],2); ?></td>
        </tr>
    <?php endwhile; ?>


    </tbody>
</table>


<ul>
<?php 
var_dump($paget);
    for ($page = 1;$page <= $paget; $page++) {  ?> 
    <li><a href="#"> <?php echo ('$page') ?> </a></li>
    <? } ?>
</ul>
 
    
</body>
</html>
