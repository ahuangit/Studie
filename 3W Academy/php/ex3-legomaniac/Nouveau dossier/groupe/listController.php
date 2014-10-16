<meta charset="UTF-8">
<?php

@$db = mysql_connect("localhost", "root", "troiswa");
mysql_select_db("legomania", $db);


$w = "";


if (
    isset($_GET['cid']) and
    is_numeric($_GET['cid'])
) {
    $w = "WHERE legos.category_id =" . $_GET['cid'];
}



$sql = "



SELECT
legos.name as Legoname,
categorys.margin_rate,
categorys.expedition_price,
 categorys.name,
( ( price * ( margin_rate ) ) + expedition_price ) AS total_price

FROM legos

LEFT JOIN categorys ON categorys.category_id = legos.category_id

" . $w . "


";


$q= mysql_query($sql);





$sqlTitle = "

SELECT *
FROM categorys
WHERE category_id =  ". $_GET['cid'] ."
";

$q2 = mysql_query($sqlTitle);



$array = @mysql_fetch_array($q2);



$qt= mysql_query($sqlTitle);













$n_total = "
SELECT COUNT(*) AS n_TOTAL
FROM legos
WHERE category_id =  ".$_GET['cid']."
";

$paget = mysql_query($n_total);
