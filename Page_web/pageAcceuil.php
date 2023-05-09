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
				$db = new PDO('mysql:host=localhost;dbname=projet_livre;charset=utf8', 'root', '');
			}
			catch (Exception $e)
			{
			       die('erreur : ' . $e->getMessage());
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
					<a href="#">Livres</a>
					<a href="#">Thèmes</a>
					<a href="#">Tendance</a>
					<a href="#">Récents</a>
              </div>
        </div>

		
		<div class="user-container">
		      <button type = "submit" name = "submitConnection">
			  <i class="fa fa-user icon"></i>
			  Se connecter
			  </button>
         </div>
      </nav>

         <div id="caroussel">
         	<?php 
         	$sql ="select * from book Limit 10";
         	$sqlexec = $db->prepare($sql);
         	$sqlexec ->execute();
         	$result = $sqlexec ->fetchAll();
         	foreach ($result as $row ) {
         		echo("<div class='book'><img src='".$row['img']."' class='book_cover'><br><h4 class='book_title'>".$row['title']."</h4><br></div>");

         	}

         		?>
         </div>
      </div>
   </body>


</html>

