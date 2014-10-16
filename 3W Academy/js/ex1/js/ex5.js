/*

var tva=19.6;

var prix_ht=window.prompt("Saisir un prix hors taxe");

var prix_ht=parseInt(prix_ht)


var ttc= prix_ht * (100 + tva) / 100

var euro="euro";

var total=ttc + euro;



document.write("Le prix HT est de <strong>"+prix_ht+"€</strong> <br></br>");
document.write("Le prix TTC est de <strong>"+ttc.toFixed(2)+"€</strong>");

*/




/*
var joursSemaine = new Array();
    joursSemaine [0] = "Lundi" ;
    joursSemaine [1] = "Mardi" ;
    joursSemaine [2] = "Mercredi" ;
    joursSemaine [3] = "Jeudi" ;
    joursSemaine [4] = "Vendredi" ;
    joursSemaine [5] = "Samedi" ;
    joursSemaine [6] = "Dimanche" ;
    console.log(joursSemaine);
    alert(joursSemaine[2]);

    console.log(joursSemaine);
    alert(joursSemaine.length);

var prix = new Array();
    prix ["ht"] = 200;
    prix ["ttc"] = 240;
alert(prix["ht"]);

*/



/*
 alert(maintenant.getDay());     //jour de la semaine (0 à 6)
 alert(maintenant.getDate());    //n° du jour dans le mois
 alert(maintenant.getMonth());   //n° du mois
 alert(maintenant.getFullYear());//année sur 4 chiffres
 */




var joursSemaine = new Array();
    joursSemaine=["Dimanche","Lundi","Mardi","Mercredi","Jeudi","Vendredi","Samedi"];


var mois = new Array();
    mois=["Janvier","Février","Mars","Avril","Mai","Juin","Juillet","Août","Septembre","Octobre","Novembre","Décembre"];





var maintenant;
    maintenant = new Date();

    var num_jour_semaine;
      num_jour_semaine = maintenant.getDay();
      nom_jour_semaine = joursSemaine[num_jour_semaine];

    var date;
        date = maintenant.getDate();

    var num_mois;
        num_mois = maintenant.getMonth();
        nom_mois = mois[num_mois];

    var year;
        year = maintenant.getFullYear();


document.write("Nous somme le <strong>"+nom_jour_semaine+" "+date+" "+nom_mois+" "+year+"</strong>");

