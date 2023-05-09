<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<link rel="stylesheet" type="text/css" href="create_account.css">
	<title>créer un compte</title>
</head>
<body>
	

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
<?php
	
		if(isset($_POST['username']) and isset($_POST['user_email']) and isset($_POST['create_password']) and isset($_POST['verify_password'])){
			if ($_POST['create_password'] == $_POST['verify_password']){
				$hash = password_hash($_POST["password"], PASSWORD_DEFAULT)
				$sql = "insert into account(username,password) values('". $_POST['username']."','". $_POST['create_password']"') ";
				
				
			}
			else{
				echo('le mots de passe et la verification mots de passe ne correspondent pas');
			}
			
		}

	?>


	<div id="connect">
		<h4>Connexion</h4>
		<form method="post" , id="form_connect">
			<input type="text" placeholder="nom d'utilisateur" name="username">
			<input type="email" place holder="email" name="user_emair">
			<input type="password" placeholder="mot de passe" name="create_password">
			<input type="password" placeholder="vérification de mot de passe" name="verify_password">

			<button typr="submit">connexion</button>
		</form>
	</div>

</body>
</html>