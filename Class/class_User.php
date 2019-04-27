<?php

	// DEFINITION CLASS HUMAIN:
	class User
	{
		
		// DEFINITION ATTRIBUTS
		
		//PRIVATE
		private $id;
		private $login;
		private $password;
		private $nom;
		private $prenom;

		
		//CONSTRUCT & DESTRUCT
		public function __construct($login,$password,$nom=null,$prenom=null)
		{
			$this->setLogin($login);
			$this->setPassword($password);
			$this->setNom($nom);
			$this->setPrenom($prenom);
		}
		
		public function __destruct()
		{
			
		}
		
		// getter & setter => Id
		public function getId()
		{
			return $this->id;
		}
		
		public function setId($id)
		{
			$this->id = $id;
		}
		
		// getter & setter => Login
		public function getLogin()
		{
			return $this->login;
		}
		
		public function setLogin($login)
		{
			$this->login = addsLashes($login);
		}
		
		// getter & setter => Password
		public function getPassword()
		{
			return $this->password;
		}
		
		public function setPassword($password)
		{
			$this->password = md5($password);
		}
		
		// getter & setter => Nom
		public function getNom()
		{
			return $this->nom;
		}
		
		public function setNom($nom)
		{
			$this->nom = addsLashes($nom);
		}
		
		// getter & setter => Prenom
		public function getPrenom()
		{
			return $this->prenom;
		}
		
		public function setPrenom($prenom)
		{
			$this->prenom = addsLashes($prenom);
		}
		
		// METHODES
		
		// FONCTION S'ENREGISTRER
		public function register($BDD)
		{
			$req = 'INSERT INTO Users(login,password,nom,prenom) VALUES("'.$this->getLogin().'","'.$this->getPassword().'","'.$this->getNom().'","'.$this->getPrenom().'")';
			$BDD->execute($req);
			
			if($BDD->bdo->errorInfo()[0] == 23000)
			{	
				echo '<script language="javascript">';
				echo 'alert("L\'adresse email est déja utilisé.")';
				echo '</script>';
			}
			else if($BDD->bdo->errorInfo()[0] == 00000)
			{
				$uid = $BDD->bdo->lastInsertId();
				$this->setId($uid);
				echo '<script language="javascript">';
				echo 'alert("Vous avez bien été enregistré.")';
				echo '</script>';
				$this->createSession();
			}
			else
			{
				echo '<script language="javascript">';
				echo 'alert("Une erreur est survenu.")';
				echo '</script>';
			}
		}
		
		// FONCTION LOG IN
		public function login($BDD) 
		{
			$req = 'SELECT * FROM users WHERE login LIKE "'.$this->getLogin().'" && password LIKE "'.$this->getPassword().'"';
			
			echo $req ;$oRes = $BDD->execute($req);
			if($BDD->bdo->errorInfo()[0] == "00000")
			{
				$res = $oRes->fetch();
				if ($res != NULL)
				{
				   $this->id = $res->id;
				   $this->login = $res->login;
				   $this->nom = $res->nom;
				   $this->prenom = $res->prenom;
				   $this->password = $res->password;
				   $this->createSession();
				   return(true);
				}
				else
				{
					return(false);
				}
			}
			else
			{
			   print_r($BDD->dbo->errorInfo());
			   return($BDD->dbo->errorInfo()[2]);
			}
       
		}
		
		public function createSession()
		{
			$_SESSION["login"] = $this->getLogin();
			$_SESSION["password"] = $this->getPassword();
			$_SESSION["uid"] = $this->getId();
		}
	
		// FONCTION LOG OUT
		public function logout()
		{
			session_destroy();
		}
		
		// FONCTION CHANGE PASSWORD
		public function changepwd()
		{
			
		}
		
		// FONCTION REINIT PASSWORD
		public function reinitpwd()
		{
			
		}
		
		
		// FONCTION UPDATE PROFIL
		public function updateprofil()
		{
			
		}
	}
?>