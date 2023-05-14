<style> <?php include("form_connect.css");?> </style>


<?php
	$verif = "";
		if(isset($_POST['user']) and isset($_POST['password']) and $_POST['user']!="" and $_POST['password']!=""){
			
			
			

			$hash = md5($_POST["password"]);
			echo($hash);
			$sql = "select * from account where username = '".$_POST['user'] ."' and password ='". $hash ."'";
			$sqlexec = $db ->prepare($sql);
            $sqlexec ->execute();
            if($result = $sqlexec ->fetch()){
				$_SESSION['username'] = $_POST['user'];
				echo($_SESSION["username"]);
				$_SESSION['id_user']= $result['id_acc'];
				$verif="";
				/*header('Location: http://localhost/Page_web/Base_page.php');*/
			}
			else{
				$verif = "nom d'utilisateur ou mot de passe incorrect";
			}
		}
		else{
			$verif="veuillez renseigner tous les champs";
		}
		

	?>

	<div id="content">
	
		<img src="logo/logo_connexion.jpg" alt="petit bonhomme de connection" id="img_log">
		
		<div id="connect">
			<h4>Connexion</h4>
			<?php echo("<span>".$verif."</span>");?>
			<form method="post" action="http://localhost/Page_web/Base_page.php?page=connect/" id="form_connect">
				<input type="text" placeholder="nom d'utilisateur" name="user">
				<input type="password" placeholder="mot de passe" name="password">
				<button type="submit">connexion</button>
			</form>
		</div>
		
		<a id="create_account" href="?page=create_account">Créer un compte</a>
	</div>

