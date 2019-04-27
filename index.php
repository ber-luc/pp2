<!DOCTYPE HTML>
<html>

<?php
	session_start();
?>
	
	<head>
	
	
	<script
		src="https://code.jquery.com/jquery-3.3.1.min.js"
		integrity="sha256-FgpCb/KJQlLNfOu91ta32o/NMZxltwRo8QtmkMRdAu8="
		crossorigin="anonymous">
    </script>


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
			include("menu.php")
		?>
		
		<!-- T I T L E -->
		<h1>
				ChopTaPhoto
		</h1>
		
		<!-- T E X T E   S I   C O N N E C T E Y-->
		<p class="textez">
			<?php
		if (isset($_SESSION['login']) && $_SESSION['login'] != "")
		{
			echo "Bonjour ".$_SESSION['login'].".<br/><br/><br/>";
		}
		?>
		<!-- T I T R E   P R E S E N T A T I O N -->
		<h2 id="about">
			Présentation :
		</h2>
		
		 <br/>Nous sommes une petite startup avec un concept revolutionnaire:
		<br/> la location de borne photo pour tout vos evenements!
		<br/> Avec la borne <i>ChopTaPhoto</i>, vous pourez faire des photos de très bonne qualité pour un prix très bas!
		<br/><br/>
		</p>
		
		<!-- I M A G E   P R E S E N T A T I O N -->
		<img src="images/portrait2.png" alt="portrait2" id="portrait2"/>
		
	</body>
	
</html>