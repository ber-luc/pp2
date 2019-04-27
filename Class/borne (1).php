<?php

class borne
{
    public $commande;
    private $prix;
    private $livraison;
    private $id;

 
 public function __construct($commande, $prix, $livraison,$id)
{
    $this->$commande = $commande;
    $this->prix = $prix; 
    $this->livraison = $livraison;
    $this->id = $id;
}
 function __destruct() 
 {
 }

 public function getPrix()
 {
    return $this->prix;
 }
 
 public function setPrix($prix)
 	{ 
         $this->prix = $prix;
 }
 public function getCommande()
 {
     return $this->commande = $commande;
 }
 public function setCommande($commande)
 {
     $this->commande = $commande;
 }
 public function getLivraison()
 {
     return $this->livraison = $livraison;
 }
 public function setLivraison($livraison)
 {
     $this->livraison = $livraison;
 }
 public function getId()
 {
     return $this->id = $id;
 }
 public function setID($id)
 {
     $this->id = $id;
 }
}