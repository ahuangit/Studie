
<?php include VIEWS_DIR . '_common/header.html' ?>


<div class="container">

	<div class="row">
		<div class="col-md-12">


			<?php foreach ($messages as $m): ?>

			<h3><?=$m['nickname']?>, <?=$m['time_day']?> à <?=$m['time_hour']?></h3>
			<p><?=$m['content_html']?></p>

			<?php endforeach ?>


		</div>
	</div>

</div>


<?php include VIEWS_DIR . '_common/footer.html'; ?>
<?php include VIEWS_DIR . '../controllers/message/index.php' ?>