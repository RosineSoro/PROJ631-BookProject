<!DOCTYPE html>


<html lang="fr"> 

  

   <head>
		  <title>Page d'accueil</title>
	
		  <!--definition de l encodage-->
		  <meta charset="UTF-8">
		  <!--mise en lien du fichier html avec le fichier css-->
		  <link rel="stylesheet" type="text/css" href="pageAcceuil.css">
		  <!--recuperer l'icone de recherche-->
	      <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
		  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
   </head> 

   <body>
   	<div id="content
	
	        <img src="logo\MouthfulReadersLogo.png" alt="Logo">

	   	<?php
				try
				{
					$db = new PDO('mysql:host=localhost;dbname=rosis;charset=utf8', 'root', '');
				}
				catch (Exception $e)
				{
				       die('erreur : ' . $e->getMessage());
				}
		

				if( !isset($_GET["page"]) ) { 
		        $page=0;
		      }else{
		        $page=$_GET["page"];

		      }
	    ?>

		<h3>MOUTHFUL Readers</h3>

        <nav>
		
      
        
			<div class="search-container">
				<form class="search" action="#" method="GET">
					<input type="text" class="search-bar" placeholder="Titre,Thèmes,Livres,..." name="search">
					<button type="submit" class="search-button" name="submitSearch"><i class="fa fa-search"></i></button>
				</form>	
			</div>
			
			<div class="dropdown">
				<button class="dropbtn">
					<span>Découvrir </span>
					<i class="fa fa-caret-down"></i>
				</button>
				<div class="dropdown-content">
					<?php

						if( !isset($_GET["page"]) ) { 
							$page=0;
						}else{
							$page=$_GET["page"];
						}
						//on défintit la une variable accessible par $_GET nommé page qui donnera le nom à l'url

							echo("<a href=\"?page=livre\">Livres</a>\n");
							echo("<a href=\"#\">Thèmes</a>\n");
							echo("<a href=\"?page=trend/livre\">Tendance</a>\n");
							echo("<a href=\"#\">Récents</a>\n");
					echo("</div>");
					?>
			</div>

			
			<div class="user-container">
				<button type = "submit" name = "submitConnection">
				<i class="fa fa-user icon"></i>
				Se connecter
				</button>
			</div>
      </nav>
	    	<?php
			// quand un fichier nommé de la même façon que la valeur donné à page je l'inclus
				if( file_exists($page.".php") ){ 

						include($page.".php");
				}
				else if(str_contains($page, "trend")){
					include("trend.php");
				}
				//si ce fichier n'existe pas alors on inclus le fichier php un livre qui est la page de chacun des livre si le nom de la page contient "livre"
				else if(str_contains($page, "livre")){
					include("un_livre.php");
				}
				//sinon on inclus le carroussel sur la page d'accueille
				else{
					include("page_0.php");
				}
			?>
      </div>
   </body>


</html>
