<?php
	class BDD
	{
		private $dbname;
		private $host;
		private $user;
		private $passwrd;
		public $bdo;
		
		public function __construct($dbname, $host, $user, $password)
		{
			$this->setDBName($dbname);
			$this->setHost($host);
			$this->setUser($user);
			$this->setPassword($password);
			$this->connexion();
		}
		
		// getter & setter => DBName
		public function getDBName()
		{
			return $this->dbname;
		}
		
		public function setDBName($dbname)
		{
			$this->dbname = addsLashes($dbname);
		}
		
		// getter & setter => Host
		public function getHost()
		{
			return $this->host;
		}
		
		public function setHost($host)
		{
			$this->host = addsLashes($host);
		}
		
		// getter & setter => User
		public function getUser()
		{
			return $this->user;
		}
		
		public function setUser($user)
		{
			$this->user = addsLashes($user);
		}
		
		// getter & setter => Password
		public function getPassword()
		{
			return $this->password;
		}
		
		public function setPassword($password)
		{
			$this->password = addsLashes($password);
		}
		
		// METHODES
		
		private function connexion()
		{
			$dsn = 'mysql:dbname='.$this->getDBName().';host='.$this->getHost();
			try
			{
				$this->bdo = new PDO($dsn, $this->getUser(), $this->getPassword());
				$this->bdo->setAttribute(PDO::ATTR_DEFAULT_FETCH_MODE, PDO::FETCH_OBJ);
			}
			catch (PDOException $e)
			{
				echo $e->getMessage();
			}
			
		}
		
		public function execute($req)
		{
			return($this->bdo->query($req));
		}
	}
?>