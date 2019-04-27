<?php
 
class Users
{
    public  $login;
    public  $nom;
    public  $prenom;
    private $password;
 
    public function __construct($login, $password, $nom, $prenom)
    {
        $this->login = addslashes($login);
        $this->nom = addslashes($nom);
        $this->prenom = addslashes($prenom);
        $this->setPassword($password);
    }
 
    function __destruct()
    {}
 
    public function getPassword()
    {
        return $this->password;
    }
 
    public function setPassword($password)
    {
        $this->password = md5($password);
    }
 
    public function        enregistrer($BDD)
    {
        $req = 'INSERT INTO users(login,nom,prenom,mdp) VALUES("'
        .$this->login.'","'.$this->nom.'","'
        .$this->prenom.'","'.$this->getPassword().'")';
        $BDD->executer($req);
        if($BDD->dbo->errorInfo()[0] == 23000)
            echo "Vous poss&eacute;dez d&eacute;j&agrave; un compte avce l'adresse ". $this->login;
    }
 
}