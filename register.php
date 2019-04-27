<!DOCTYPE HTML>
<html>
<?php
	session_start();
?>
	
	<head>
		<?php
			if(isset($_SESSION["login"]) && $_SESSION['password'] != "")
			{
				?>
					<script>document.location.href="index.php";</script>
				<?php
				
			}
			
			include("Class/class_User.php");
			include("Class/class_BDD.php");
		?>
	
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
			include("menu2.php");
		?>
	
		<!-- E X E C U T E   R E G I S T E R -->
		
		<?php
			if(isset($_POST['nom'],$_POST['prenom'],$_POST['email'],$_POST['password'])
				&& ($_POST['nom'] != "" && $_POST['prenom'] != "" && $_POST['email'] != "" && $_POST['password'] != ""))
			{
				$bdd = new BDD("ppe2","localhost","root","");
				$usr = new User($_POST['email'],$_POST['password'],$_POST['nom'],$_POST['prenom']);
				$usr->register($bdd);
			}	
		?>
				
				
		<!-- L O G I N   F O R M -->
		
		<div class="login-form">
			<form action="" method="post">
				<h2 class="text-center">S'enregistrer</h2>       
				<div class="form-group">
					<input type="email" name ="email" class="form-control" placeholder="Adresse Mail" required="required">
				</div>
				<div class="form-group">
					<input type="password" name="password" class="form-control" placeholder="Mot De Passe" required="required">
				</div>
				<div class="form-group">
					<input type="text" name="nom" class="form-control" placeholder="Nom" required="required">
				</div>
				<div class="form-group">
					<input type="text" name="prenom" class="form-control" placeholder="Prenom" required="required">
				</div>
				<div class="form-group">
					<button type="submit" class="btn btn-primary btn-block">S'enregistrer</button>
				</div>
				<div class="clearfix">
				</div>        
			</form>
		</div>

	</body>
	
</html>