<?php
include('Personnage.php');
class Guerrier extends Personnage
{
   private $muscle;
   //-------------------------------------------//
   ////////////CONSTRUCTEUR//////////////////////
   //-----------------------------------------//


   public function __construct($nom, $force, $santé, $muscle)
   {
      parent::__construct($nom, $force, $santé);
      $this->setMuscle($muscle);
   }
   //-------------------------------------------//
   ////////////GETTERS//////////////
   //-----------------------------------------//

   /**
    *  return $muscle
    * type : string
    */
   public function getMuscle()
   {
      return $this->muscle;
   }


   //-------------------------------------------//
   ////////////SETTERS//////////////
   //-----------------------------------------//

   /**
    * return $muscle
    * type :string
    */
   public function setMuscle(string $muscle)
   {
      $this->muscle = $muscle;
   }

   //-------------------------------------------//
   ////////////METHODES SPECIFIQUES//////////////
   //-----------------------------------------//

   public function seBattre(Guerrier $guerrier)
   {
      echo "Je suis " . $guerrier->getNom() . " et je me bats";
   }
}

$hulk = new Guerrier("hulk", 50, 100, "beaucoup");

echo $hulk->getNom();
echo $hulk->getForce();
echo $hulk->getSanté();
echo $hulk->getMuscle();
$hulk->seBattre($hulk);
