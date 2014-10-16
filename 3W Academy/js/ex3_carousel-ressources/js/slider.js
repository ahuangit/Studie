/***********************************************************************************/
/*********************************** DONNEES SLIDER ********************************/
/***********************************************************************************/

var slider;
var slides = [
    {image : "images/1.jpg",legend:"Photo1"},
    {image : "images/2.jpg",legend:"Photo2"},
    {image : "images/3.jpg",legend:"Photo3"},
    {image : "images/4.jpg",legend:"Photo4"},
    {image : "images/5.jpg",legend:"Photo5"},
    {image : "images/6.jpg",legend:"Photo6"}
]; //alert(slides[1].legend);


/***********************************************************************************/
/********************************** FONCTIONS SLIDER *******************************/
/***********************************************************************************/

function onSliderGotonext()
{
    slider.current++;

    if(slider.current == slides.length)
   {
       slider.current = 0;
   }
   refreshSlider();
}

function onSliderGotoPrevious()
{
    slider.current--;

    if(slider.current == -1)
    {
        slider.current = (slides.length-1);
    }
    refreshSlider();
}

function onSliderGotoRandom()
{
var ancientetat = slider.current;

    do{
        slider.current = getRandomInteger(0,(slides.length-1));
    }


    while(slider.current == ancientetat);

    refreshSlider();
}

function onSliderToggle()
{

    if(slider.timer == null)
    {
        slider.timer=window.setInterval(onSliderGotonext,2000);
    document.querySelector("#js-slider-toggle").innerHTML="Stoper le Diapo";
        this.innerHTML="Stoper le Diapo";
    }

    else
    {
        window.clearInterval(slider.timer);
        slider.timer=null;
        this.innerHTML="Démarer le carousel";
    }

}

function onToolbarToggle()
{
    document.querySelector("nav").classList.toggle("hide");

var icone = document.querySelector("#js-toolbar-toggle i");
    icone.classList.toggle("fa-arrow-down");
    icone.classList.toggle("fa-arrow-right");

/*
**********************************2eme manière de le faire*************************************

    if(icone.classList.contains("fa-arrow-down"))
    {
        icone.classList.remove("fa-arrow-down");
        icone.classList.add("fa-arrow-right");
    }
    else
    {
        icone.classList.remove("fa-arrow-right");
        icone.classList.add("fa-arrow-down");
    }
*/

}

function refreshSlider()
{
    document.querySelector("#js-slider img").src = slides[slider.current].image;
    document.querySelector("#js-slider p").innerHTML = slides[slider.current].legend;
}

/*******************s****************************************************************/
/********************************** CODE PRINCIPAL *********************************/
/***********************************************************************************/


document.addEventListener("DOMContentLoaded", function(){
    slider = new Object();
    slider.current = 0;
    slider.timer=null;
    installEventHandler("#js-toolbar-toggle","click", onToolbarToggle);
    installEventHandler("#js-slider-toggle","click", onSliderToggle);
    installEventHandler("#js-slider-random","click", onSliderGotoRandom);
    installEventHandler("#js-slider-previous","click", onSliderGotoPrevious);
    installEventHandler("#js-slider-next","click", onSliderGotonext);
    refreshSlider();
});