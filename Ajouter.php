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
    <form name="formAdd" action="" method="post" class="formulaire" enctype="multipart/form-data">
        <h2 align="center">Ajouter un nouveau client...</h2> 
        
         
        <label><b> Nom&Prenom </b></label>
        <input type="varchar" name ="txtNom" class="zonetext" placeholder="Entrer le nom du client" required  >

        <label><b>  N°de tel</b></label>
        <input type="double" name ="txtel" class="zonetext" placeholder="Entrer le numero de tel" required  >

        <label><b>  Pièces</b></label>
        <input type="varchar" name ="txtpc" class="zonetext" placeholder="Entrer le nom de la pièce" required  >

        <label><b>  N°Serie</b></label>
        <input type="varchar" name ="txtserie" class="zonetext" placeholder="Entrer le numero de série" required  >

        <label><b>  N°d'immat</b></label>
        <input type="varchar" name ="txtimm" class="zonetext" placeholder="Entrer le numero d'immatriculation" required  >


        <label><b>  Date de commande</b></label>
        <input type="date" name ="txtcommande" class="zonetext" placeholder="Entrer la date de la commande" required  >

        <label><b> Annee</b></label>
        <input type="double" name ="txtAnnee" class="zonetext" placeholder="Entrer l'annee" required  >

       
        <input type="submit" name="btadd" value="Ajouter" class="submit">
        <p><a href="acceuil.php" class="submit">Tableau de Bord</a></p>
        
        <label style="text-align:center;color: #960406;">
         <?php
         if(isset ($_POST['btadd'])){
            $ANNEE=$_POST['txtAnnee'];
            $nom=$_POST['txtNom'];
            $ser=$_POST['txtserie'];
            $imm=$_POST['txtimm'];
            $pc=$_POST['txtpc'];
            $cmd=$_POST['txtcommande'];
            $tel=$_POST['txtel'];
        $reqAdd="INSERT INTO auto4 (ANNEE,DATE_COMMANDE,NO_TEL,NOM_PRENOM,NUMERO_IMMATRICULATION,NUMERO_SERIE,PIECES) 
        values('$ANNEE','$cmd','$tel','$nom','$imm','$ser','$pc')";

        $resultat=mysqli_query($cnAuto4,$reqAdd);
        if ($resultat){
            echo"Insertion des données validés";

        }
        else{
            echo "Echec d Insertion des données";

        }
       
         }
         
         
         ?>
    </label>
     
    </form>
</div>

</body>
</html>