<?php

class joueur
{
    
    //déclaration des variables
    private $_nomJoueur;
    private $_jesuis;
    private $_nbpalier;

    //Initialisation de notre class
    public function __construct ($nomjoueur)
    {
        //echo "Le constructeur a été créé ! <br>";
        $this->_nomJoueur = $nomjoueur;
        $this->_nbpalier = 12;
        $this->_jesuis=1;
        //var_dump($this);
    }



    public function getnbpalier(){
        return $this->_nbpalier;
      }
    
    public function setnbpalier($nbpalier)
    {
        $this->_nbpalier = $nbpalier;
    }

    //lancement du dé de début
    public function Debut() 
    {
        $debut= rand(1,6);
        return $debut;
    }

    //lancement des dés (partie en cours)
    public function jeuxDe1() 
    {
        $de1= rand(1,6);
        return $de1;
    }

    public function jeuxDe2() 
    {
        $de2= rand(1,6);
        return $de2;
    }

    //déclaration des méthodes
    public function affiche()
    {
        echo ("<b>".$this->_nomJoueur."</b><br>");
        echo ("Nombre de palier à passer :".$this->_nbpalier."<br>");
    }

    //Somme des deux dés
    public function desomme()
    {

        $de1 = $this->jeuxde1();
        $de2 = $this->jeuxde2();
        echo"<br>Le joueur jette ses dé <br>";
        echo "<br>dé n° 1 = ".$de1." ; dé n° 2 = ".$de2."<br>";
        $desomme = $de1 + $de2;
        echo "<br>Somme des dés = ".$desomme."<br>";
        return $desomme;
        

    }

  
    public function jesuis($desomme)
    {
      $result= $this->_nbpalier - $desomme;

      if($result >= 0)
      {
        $this->_nbpalier = $this->_nbpalier - $desomme;
        echo "j'ai avancé de : ".$desomme."<br> il me reste donc ".$this->_nbpalier;
      }
      else 
      {
        echo "j'ai pas bougé";
      }
    }
    
}

?>