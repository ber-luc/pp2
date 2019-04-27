<?php

class Photo
{
	public $favoris;
	public $nom;
	private $id;


public function __construct($imprimer,$nom,$id)
{
	$this->imprimer = addslashes($imprimer);
	$this->setImprimer($imprimer);
	$this->setNom($nom);
	$this->setId($id);
}
function __destruct()
{
}

public function getImprimer()
{
	return $this->imprimer;
}
public function setImprimer()
{
	$this->imprimer = $imprimer;
}

public function setID($id)
{
	$this->id = $id;
}
public function getID()
{
	return $this->id;
}

public function setNon()
{
$this->non = $nom;
}

public function getNom($nom)
{
	return $this->nom;
}
}