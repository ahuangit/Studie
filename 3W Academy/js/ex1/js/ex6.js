/*

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





var marque = new Array();
	marque=["Mercedes","Renault","Lexus","Ford"];

var passagers = new Array();
	passagers=["tata","titi","toto","tutu"];

var Fdate="2000"

document.write("<ul>")
document.write("<li>Marque de la voiture : <strong>"+marque[0]+"</strong></li>");
document.write("<li>Date de fabrication : <strong>"+Fdate+"</strong></li>");
document.write("<li>Date de test : <strong>"+nom_jour_semaine+" "+date+" "+nom_mois+" "+year+"</strong></li>");

document.write("<li>Passagers : <strong>"+passagers+"</strong></li>");



				


*/


/* <= vue sur internet, poser la question du 2eme cas

var myArray = new Array(
          ["Vanilla","Chocolate","Strawberry"],
          ["Cat","Dog","Fox","Mouse","Owl"],
          ["HTML","CSS","Javascript","PHP"]
);
for(var i = 0; i < myArray.length; i++) {
    document.write("<h3>Array | "+myArray[i].length+" items</h3>");
    for(var itm in myArray[i]) {
        document.write(myArray[i][itm]+"<br />");
    }
}





var myArray = new Array(
          ["Vanilla","Chocolate","Strawberry"],
          ["Cat","Dog","Fox","Mouse","Owl"],
          ["HTML","CSS","Javascript","PHP"]
);
document.write(myArray[0]+"<br />");
document.write(myArray[1]+"<br />");
document.write(myArray[2]+"<br />");

*/


var estMajeur;
    estMajeur = (age <= 18);

var estpasCentenaire;
    estpasCentenaire = (age < 100);


var aPasCentAns;
    aPasCentAns = (age != 100);


