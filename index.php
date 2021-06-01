<?php require_once('connexion.php');?>
<!DOCTYPE html>
<html >
<head>
<meta  charset=utf-8" />
<title>Auto4</title>
<link rel=" stylesheet"href="test.css"/>
</head>


<body>
<div id="entete">
<div class="imageback">
<a href="login.php" class="login">Login</a>

</div>
	<p class="nomsite">Auto4</p>
	<div id="formulaire">
 		<form name="formulaire" method="post" action="">
			<input id="motcle" type="text" name="motcle" placeholder="recherche par numéro de serie..."/>
				   <input class="btfind" type="submit" name="btsubmit" value="recherche"/>
				   
				   
		</form>
	</div>
	
	
	</div>
   <div id="article">
	<?php
	if(isset ($_POST['btsubmit'])){
	$mc=$_POST['motcle'];
	

	$reqSelect="select* from auto4 where NUMERO_SERIE like '%$mc%' ";
	}
	else{ 
		$reqSelect="select * from auto4 ";
		
	}
		$resultat=mysqli_query($cnAuto4,$reqSelect);
		$nbr=mysqli_num_rows ($resultat);
		while ($ligne=mysqli_fetch_assoc($resultat))
	{



		?>
	
	
		<div class="test">
			<div class="test1">
			<p> nom&prenom :<?php  echo $ligne ['NOM_PRENOM'];?><br/>
			 N°Seire :<?php  echo $ligne ['NUMERO_SERIE'];?><br/>
			 N°d'immat: <?php  echo $ligne ['NUMERO_IMMATRICULATION'];?><br/>
			 Date de commande: <?php  echo $ligne ['DATE_COMMANDE'];?><br/>
			Annee: <?php  echo $ligne ['ANNEE'];?><br/>
			Pieces: <?php  echo $ligne ['PIECES'];?><br/>
			N° de Tel: <?php  echo $ligne ['NO_TEL'];?><br/>
	</p>
	</div>
		<div>

		<?php }?>

	</div>
	
	
</body>
</html>