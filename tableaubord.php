<?php require_once('connexion.php');?>
<!DOCTYPE html>
<html >
<head>
<meta  charset=utf-8" >
<title>Auto4</title>
<link rel=" stylesheet"href="test.css">
</head>
<body>
<p><h1><b>Liste des clients</b></h1></p>
<?php
$reqSelect="select * from auto4 ";
$resultat=mysqli_query($cnAuto4,$reqSelect);
$nbr=mysqli_num_rows ($resultat);
echo"<p> Total:     <b>" .$nbr.   "</b>  clients...</p>";

?>
</p>
<p><a href="Ajouter.php"><img src="image/ajouter.png"  width="50px" height="50px"></a></p>
<table width="100%" border="1">
<tr>
    <th>nom&prenom </th>
    <th>N°Seire </th>
    <th>N°d'immat</th>
    <th>Date de commande</th>
    <th>Pieces</th>
    <th>N° de Tel </th>
    <th>Supprimer</th>
    <th>Modifier</th>
</tr>
<?php
while ($ligne=mysqli_fetch_assoc($resultat))
{
?>
    <tr>
       <td><?php echo $ligne['NOM_PRENOM'];?></td>
       <td><?php echo $ligne['NUMERO_SERIE'];?></td>
       <td><?php echo $ligne['NUMERO_IMMATRICULATION'];?></td>
       <td><?php echo $ligne['DATE_COMMANDE'];?></td>
       <td><?php echo $ligne['PIECES'];?></td>
       <td><?php echo $ligne['NO_TEL'];?></td>
       <td><a href="supprimer.php?supcar=<?php echo $ligne ['NOM_PRENOM'];?>"><img src="image/supprimer.png"  width="50px" height="50px"></a></td>
       <td><a href="modifier.php? mod=<?php echo $ligne['NOM_PRENOM'];?>"><img src="image/modifier.png"  width="50px" height="50px"></a></td>
       
    </tr>
    
<?php
}
?>

</table>
</body>
</html>