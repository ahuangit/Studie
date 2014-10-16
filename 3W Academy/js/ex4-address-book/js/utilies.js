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

function refreshAdressBook()
{
    //Charger les données du carnet d'adresses
    var addressBook;
        addressBook = loadAdressBook();

    var addressBookzElement = document.querySelector("#js-adress-book");
        addressBookzElement.innerHTML ="";
    for (var i=0; i < addressBook.length; i++)
    {
        addressBookzElement.innerHTML += "<li><a href=\"#\" data-index=\""+i+"\">"
        +addressBook[i].nom+" "
        +addressBook[i].prenom+

        "</a></li>";
    }

}


function saveAddressBook(data)
{
    saveDataToDomStorage(DOM_STORAGE_NAME,data);
}
function saveDataToDomStorage(name,objet_a_stocker)
{
    var jsonData = JSON.stringify(objet_a_stocker);
    window.localStorage.setItem(name,jsonData);
}


/********************************** FONCTIONS COMBINE **************************************/
/*******************************************************************************************/



/*****************************************************/


function loadAdressBook()
{
    var adressBook;
    adressBook = loadDataFromStorage(DOM_STORAGE_NAME)
    if (adressBook == null)
    {
        adressBook = new Array();
    }
    return adressBook;
}


function loadDataFromStorage(name)
{   //récupéré les données du storage

    var jsonData = window.localStorage.getItem(name);

    // les retourner désérialisés
    return JSON.parse(jsonData);
}
/*****************************************************/

/************************  var contact = CreateContact( *****************************/
function getFromFieldValue(formId,fieldName)
{
    //var form = document.querySelector("#formId");
    var form = document.getElementById(formId);
    var field = form.elements.namedItem(fieldName);
    return field.value;
}
/************************  var contact = CreateContact( *****************************/




/************************  onClickAddContact *****************************/
function clearform(selector)
{
    var inputs = document.querySelectorAll(selector +" input[type=text]");
    for(var i = 0;i < inputs.length;i++)
    {
        inputs[i].value = null;
    }
}

function showhtml(selecteur)
{
    document.querySelector(selecteur).classList.remove("hide");
}


function hidehtml(selecteur)
{
    document.querySelector(selecteur).classList.add("hide");
}
/************************  onClickAddContact *****************************/




/************************  onClickSaveContact *****************************/
function CreateContact (civilite,nom,prenom,telephone)
{
    var contact =
    {
        nom : nom,
        prenom : prenom,
        telephone : telephone
    }

    switch(civilite)
    {
        case"madam" :
            contact.civilite = "Mme";
            break;
        case"miss" :
            contact.civilite = "Mlle";
            break;
        default :
            contact.civilite = "Mr";
            break;
    }
    return contact
}
/************************  onClickSaveContact *****************************/


function installEventHandlers(selecteur, evenement, fonction)
{
    var monElement = document.querySelector(selecteur);
    for (var i=0; i < elements.length; i++)
    {
        elements[i].addEventListener(evenement,fonction);
    }

}