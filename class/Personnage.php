<?php

class Personnage
{
   private $nom;
   private $force;
   private $santé;

   //------------------------------//
   ////////////GETTERS//////////////
   //----------------------------//

   /**
    * return $nom
    * type : string
    */
   public function getNom()
   {
      return $this->nom;
   }

   /**
    * return $force
    * type : integer
    */
   public function getForce()
   {
      return $this->force;
   }

   /**
    * return $santé
    * type : integer
    */
   public function getSanté()
   {
      return $this->santé;
   }


   //------------------------------//
   ////////////SETTERS//////////////
   //----------------------------//






   public function seDeplacer()
   {
   }


   public  function parler()
   {
   }
}
