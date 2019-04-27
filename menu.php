<!DOCTYPE HTML>
<html>

<?php
	//session_start();
?>

	<body>

		<!-- M E N U B A R-->
		<ul class="menubar" id="menubar">
			<li><a id="about_button" href="./index.php">A propos</a></li>
			<li><a id="product_button">Produits</a></li>
			<li><a id="reservation_button">Reservation</a></li>
			<li><a id="image_button" href="./image.php">Image</a></li>
			<li><a id="contact_button">Contact</a></li>

		<!-- L O G I N   B U T T O N-->
		<?php
		if (isset($_SESSION['login']) && $_SESSION['login'] != "")
		{
			?>
			<form method="get" action="login.php">
				<button class="login_button" id="logout_button" style="vertical-align:middle"><span>Log Out </span></button>
			</form>

			<script>
				 $(document) .ready(function(){
				 $("#logout_button").click (function()
				 {
					 <?php
					session_destroy();
					?>
				 });
				 }); 
			 </script>
			 <?php
		}
		else
		{
			?>
			<form method="get" action="login.php">
				<button class="login_button" id="login_button" style="vertical-align:middle"><span>Log In </span></button>
			</form>
			<?php
		}
		?>
		</ul>

		<script>
		$("#about_button").click(function()
		{
			$([document.documentElement, document.body]).animate({
				scrollTop: $("#about").offset().top
			}, 1000);
		});
		$("#product_button").click(function()
		{
			$([document.documentElement, document.body]).animate({
				scrollTop: $("#product").offset().top
			}, 1000);
		});
		$("#reservation_button").click(function()
		{
			$([document.documentElement, document.body]).animate({
				scrollTop: $("#reservation").offset().top
			}, 1000);
		});
		$("#contact_button").click(function()
		{
			$([document.documentElement, document.body]).animate({
				scrollTop: $("#contact").offset().top
			}, 1000);
		});
		</script>

		<!-- S C R I P T   M E N U   S C R O L L -->
		<script>
			var prevScrollpos = window.pageYOffset;
			window.onscroll = function()
			{
				var currentScrollPos = window.pageYOffset;
				if (prevScrollpos > currentScrollPos)
				{
					document.getElementById("menubar").style.top = "-26px";
					document.getElementById("login_button").style.top = "10px";
				}
				else
				{
					document.getElementById("menubar").style.top = "-105px";
					document.getElementById("login_button").style.top = "-69px";
				}
				prevScrollpos = currentScrollPos;
			}
		</script>

	</body>

</hrml>
