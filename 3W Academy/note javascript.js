
// il y a 2 façons de l'écrire

1) var maison = new object ();

2) var maison;
   maison = new object ();

   	||

1)	maison.couleurFacade="rouge",
	maison.nombreChambres=3,



2)	maison= {						// <= JSON
	couleurfacade:"rouge",
	nombreChambres:3
}



----------------------------------------------------------------------------------------

var montableau;
montableau = new Array();

montableau[0]="toto"; ect ...

alert(montableau.length);
 
----------------------------------------------------------------------------------------

var prenom="toto"  //avec ceci il peut être un tableau
alert(prenom.length); 

----------------------------------------------------------------------------------------

var voiture;
	voiture = new object();

  	voiture.dateAchat = newDate("2012-08-05");
	/*voiture.dateAchat = "2012-08-05" ;*/

var num_jour_semaine= voiture.dateAchat.getDate();


var une_autre_voiture;
	une_autre_voiture= object();

----------------------------------------------------------------------------------------

var age = 31;
var aplusdeTrenteAns;

aplusdeTrenteAns = (age >= 30); //Booleem

var aExactementTrenteAns;
	aExactementTrenteAns = (age == 30); //Booleem

/*

<
>
<=
=>
== COMPARAISON
= ASSIGNATION
!= (est différent de ...)
*/

--- TABLEAU && et || sur WORD ---

----------------------------------------------------------------------------------------

if (age > 18) {document.write("Vous êtes majeur")};
	else 	  {document.write("Vous êtes mineur")};

----------------------------------------------------------------------------------------

var prenom="Remy";

if(prenom=="Julie")    {document.write("Vous vous appelez Julie")}
else if(prenom=="Imen"){document.write("Vous vous appelez Imen")}
else 				   {document.write("Vous vous appelez ...")}



----------------------------------------------------------------------------------------



var compteur = 0
while (compteur < 3)
{
	console.log(compteur)
	compteur++;
}

		||

for(compteur=0, compteur < 3 ; compteur++)
{
	console.log(compteur);
}

----------------------------------------------------------------------------------------

alert(isNaN(123)); //FALSE
alert(isNaN("123")); //FALSE
alert(isNaN("bonjour")); //TRUE

----------------------------------------------------------------------------------------

var nombre;
var arrondi;
	nombre = 1.6;

//Entier le plus proche
arrodni = Math.round(nombre); //2

//Entier supérieur
arrondi = Math.ceil(nombre); //2

//Entier inférieur
arrondi = Math.floor(nombre); //1

----------------------------------------------------------------------------------------

//float aleatoire entre 0 et 1
var aleatoire = Math.random();

//Entier aleatoire entre 0 et 5
var entier random= Math.floor (5xMath.random())

----------------------------------------------------------------------------------------


var dernierPrenomAppel;

function ouvrirfenetre(Prenom)
{
    alert("Hello" + Prenom);
    dernierPrenomAppel=Prenom;

}

ouvrirfenetre("Rémy");
ouvrirfenetre("Laurent");
alert(dernierPrenomAppel);

var utilisateur=window.prompt("prénom");
ouvrirfenetre(utilisateur);

----------------

function ouvrirfenetre(prenom,nom)
{
        alert("Hello" + prenom +""+ nom);
        dernierNomappel=prenom +""+nom;
}
ouvrirfenetre("Remy","Turapult");
console.log(dernierNomappel);


----------------------------------------------------------------------------------------

var monElement=document.querySelector();
monElement.addEventListener("click",wefonction);

// en dessous version simplifié en function


function installEventHandleur("#élément","click",uneFonction);

/*function installEventHandleur
    - selecteur
    - type d'évenement
    - nom de fonction externe
*/






