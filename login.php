<!DOCTYPE HTML>
<html>
<?php
	session_start();
	include("class/class_User.php");
	include("class/class_BDD.php");
?>
	
	<head>
	
		<meta charset="utf-8"/>
		<meta name="viewport" content="width=device-width, initial-scale=1">
		<link rel="icon" href="images/icon.ico" />
		
		<title> 
			ChopTaPhoto.fr 
		</title>
		
		<!-- G O O G L E   R E F S -->
		<link rel="canonical" href="francoissurmaportfolio.fr"/>
		<meta name="description" content="description"/>
		
		<!-- L I N K S -->
		<link rel="stylesheet" href="fichiercss.css" type="text/css"/>
		
		<!-- J Q U E R Y -->
		<script
			src="https://code.jquery.com/jquery-3.3.1.min.js"
			integrity="sha256-FgpCb/KJQlLNfOu91ta32o/NMZxltwRo8QtmkMRdAu8="
			crossorigin="anonymous">
        </script>
		
	</head>
	
	<body>
	
		<!-- M E N U -->
		<?php
			include("menu2.php")
		?>
		
		<!-- E X E C U T E   L O G I N -->
		
		<?php
			if(isset($_SESSION["login"]) && $_SESSION['password'] != "")
			{
				?>
					<script>document.location.href="index.php";</script>
				<?php
				
			}
			
			if(isset($_POST['login'],$_POST['password'])&& $_POST['login'] != "" && $_POST['password'] != "")
			{
				$usr = new User($_POST["login"], $_POST["password"]);
				$bdd = new BDD("ppe2", "localhost", "root", "");
				if($usr->login($bdd))
				{
					$usr->createSession();
				}
				else
				{
					echo "Utilisateur ou mot de passe inconnu";
				}
			}
			
			?><h1><?php
			if (isset($_SESSION["login"]) && $_SESSION["login"] != "")
			{
				print_r($_SESSION["login"]);
			}
			
			?></h1><?php
		?>
		
		<!-- L O G I N   F O R M -->
		
		<div class="login-form">
			<form action="" method="post">
				<h2 class="text-center">Log in</h2>       
				<div class="form-group">
					<input type="email" name="login" class="form-control" placeholder="Adresse Mail" required="required">
				</div>
				<div class="form-group">
					<input name="password" type="password" class="form-control" placeholder="Mot De Passe" required="required">
				</div>
				<div class="form-group">
					<button type="submit" class="btn btn-primary btn-block">Log in</button>
				</div>
				<div class="clearfix">
					<a href="#" class="pull-right">Mot de passe oublié?</a>
				</div>        
			</form>
			<p class="text-center"><a href="register.php">S'inscrire</a></p>
		</div>

	</body>
	
</html>