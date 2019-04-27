<?php

class artilce
{
    private $id;
    private $nom;
    private $idType;
    private $prix;
    private $description; 
    private $stock;
}    
    
    public function __construct($id,$nom,$idType,$prix,$description,$stock)
    {
          $this->setId($id);
          $this->setNom($nom);
          $this->setIdType($idType;
          $this->setPrix($prix);
          $this->setDescription($description);
          $this->setStock($stock);
    }

    function __destruct()
    {}
    
    public function getId()
    {
        return $this->id;
    }
    
    public function getNom()
    {
        return $this->nom;
    }
    
    public function getIdType()
    {
        return $this->idType;
    }
    
    public function getPrix()
    {
        return $this->prix;
    }
    public function getStock()
    {
        return $this->stock;
    }
    
   