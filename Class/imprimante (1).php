<?php

class Imprimante
{
	private $prix;
	private $id;

 
 public function __construct($prix,$id)
{
 $this->prix = $prix; 
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
 public function getId()
 {
 	return $this->id;
 }
 
 public function setId($id)
 {
 	 $this->id = $id;
 }

}