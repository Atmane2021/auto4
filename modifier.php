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
    <form name="formUpdate" action="" method="post" class="formulaire" enctype="multipart/form-data">
        <h2 align="center">Mettre à jour un client...</h2> 
        
         
        <label><b> Nom&Prenom </b></label>
        <input type="varchar" name ="txtNom" class="zonetext" value ="<?php echo $_GET['mod'] ?>" readonly  >

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

       
        <input type="submit" name="btmod" value="Mettre a jour" class="submit">
        
        <p> <a href="acceuil.php" class="submit">Tableau de Bord</a></p>
        
        <label style="text-align:center;color: #360001;">

        <?php
         if(isset ($_POST['btmod'])){
            $ANNEE=$_POST['txtAnnee'];
            $nom=$_POST['txtNom'];
            $ser=$_POST['txtserie'];
            $imm=$_POST['txtimm'];
            $pc=$_POST['txtpc'];
            $cmd=$_POST['txtcommande'];
            $tel=$_POST['txtel'];
            $modifier=$_GET['mod'];
        $reqUp="UPDATE auto4  SET NUMERO_IMMATRICULATION='$imm', NUMERO_SERIE='$ser',PIECES='$pc',ANNEE='$ANNEE',NO_TEL='$tel' ,
        DATE_COMMANDE='$cmd' where NOM_PRENOM='$modifier'";
        

        $resultat=mysqli_query($cnAuto4,$reqUp);
        if ($resultat){
            echo "<label style='text-align:center;color: #360001;'>Mise a jour des données Validés </label>";
       
        }
        else{
            echo "<label style='text-align:center;color: #960406;'>Echec de modification des données</label>";
        }


    }
         
         
    ?>
</label>

</form>
</div>

</body>
</html>