<?php

@$db = mysql_connect ('localhost','root','troiswa');
mysql_select_db("legomaniac", $db);

$where_sql = "";
if(
    isset($_GET['cid']) == true and
    empty($_GET['cid']) == false and
    is_numeric($_GET['cid']) == true
) {
    $where_sql = "WHERE `legos`.`categorie_id` = " . $_GET['cid'];
}

$sql = "
    SELECT  
        legos.namelego AS name_lego,
        categories.name AS name_category,
        (`price` * ( 1 + margin ) + `expedition_price`) AS total_price
    FROM  `legos`
    LEFT JOIN  `categories` ON  `categories`.`categorie_id` = `legos`.`categorie_id`
    " . $where_sql . "
";

$q = mysql_query($sql);