/*******************************************************************************************/
/********************************** FONCTIONS UTILITAIRES **********************************/
/*******************************************************************************************/




function getRandomInteger(min,max)
{
    var resultat = Math.round((Math.random() * (max-min) + min));

    return resultat;
}


function requestInteger(message,min,max)
{
    var monInteger;

    do
    {
        monInteger=parseInt(window.prompt(message));
    }

    while((isNaN(monInteger)) || (monInteger < min) || (monInteger > max));
    return monInteger;
}


function installEventHandler(selecteur, evenement, fonction)
{
    var monElement = document.querySelector(selecteur);
        monElement.addEventListener(evenement, fonction);

}