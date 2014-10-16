<!DOCTYPE html>

<html>
<head>
	 <meta charset="utf-8">
	 <link rel="stylesheet" type="text/css" href="reset.css">
	 <link rel="stylesheet" type="text/css" href="style.css">

	<title>Reservation</title>
</head>
<body>



<form action= "<?php echo $_SERVER['PHP_SELF']?>" method="post">
    
<div>
    <ul>
    	<li><label for="nom">Nom</label>
        <input type="text" id="nom"    name="nom" value=""></li>

        <li><label for="prenom">Prénom</label>
        <input type="text" id="prenom" name="prenom" value=""></li>

        <li><label for="email">Email</label>
        <input type="text" id="email"  name="email" value=""></li>

    
        <li><label for="adresse">Adresse</label>
        <input type="text" id="adresse"    name="adresse" value=""></li>

        <li><label for="codepostal"></label>
        <input type="text" id="codepostal" name="codepostal" value=""></li>

        <li><label for="ville"></label>
        <input type="text" id="ville"      name="ville" value=""></li>
    </ul>
</div>

<div>
<!-- CORRECTION ------------------------------------------------------------------------------>

<select name="ville">
    <?php
        $villes = array (
            'par' => 'Paris',
            'lon' => 'Londre',
            'ny' => 'New-York',
        );
        
        foreach($villes as $key => $value){
            echo "<option value=''.$key.''";


    if(isset($_POST['ville']) && $_POST['ville'] == $key)
    echo '_selected' ;
    echo '>'.$value;
    echo '</option>';
    }?>
</select>


    <!--
    <ul>
        <li><label for="depart">Départ : </label>
        <select id="depart" name="depart"> 
            <option value="mon">Lundi</option>
            <option value="tue">Mardi</option>
            <option value="wed">Mercredi</option>
        </select> </li>

        <li><label for="arrive">Arrivée : </label>
        <select id="arrive" name="arrive">
            <option value="mon">Lundi</option>
            <option value="tue">Mardi</option>
            <option value="wed">Mercredi</option>
        </select> </li>
-->











        <label for="star"></label>
          <li><label for="classe">Classe : </label>
          <input type="radio" id="star" name="star" value="1">&#9733;
          <input type="radio" id="star" name="star" value="2">&#9733;&#9733;
          <input type="radio" id="star" name="star" value="3">&#9733;&#9733;&#9733;
          <input type="radio" id="star" name="star" value="4">&#9733;&#9733;&#9733;&#9733;
          <input type="radio" id="star" name="star" value="5">&#9733;&#9733;&#9733;&#9733;&#9733;</li>
          




        <li><label for="option">Option : </label>
            <input type="checkbox" id="animaux" name="animaux" value="Animaux">
            <label for="animaux">Animaux</label>

            <input type="checkbox" id="piscine" name="piscine" value="Piscine">
            <label for="piscine">Piscine</label>

</div>


<div>
    <button type="submit" value="Submit">Save</button>
</div>


<?php  

// COORDONNE NOM PRENOM MAIL ADRESSE/////////////////////////////////////////// 

    if(isset($_POST['nom'])){
    $nom_value= $_POST['nom'];
    }

    if(isset($_POST['prenom'])){
    $prenom_value= $_POST['prenom'];
    }

    if(isset($_POST['email'])){
    $email_value= $_POST['email'];
    }

    if(isset($_POST['adresse'])){ // ADRESSE CODE POSTAL VILLE
    $adresse_value= $_POST['adresse'];
    }

        if(isset($_POST['codepostal'])){
        $codepostal_value= $_POST['codepostal'];
        }

        if(isset($_POST['ville'])){
        $ville_value= $_POST['ville'];
        }

// DATE DEPART & ARRIVE /////////////////////////////////////////// 

/*
switch($_POST['depart'])
{
    case 'mon':
        $D_date = "Lundi";
        break;
    case 'tue':
        $D_date = "Mardi";
        break;
    case 'wed':
        $D_date = "Mercredi";
        break;
}

switch($_POST['arrive'])
{
    case 'mon':
        $A_date = "Lundi";
        break;
    case 'tue':
        $A_date = "Mardi";
        break;
    case 'wed':
        $A_date = "Mercredi";
        break; 
}

    // DEPART
    if(isset($_POST['depart']) && $_POST['depart'] == 'mon')
        echo $D_date;
    if(isset($_POST['depart']) && $_POST['depart'] == 'tue')
        echo $D_date;
    if(isset($_POST['depart']) && $_POST['depart'] == 'wed')
        echo $D_date;

    //ARRIVE
    if(isset($_POST['arrive']) && $_POST['arrive'] == 'mon')
        echo $A_date;
    if(isset($_POST['arrive']) && $_POST['arrive'] == 'tue')
        echo $A_date;
    if(isset($_POST['arrive']) && $_POST['arrive'] == 'wed')
        echo $A_date;

*/

// CLASSE & OPTION /////////////////////////////////////////// 

switch($_POST['star'])
{
    case '1':
        $star = "&#9733";
        break;
    case '2':
        $star = "&#9733;&#9733";
        break;
    case '3':
        $star = "&#9733;&#9733;&#9733";
        break; 
    case '4':
        $star = "&#9733;&#9733;&#9733;&#9733";
        break; 
    case '5':
        $star = "&#9733;&#9733;&#9733;&#9733;&#9733";
        break;
}

    if(isset($_POST['star']) && $_POST['star'] == '1')
        echo $star;
    if(isset($_POST['star']) && $_POST['star'] == '2')
        echo $star;
    if(isset($_POST['star']) && $_POST['star'] == '3')
        echo $star;
    if(isset($_POST['star']) && $_POST['star'] == '4')
        echo $star;
    if(isset($_POST['star']) && $_POST['star'] == '5')
        echo $star;

// OPTION /////////////////////////////////////////// 


    if(isset($_POST['animaux'])){
    $option= $_POST['animaux'];
    echo $option;
    }

    if(isset($_POST['piscine'])){ 
    $option= $_POST['piscine'];
    echo $option;
    }    
 
?>

</form>


</body>
</html>











<?php
