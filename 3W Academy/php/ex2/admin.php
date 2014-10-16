<?php
include 'admincontrol.php';
?>

<h1>ADMIN</h1>
<ul>
    <?php foreach ($emails as $email): ?>

        <li><?= $email ?></li>

    <?php endforeach;?>
</ul>