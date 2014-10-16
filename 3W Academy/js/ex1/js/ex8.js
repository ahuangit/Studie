document.addEventListener("DOMContentLoaded",function()
{
});

var listeClasse  = document.querySelectorAll(".test");
alert(listeClasse.length);
var monElement = document.querySelector("#2");
for (var i = 0; i < listeClasse.length; i++)
{
    listeClasse[i].innerHTML = "Hello<strong>World</strong>";
}



function notifierClic(){
    alert("Element clique")
}

document.addEventListener("DOMContentLoaded",function()
{
});

var monElement = document.querySelector(".lol")
    monElement.addEventListener("click", function(){
        notifierClic();
    });







