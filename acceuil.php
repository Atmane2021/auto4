<?php require_once('connexion.php');?>
<!DOCTYPE html>
<html >
<head>
<meta  charset="utf-8" />
<title>Auto4</title>


<style>
.myphoto{
  width: 50px;height: 50px;border-radius :50%; border:1px solid;

}
</style>
<link rel=" stylesheet"href="test.css"/>
</head>


<body>
<div class="imageback">
</div>
<div id="globl">
  <div id ="profil">
  <?php
  session_start();
  echo"Bienvenue   ".$_SESSION['monLogin']."<br>";
  $req="select * from utilisateurs where Login='" .$_SESSION ['monLogin']."'";
  $resultat=mysqli_query($cnAuto4,$req);
  $ligne=mysqli_fetch_assoc($resultat);
		
  ?>
<img src="<?php echo $ligne['my_photo'];?>" class="myphoto">
<br>
<a href="deconnecter.php">Deconnection</a>
</div>
<div id="tableaubord">
<?php include("tableaubord.php")?>
</div>



</body>
</html>