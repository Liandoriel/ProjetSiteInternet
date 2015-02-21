<?php 	
/* session start est a mettre avant tout code ou html afin de pouvoir le récuperer*/
session_start();
header('Content-Type: text/html; charset=UTF-8');
?>
<!DOCTYPE html>
<html>
<head>
	<title> Le Site Web de Neitsab </title>
	<meta name="description" content="Le Site Web de Neitsab on y trouve de tout des vidéos des images des liens !"/>
	<!-- Mots clé lisible par les robots -->
	<meta name="keyword" content="site web,Neitsab"/>
	<!-- Indexer la page au moteur de recherche et ne pas parcourir les liens présent dans la page -->
	<meta name="robots" content="index,nofollow"/>
	<!-- Largeur d'affichage pour les appareils mobiles -->
	<!--<meta name="viewport" content="width=device-width" />-->
	<meta name="viewport" content="initial-scale=1.0" />
	<!-- Intégration du css tout écran -->
	<link rel="stylesheet" type="text/css" href="css/style.css" media="screen">
	<!-- Intégration du css spécifique mobile -->
<!--
<link rel="stylesheet" type="text/css" href="mobile.css" media="screen and (max-width:640px)">
-->		
<script src="http://ajax.googleapis.com/ajax/libs/jquery/1.11.2/jquery.min.js">
</script>		
<script src="js/jquery.rotate.js"></script>
<script src="js/script.js"></script>
<!-- Pour la gestion des calendrier-->
<script src="http://ajax.googleapis.com/ajax/libs/jquery/1.3.2/jquery.min.js"></script>
<link rel="stylesheet" href="http://ajax.googleapis.com/ajax/libs/jqueryui/1.7.1/themes/base/jquery-ui.css" type="text/css" />
<script src="http://ajax.googleapis.com/ajax/libs/jqueryui/1.7.1/jquery-ui.min.js"></script>
<script src=""></script>

<!-- pour le format de la date-->
<link rel="stylesheet" href="//code.jquery.com/ui/1.11.3/themes/smoothness/jquery-ui.css">
<script src="//code.jquery.com/jquery-1.10.2.js"></script>
<script src="//code.jquery.com/ui/1.11.3/jquery-ui.js"></script>

<!-- Fin de la gestion des calendrier-->



<!--  Nécéssaire pour la balise google +-->
<script type="text/javascript" src="https://apis.google.com/js/plusone.js"></script>

<script>
$(document).ready(function(){
	$("#buttonUp").click(function(){
		$("#toMove").css("color", "black").slideUp(2000);
	});
	$("#buttonDown").click(function(){
		$("#toMove").css("color", "black").slideDown(2000);
	});

	$("#buttonUp").click(function(){
		$("#listeLangage").css("color", "black").slideUp(2000);
	});
	$("#buttonDown").click(function(){
		$("#listeLangage").css("color", "black").slideDown(2000);
	});
});
</script>
</head>

</head>
<body>
	<header> 
		<header id='logoSite'> 
		</header>
		<div id="TexteMenuSuperieur"> 
			<header id='catchPhrase'> 
			</header>					
		</div> 
		<div id="MenuSuperieur">
			<ul style="list-style-type:none"><!-- a = lien -->
				<li><a href="index.php?page=defaut"> Accueil</a></li>
				<li><a href="index.php?page=photos">Photos</a></li>
				<li><a href="index.php?page=audioVideo">Audio ou vidéo</a></li>
				<li><a href="index.php?page=evenement">Evénements</a></li>
				<li><a href="index.php?page=contact">Contacts</a></li>	 
				<li><a href="index.php?page=espacePro">Espace pro</a></li>
				<li><a href="index.php?page=utilisateur">Membres</a></li>					
				<li><a href="http://www.google.fr">Google</a></li>														
				<!--<li class="fb-like" data-href="https://www.facebook.com/pizzasupherb" data-send="true" data-layout="box_count" data-width="100" data-show-faces="true" data-font="arial"></li>-->
			</ul>	
		</div>						
	</header>
	<section style="float: right">
		<g:plusone align="right" href="http://www.example.com"></g:plusone>
	</section>
	<section class="clear"></section>
	<div  id="content">	
		<section>
			<?php
//Déclaration d'une variable
			$page = "defaut";
	// vérification si la variable existe
			if (isset($_GET['page'])){
		// Vérifie l'existance d'une page
				if (file_exists ('pages/'.$_GET['page'].'.php')){
					$page = $_GET['page'];
				}
			}
			include 'pages/'.$page.'.php';
			?>
		</section>
	</div>		


	<footer>
		<!--<div class="header"></div>-->	
		<div class="footer-links soyez-au-courant col-sm-2">
			<span>SOYEZ AU COURANT DES NOUVEAUTES</span>						
			<ul> 		
				<li><a href="https://www.facebook.com/bastien.vautier" target="_blank" class="facebook"><span class="link">Facebook</span></a></li>
				<li><a href="https://fr.pinterest.com/" target="_blank" class="pinterest"><span class="link">Pinterest</span></a></li>
				<li><a href="https://plus.google.com/u/0/112406168058095472464/posts" target="_blank" class="google plus"><span class="link">Google Plus</span></a></li>
				<li><a href="https://www.youtube.com/user/TheFineBros" target="_blank" class="youtube"><span class="link">YouTube</span></a></li>
				<li><a href="https://twitter.com/gameblog" target="_blank" class="twitter"><span class="link">Twitter</span></a></li>
				<li><a href="http://instagram.com/arianagrande/" target="_blank" class="instagram"><span class="link">Instagram</span></a></li>
				<li class="fb-like" data-href="https://www.facebook.com/pizzasupherb" scrolling="no" frameborder="0" allowTransparency="true" style="border:none"></li>	
			</ul>
		</div>											
	</footer>	
</body>
<div id="fb-root"></div>
<!-- Script permettand d'ajouter un bouton j'aime sur la page-->
<script>(function(d, s, id) {
	var js, fjs = d.getElementsByTagName(s)[0];
	if (d.getElementById(id)) return;
	js = d.createElement(s); js.id = id;
	js.src = "//connect.facebook.net/fr_FR/all.js#xfbml=1";
	fjs.parentNode.insertBefore(js, fjs);
}(document, 'script', 'facebook-jssdk'));</script>
<!-- Script permettand d'ajouter un bouton +1 de google plus-->
<script type="text/javascript">
(function() {
	var po = document.createElement('script'); po.type = 'text/javascript'; po.async = true;
	po.src = 'https://apis.google.com/js/plusone.js';
	var s = document.getElementsByTagName('script')[0]; s.parentNode.insertBefore(po, s);
})();
</script>
<!--  http://www.html5-css3.fr/html5/tutoriel-api-google-maps-geolocalisation-html5 -->

</html>