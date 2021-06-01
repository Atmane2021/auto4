<?php require_once('connexion.php');?>
<!DOCTYPE html>
<html >
<head>
<meta  charset=utf-8" >
<title>Auto4</title>
<link rel=" stylesheet"href="test.css">
</head>
<body>
<div id="container">
    <form name="formdelet"  class="formulaire" >
<p><a href="acceuil.php" class="submit">Tableau de Bord </a></p>

<?php
 if(isset ($_GET['supcar'])){
     $sup=$_GET ['supcar'];
     $reqDelete="DELETE FROM auto4 WHERE NOM_PRENOM= '$sup'";
     $resultat=mysqli_query($cnAuto4,$reqDelete);
 }

 if ($resultat){
     echo "<label style='text-align:center;color: #960406;'>La suppression a été correctement effectuée </label>";

 }
 else{
     echo "<label style='text-align:center;color: #960406;'>la suppression a echouée</label>";

 }



?>
</form>
</div>
</body>
</html>