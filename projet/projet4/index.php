<?php

require_once('class.php');
echo "<br><br><center><h1><ins>Jeu de dada</ins></h1>";
echo "<b>Les règles sont les suivantes :</b> <br><br>";
echo "- Deux joueurs s'affrontent, <br>";
echo "- Un dé est lancé par chaque joueur pour savoir qui commence. Le plus grand score commence.<br>";
echo "- Le joueur lance un dé, pour gagner il faut aller au palier 12<br>";
echo "- Jeux en tour par tour.<br></center>";

echo ("<center><br><br>======================================<br>");
echo "A vous de jouer !<br>";
echo ("======================================<br><br></center>");

// Entrer un nom de joueur J1
echo ("<center>----------------------------------------<br>");        
$nomjoueur = 'Eric';
$joueur1 = new joueur($nomjoueur);
$joueur1 -> affiche();
echo "<br><center>Contre</center><br>";

// Entrer un nom de joueur J2
$nomjoueur = 'Matthieu';
$joueur2 = new joueur($nomjoueur);
$joueur2 -> affiche();
echo ("----------------------------------------<br></center>");

    do
    {
        echo "lancer de des du joueurs 1<br>";
        $des1 = $joueur1->Debut();
        echo "lancer de des du joueurs 2<br>";
        $des2 = $joueur2->Debut();
        echo "Résultat : J1 = ".$des1." , J2 = ".$des2." <br><br>";
        if ($des1>$des2)
        {
            echo ("<center><br><br>======================================<br>");
            echo "<br>  Le Joueur 1 Commence <br><br> ";
            echo ("======================================<br></center>");
            $aquidejouer = 0;
         }
      else if ($des1<$des2)
      {
            echo ("<center><br><br>======================================<br>");
            echo "<br>  Le joueur 2 Commence <br><br> ";
            echo ("======================================<br></center>");
            $aquidejouer = 1;
      }
      else 
      {
            echo "Le lancé de des est équivalent, on recommence <br><br>";
      }
    }
 while ($des1 == $des2);



$i=0;
$j=0;
$nbtour=0;
$desomme=0;


while(($joueur1->getnbpalier() >0 ) && ($joueur2->getnbpalier() >0 ) && ($nbtour<=29) )
{

    $nbtour = $i+$j+1 ;
    echo "<br>========================<br>";
    echo "<br>Tour n°".$nbtour."<br>";
    
    if ($aquidejouer <= 0)
    { 
         echo "<br>Joueur 1 :<br>";
        $aquidejouer = $aquidejouer +1;
       
        $desomme = $joueur1->desomme();
        $joueur1 ->jesuis($desomme); 
        $i++ ;
    }
    else
    {   
        echo "<br>Joueur 2 :<br>";
        $aquidejouer = $aquidejouer - 1;
       
        $desomme = $joueur2->desomme();
        $joueur2 ->jesuis($desomme);
        $j++ ;
    }
   
}

//Si l'un des deux gagnent ou pas 
if($joueur1->getnbpalier() <= 0){
    echo "<center><br><br>========================<br>";
    echo "LE JOUEUR N° 1 A GAGNER !!!!!!:";
    echo "<br>========================<br><br></center>";
}
else if ($joueur2->getnbpalier() <= 0)
{
    echo "<center><br><br>========================<br>";
    echo "LE JOUEUR N° 2 A GAGNER !!!!!!:";
    echo "<br>========================<br><br></center>";
  
}
else
{
    echo "<center><br><br>========================<br>";
    echo "Les joueurs sont nul pour finir ce jeux en 30 tours !!!!!!:";
    echo "<br>========================<br><br></center>";
  
  
}
?>