/*** DONNEES ***/

const DOM_STORAGE_NAME = "adressBook";




/*** FONCTIONS DES EVENEMENTS ***/

function onClickAddContact()
{
    clearform("#js-contact-form-wrapper");
    showhtml("#js-contact-form-wrapper");
}

function onClickClearAdressbook()
{
    saveAddressBook(new Array());
    document.querySelector("#js-contact-details").innerHTML="";
    refreshAdressBook();
}

function onClickSaveContact()
{
/*
    var civilite = document.querySelector("#civilite").value("js-contact-form","civilite");
    var prenom = document.querySelector("#firstName").value("js-contact-form","firstname");
    var nom = document.querySelector("#lastName").value("js-contact-form","lastName");
    var telephone = document.querySelector("#telephone").value("js-contact-form","telephone");
*/

    var contact = CreateContact(
        getFromFieldValue("js-contact-form","civilite"),
        getFromFieldValue("js-contact-form","firstName"),
        getFromFieldValue("js-contact-form","lastName"),
        getFromFieldValue("js-contact-form","telephone")

    );

    var abook;
        abook = loadAdressBook();
        abook.push(contact);
    console.log(abook);
        saveAddressBook(abook);
        hidehtml("#js-contact-form-wrapper");
        refreshAdressBook();

}

function onClickShowContact()
{
}

function onClickShowContactDetails()
{
    var index = this.dataset.index;
    var addressBook = loadAdressBook;
    var contact = addressBook[index];
}






/*** AUTRES FONCTIONS ***/




/*** CODE PRINCIPAL***/

document.addEventListener("DOMContentLoaded", function(){

    installEventHandler("#js-add-contact", "click", onClickAddContact);
    installEventHandler("#js-clear-address-book", "click", onClickClearAdressbook);
    installEventHandler("#js-save-button", "click", onClickSaveContact);
    installEventHandler("#js-contact-details", "click", onClickShowContact);
    installEventHandlers("#js-address-book li", "click", onClickShowContactDetails);
    refreshAdressBook();
})