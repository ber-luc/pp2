<?php

class panier
{
    private $article;
    private $prix_total;
   private $id;
   


 public function __construct($article, $prix_total,$id)
{
    $this->article = $article;
    $this->prix = $prix_total; 
    $this->id = $id;
   
}
 function __destruct() 
 {
 }

 public function getPrix()
 {
    return $this->prix_total;
 }
 
 public function setPrix($prix_total)
 	{ 
         $this->prix_total = $prix_total;
 }
 public function getArticle()
 {
     return $this->article = $article;
 }
 public function setArticle($article)
 {
     $this->article = $article;
 }
public function getId()
{
    return $this->id = $id;
}
public function setId($id)
{
    $this->id = $id;
}


}

