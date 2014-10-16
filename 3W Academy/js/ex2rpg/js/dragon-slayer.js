/*
var monRandom = getRandomInteger(50,70);
document.write(monRandom);
*/
/*
var typeEpee = requestInteger("Quel type d'épée?(1:mousse, 2:bois, 3:acier",1,3);

var typeArmure = requestInteger("Quel type d'armure?(1:Amousse, 2:Abois, 3:Aacier",1,3);
*/

var game;


    //const ID
const EASY        = 1;
const MEDIUM      = 2;
const HARD        = 3;

const EPEE_MOUSSE = 1;
const EPEE_BOIS   = 2;
const EPEE_ACIER  = 3;

const ARMOR_RIEN  = 1;
const ARMOR_SLIP  = 2;
const ARMOR_PANTS = 3;







function initializeGame()
{
    game=new Object();
    game.round= 1;

    game.difficulte=requestInteger("Vous voulez jouer en?(1:Easy, 2:Medium, 3:Hard",1,3);
    game.epee= requestInteger("Quel type d'épée?(1:mousse, 2:bois, 3:acier",1,3);
    game.armure= requestInteger("Quel type d'armure?(1:Rien, 2:Slip, 3:Pants",1,3);



    //DIFFICULTE JEU
    switch(game.difficulte)
    {
        case EASY       :
            game.hp_player = getRandomInteger(200,250);
            game.hp_mob    = getRandomInteger(150,200);

            break;
        case MEDIUM       :
            game.hp_player = getRandomInteger(200,250);
            game.hp_mob    = getRandomInteger(200,250);
            break;
        case HARD       :
            game.hp_player = getRandomInteger(150,200);
            game.hp_mob    = getRandomInteger(200,250);
            break;
    }

    //EQUIPEMENT
    switch(game.epee)
    {
        case EPEE_MOUSSE: game.forceEpee = 1; break;
        case EPEE_BOIS  : game.forceEpee = 1.5; break;
        case EPEE_ACIER : game.forceEpee = 2; break;
      default           : game.forceEpee = 1; break;
    }

    switch(game.armure)
    {
        case ARMOR_RIEN : game.forceArmor = 1; break;
        case ARMOR_SLIP : game.forceArmor = 1.25; break;
        case ARMOR_PANTS: game.forceArmor = 2; break;
      default           : game.forceArmor = 1; break;
    }

}

function showGameState()
{
    console.log("Player "+game.hp_player+" HP")
    console.log("Dragon "+game.hp_mob+" HP")
}







function damageMob()
{
    var dmgMob;
    if (game.difficulte == EASY)
    {
        game.moblvldmg = getRandomInteger(10,20);
    }
    else
    {
        game.moblvldmg = getRandomInteger(30,40);
    }
    dmgMob = Math.round (game.moblvldmg / game.forceArmor);
    return dmgMob;


}

function damagePlayer()
{
    var dmgPlayer;
    if (game.difficulte == EASY)
    {
        game.joueurlvldmg = getRandomInteger(5,10);
    }
    else if (game.difficulte == MEDIUM)
    {
        game.joueurlvldmg = getRandomInteger(15,20);
    }
    else
    {
        game.joueurlvldmg = getRandomInteger(25,30);
    }
    dmgPlayer = Math.round (game.joueurlvldmg * game.forceEpee);
    return dmgPlayer;
}










function gameloop()
{
    document.write(""+game.round+" ROUND ... FIGHT ! <br/>");

    while (game.hp_player > 0 && game.hp_mob > 0 ) {

        var dmg;
        var S_player = getRandomInteger(10,20);
        var S_mob    = getRandomInteger(10,20);






        if (S_player >= S_mob)
         {
             dmg = damagePlayer();
             game.hp_mob = game.hp_mob - dmg;
             document.write ("Player inflige "+dmg+" dêgats d'arme Mob lui reste "+game.hp_mob+" HP <br/>")
             game.round++;
             document.write ("ROUND "+game.round+" ! <br/>");

         }
        else
         {
             dmg = damageMob();
             game.hp_player = game.hp_player - dmg;
             document.write ("Mob inflige "+dmg+" dêgats, Player lui reste "+game.hp_player+" HP <br/>");
             game.round++;
             document.write ("ROUND "+game.round+" ! <br/>");
         }

    }




}



function endfight()
{
    if (game.hp_player < 0)
     {
     document.write ("You loss, noobs in " +game.round+" rounds ");
     }
     else
     {
     document.write ("You win, lucker in "+game.round+" rounds ");
     }
}







function startgame()
{
    console.clear();
    initializeGame();
    console.log("Etat initial:");
    showGameState();
    gameloop();
    console.log(game);
    endfight();
}

startgame();
