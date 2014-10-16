/*

var tva = 19.6;
var ht= 100;
var sold= 10;
var euro="€";

var quiz_ht= window.prompt("Voulez-vous appliqués une remise?");
var Rquiz;
var ht_r;
var ttc;

if (quiz_ht == "oui")
{
    ht_r= (ht * ((100-sold)/100));
}

else
{
    ht_r=ht;
    Rquiz= window.prompt("Autre chose? vous aurez droit a une bonne rémise =)");

    if (Rquiz =="oui")
    {
        ht_r= (ht * ((100-sold)/100));
        document.write("Le prix est de <strong>"+ht_r+" "+euro+"</strong>");
    }

    else
    {
        ttc= (ht * ((100+tva)/100));
        document.write("Le prix est de <strong>"+ttc+" "+euro+"</strong>");

    }

}

*/










/*


var tva = 19.6;
var ht= 100;

var euro="€";

var quiz_ht= window.prompt("Voulez-vous appliqués une remise?");
var Rquiz;

var sold;
var ht_r;
var ttc;


if (quiz_ht == "oui")
{
  sold=window.prompt("Combien de % de remise?");
  var prix_ht=parseInt(sold)


    if (sold > 0)
  {
    ht_r= (ht * ((100-sold)/100));
    document.write("Le prix est de <strong>"+ht_r+" "+euro+"</strong> hors taxe");
  }

  else
  {
  Rquiz= window.prompt("Finalement pas de rémise?");



    if (Rquiz == "oui")
    {
      ttc= (ht * ((100+tva)/100));
      document.write("Le prix est de <strong>"+ttc+" "+euro+"</strong>");
    }


*/

/*
var facteur1;
var facteur2;


var text;
var tables=new Array();

  tables[0]=[0,0,0,0,0,0,0];
  tables[1]=[0,1,2,3,4,5,6];
  tables[2]=[0,2,4,6,8,10,12];
  tables[3]=[0,3,6,9,12,15,18];
  tables[4]=[0,4,8,12,16,20,24]
  tables[5]=[0,5,10,15,20,25,30];
  tables[6]=[0,6,12,18,24,30,36];

document.write("<table>")


for (facteur1=0; facteur1 < tables.length; facteur1++)
{    document.write("<tr>")
     for (facteur2=0; facteur2 < tables[facteur1].length; facteur2++)
     {


     document.write("<td>")
     document.write(facteur1 + " * " + facteur2 + " = " +tables[facteur1][facteur2]+ "<br/>")
     document.write("</td>")
     }
     document.write("</tr>")
document.write("</table>")
}
*/


/*
var monTab = new Array ();
    monTab.push ("Livre1");
var a=monTab.push ("Livre2" , "Livre3" , "Livre4" , "Livre5");
    console.log(monTab);
    console.log(monTab[0]);
    console.log(monTab[1]);
    console.log(monTab[2]);


    a=monTab.pop ();
    console.log(a);
    a=monTab.shift();
*/




var min=10;
var max=30;


function nombreAleatoire(min,max)
{
    return Math.round((Math.random() * (max-min) + min));

}

var monNombre=nombreAleatoire(10,30);
console.log(monNombre);












/*

Math.round((Math.random() * (max-min)) + min);

Math.random(); //Float entre 0 et 1
x(max-min)  // x20 float entre 0 et 20
+min        // +10 float entre 10 et 30
            // arrondi avec Math.floor
            //ENTIER entre 10 et 30

    Math.floor(nb); //nb arrondi a l'entier le + proche
*/