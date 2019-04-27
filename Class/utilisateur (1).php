<?php

class utilisateur
{
private $nom;
private $prenom;
private $mail;
private $civilite;
private $adresse;
private $id;
public $login;
public $code_postal;
private $id_articles_photos;
private $id_reservation;
private $id_panier;





public function __construct($nom, $prenom, $mail, $civilte, $adresse,$id,$login,$code_postal,$id_articles_photos,$id_reservation,$id_panier)

{

        $this->nom = $nom;
        $this->prenom = $prenom;
        $this->mail = $mail;
        $this->civilte = $civilte;
        $this->adresse = $adresse;
        $this->id = $id;
        $this->login = $login;
        $this->code_postal = $code_postal;
        $this->id_articles_photos;
        $this->id_reservation = $id_reservation;
        $this->id_panier = $id_panier;
      

}

public function getNom()
    {
        return $this->nom;
    }

    public function getPrenom()
    {
        return $this->prenom;
    }

   public function getMail()
    {
        return $this->mail;
    }

    public function getCivilite()
    {
        return $this->civilite;
    }
    
    public function getAdresse()
    {
        return $this->adresse;
    }
    public function getId()
    {
        return $this->id;
    }
    public function getLogin()
    {
        return $this->login;
    }
    public function getCode_postal()
    {
        return $this->code_postal;
    }
    public function getId_articles_photos()
    {
        return $this->id_articles_photos;
    }
    public function getId_reservation()
    {
        return $this->id_reservation;
    }
    public function getId_panier()
    {
        return $this->id_panier;
    }
     public function setNom($nom)
    {
        $this->nom = $nom;
    }

    public function setPrenom($prenom)
    {
        $this->prenom = $prenom;
    }

    public function setMail($mail)
    {
        $this->mail = $mail;
    }

    public function setCivilite($civilte)
    {
        $this->civilte = $civilte;
    }

    public function setAdresse($adresse)
    {
        $this->adresse = $adresse;
    }
    public function setId($id)
    {
        $this->id = $id;
    }
    public function setLogin($login)
    {
        $this->login = $login;
    }
    public function setCode_postal($code_postal)
    {
        $this->code_postal = $code_postal;
    }
    public function setId_articles_photos($id_articles_photos)
    {
        $this->id_articles_photos;
    }
    public function setId_reservation($id_reservation)
    {
        $this->id_reservation;
    }
    public function setId_panier($id_panier)
    {
        $this->id_panier;
    }
}








    