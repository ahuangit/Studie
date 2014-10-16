<!DOCTYPE html>

<html>
<head>
	 <meta charset="utf-8">
	 <link rel="stylesheet" type="text/css" href="style.css">

	<title>Sutdio Green Orange</title>
</head>
<body>


<div class="div-parent">
	<div class="div2"></div>
	<div class="div2-1">location</div>
	<div class="div2-2">ABOUT US</div>
</div>


</div class="div-parent2">
	<p style="margin-top: -12px"><span class="bouton1 link"><a href="http://www.google.fr">
                <?php
                // echo "Alex"
                   echo $_GET['a'];
                ?></a></span>
    <span class="bouton2 link"><a href="http://www.google.fr">porfolio</a></span><span class="bouton3 link"><a href="http://www.google.fr">contacts</a></span></p>

	<div class="clear2"></div>
</div>


<div class="parent3">
	
	<div class="enfant1">
	
	<div class="orange1">who we are</div>
	<img src="Image/who.png" style="margin-bottom:3px;">

	<div class="div-are1">Lorem ipsum dolor sit amet</div>
	<div class="div-are2">Cosectetuer adipsiscing elit. Praesent <span id="greenL">vestibulum molestie lacus.</span> Aenean nonummy hendrerit mauris.</div>

	<div class="read_more"><a href="http://www.google.fr">read more</a></div>

</div> <!--enfant1-->


	<div class="enfant-trait"></div>


	<div class="enfant2">

	<span class="orange2">what we do</span>
	<img src="Image/what.png" style="margin-bottom:25px; float: left; margin-right: 20px;">


	<div class="div-do1">Lorem ipsum dolor sit amet</div>
	<div class="div-do2">Consectetuer adipiscing elit. Praesent vestibulum molestie lacus.. <span id="orangeL">Aenean</span> nonummy hendreit mauris.
	</div>

	


		<p class="li1">Consectetuer adipiscing elit. Praesent vest</p>	
		<img src="Image/puce.png" class="puce1">

		<p class="li2">Molestie lacus enean nonmummy hendrerit</p>
		<img src="Image/puce.png" class="puce2">

		<p class="li3">Phasellus porta dfusce suscipit varius</p>
		<img src="Image/puce.png" class="puce3">

        <?php $_age = $_GET["a"]; ?>

        J'ai <?= $_age ?>

        <?php if ($_age > 1) : ?> ans
        <?php else : ?> an
        <?php endif ; ?> </br>





	<div class="read_more"><a href="http://www.google.fr">read more</a></div>

	<div class="compagny">YourCompany.com © 2004 | Privacy policy</div>
</div> <!--enfant2-->



</div> <!--parent3-->

</body>
<hr>
    <h1>Âge</h1>
    <form method="post" action="">
        <input type="text" name="a">
        <input type="submit">
        Vous avez <?= $_POST["a"]*2 ?> ans
    </form>
</hr>
</html>

