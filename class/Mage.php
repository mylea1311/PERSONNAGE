<?php
include('Personnage.php');
class Mage extends Personnage
{


   private $magie;


   //-------------------------------------------//
   ////////////CONSTRUCTEUR//////////////////////
   //-----------------------------------------//


   //------------------------------//
   ////////////GETTERS//////////////
   //----------------------------//


   /** */
   public function getMagie()
   {
      return $this->magie;
   }
}
