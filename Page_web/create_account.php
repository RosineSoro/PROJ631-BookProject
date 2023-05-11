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
	$db = new PDO('mysql:host=localhost;dbname=proj631;charset=utf8', 'root', '');
	$conn = @mysqli_connect("localhost", "root", "");    
	mysqli_select_db($conn, "proj631"); 
}
catch (Exception $e)
{
       die('erreur : ' . $e->getMessage());
}
?>
<?php
	
		if(isset($_POST['username']) and isset($_POST['create_password']) and isset($_POST['verify_password']) and isset($_POST['description'])){
			if ($_POST['create_password'] == $_POST['verify_password']){
				$hash = password_hash($_POST["create_password"], PASSWORD_DEFAULT);
				$sql = "insert into account(username,password,description) values('". $_POST['username']."','".$hash."','".$_POST['description']."') ";
				$result = mysqli_query($conn, $sql) or die("Requête invalide: ". mysqli_error()."\n".$sql);
				echo('bien ajouté !');
			}
			else{
				echo('le mot de passe et la verification du mot de passe ne correspondent pas');
			}
			
		}

	?>


	<div id="connect">
		<h4>Création de compte</h4>
		<form method="post" , id="form_connect">
			<input type="text" placeholder="nom d'utilisateur" name="username">
			<input type="password" placeholder="mot de passe" name="create_password">
			<input type="password" placeholder="vérification de mot de passe" name="verify_password">
			<input type="text" placeholder="description" name="description">
			<button typr="submit">créer</button>
		</form>
	</div>

</body>
</html>