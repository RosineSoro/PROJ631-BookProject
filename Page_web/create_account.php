
	
<style>
	<?php include("create_account.css"); ?>
</style>
<?php
	
		if(isset($_POST['username']) and isset($_POST['create_password']) and isset($_POST['verify_password']) and isset($_POST['description'])){
			if ($_POST['create_password'] == $_POST['verify_password']){
				$hash = md5($_POST["create_password"]);
				$sql = "insert into account(username,password,description) values('". $_POST['username']."','".$hash."','".$_POST['description']."') ";
				$sqlexec = $db ->prepare($sql);
            	$sqlexec ->execute();
				header("http://localhost/Page_web/Base_page.php?page=connect/");
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
