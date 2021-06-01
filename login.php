<?php require_once('connexion.php');?>
<!DOCTYPE html>
<html >
<head>
<meta  charset=utf-8" />
<title>Auto4</title>
<link rel=" stylesheet"href="test.css"/>
</head>

<body>
<div id="container">
 <form action="" method="post" class="formulaire">
 <h1>Connexion</h1>
 <label><b>Nom d'utilisateur: </b></label>
 <input type="text" placeholder="Entrer le nom d'utilisateur" name="txtlogin" required class="zonetext">
 
 <label><b>Mot de passe: </b></label>
 <input type="password" placeholder="Entrer le mot de passe" name="txtpw" required class="zonetext">
 <input type="submit" name="btlogin" value="Login" id="submit" class="submit" >
 <?php
 if(isset ($_POST['btlogin'])){
	
	$req="select * from utilisateurs where Login='" .$_POST ['txtlogin']." ' and motPasse='".$_POST ['txtpw']."'";
	
	if($resultat=mysqli_query($cnAuto4,$req))
	
	{
		$ligne=mysqli_fetch_assoc($resultat);
		if($ligne!=0){
			session_start();
			$_SESSION['monLogin']=$_POST['txtlogin'];
			header("location:acceuil.php");	
		}

	else {
			echo "<font color='#F0001D'>Login ou mot de passe est invalide</font>";
		}
		
	}
	
 }
 ?>
 </form>
 </div>
</body>
</html>