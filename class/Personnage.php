<?php

class Personnage
{
   private $nom;
   private $force;
   private $santé;

   //-----------------------------------//
   ////////////CONSTRUCTEUR//////////////
   //---------------------------------//

   public function __construct($nom, $force, $santé)
   {
      $this->setNom($nom);
      $this->setForce($force);
      $this->setSanté($santé);
   }

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

   /*
    * set value $nom
    * type: string
    */
   public function setNom(string $nom)
   {
      $this->nom = $nom;
   }

   /**
    * set value $force
    * type : integer
    */
   public function setForce(int $force)
   {
      $this->force = $force;
   }

   /**
    * set value $santé
    * type : integer
    */
   public function setSanté(int $santé)
   {
      $this->santé = $santé;
   }

   //-------------------------------------------//
   ////////////METHODES SPECIFIQUES//////////////
   //-----------------------------------------//



   public function seDeplacer()
   {
   }


   public  function parler()
   {
   }
}
