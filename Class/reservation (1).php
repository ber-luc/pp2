<?php

class Reservation
{
	public $debut;
	public $fin; 
	private $prix;
	private $id;


function __construct($debut, $fin, $prix,$id)
{
	$this->setDebut($debut);
	$this->setFin($fin);
	$this->setPrix($prix);
	$this->setId($id);
}

function __destruct()
{}

public function getDebut()
{
	return $this->debut;
}
public function getFin()
{
	return $this->fin;
}
public function getPrix()
{
	return $this->prix;
}
public function setId($id)
{
	$this->id = $id;
}
public function getId()
{
	return $this->id;
}
}