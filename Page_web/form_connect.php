<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<link rel="stylesheet"  href="form_connect.css">
	<title>Page de connexion</title><i class="fas fa-search"></i>
</head>
<body>

	<?php
try
{
	$db = new PDO('mysql:host=localhost;dbname=rosis;charset=utf8', 'root', '');
}
catch (Exception $e)
{
       die('erreur : ' . $e->getMessage());
}
?>

<?php
	
		if(isset($_POST['user']) and isset($_POST['password'])){
			$hash = password_hash($_POST["password"], PASSWORD_DEFAULT);
			$sql = "select username,password from account where user = '".$_POST['user'] ."' and password ='". $hash ."'";
			echo("<h1>".$hash."</h1>");
		}

	?>

	<div id="content">
	
		<h1>Titre</h1>
		<a href="https://openclassrooms.com/fr/"><img src="logo/logo_connexion.jpg" alt="petit bonhomme de connection"></a>
		
		<div id="connect">
			<h4>Connexion</h4>
			<form method="post" action="http://localhost/Page_web/form_connect.php" id="form_connect">
				<input type="text" placeholder="nom d'utilisateur" name="user">
				<input type="password" placeholder="mot de passe" name="password">
				<button type="submit">connexion</button>
			</form>
		</div>
		
		<a id="create_account" href="creer_un_compte.html">Créer un compte</a>
	</div>



</body>
</html>