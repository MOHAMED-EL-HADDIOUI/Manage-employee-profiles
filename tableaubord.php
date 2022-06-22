<?php require_once('connexion.php');  ?>
<!doctype html>
<html>
<head>
<meta charset="utf-8">
<link rel="stylesheet" href="loccar_style.css" type="text/css"/>
<title>Tableau de bord</title>
<style>
	.photocar{
	width: 130px;
	height: 100px;
	border-radius: 5%;
	border: 1px solid ;
      }
	#conteur
     {
	margin-left : 65px; 
	width: 900px;
      }
	body {  
             color: #2b2c48;  
             font-family: "Jost", sans-serif;  
             background-image: url('https://media.istockphoto.com/photos/abstract-blurry-background-with-smoke-3d-render-picture-id1169375665?k=6&m=1169375665&s=170667a&w=0&h=QtQO65vVWDJbFTuPZIknaD0glFi3QE_m0a2wNrrMR0Q=');  
             background-repeat: no-repeat;  
             background-size: cover;  
             background-position: center;  
             background-attachment: fixed;  
             min-height: 100vh;  
             display: flex;  
             flex-wrap: wrap;
		     }  
</style>
</head>
<body>
<div id="conteur">
	<header>
    <div id="f">
    	<a href="index.php"><div class="P1"></br><b>Menu</b></div></a>
        <div class="P2"></div>
    	<a href="About.php"><div class="P3"></br><b>About</b></div></a>
        <div class="P4"></div>
    	<a href="Services.php"><div class="P5"></br><b>Services</b></div></a>
        <div class="P6"></div>
    	<a href="Projects.php"><div class="P7"></br><b>Projects</b></div></a>
        <div class="P8"></div>
    	<a href="Clients.php"><div class="P9"></br><b>Clients</b></div></a>
        <div class="P10"></div>
    	<a href="Contacts.php"><div class="P11"></br><b>Contacts</b></div></a>
    </div>
	</header>
</div>
<br>
<br>
<br>
<br>
<p><h1 align="center"><b>Le Profil</b></h1> 
<?php 
	$reqselect="select *from personne where PRENOM_PERSONNE='".$_SESSION['monLogin']."'";
	$resultat=mysqli_query($cnloccar,$reqselect);
?></p>
	<?php
	$ligne=mysqli_fetch_assoc($resultat);
	?>
    <div style="width: 70%;margin: 0 auto;margin-top: 10%; border-radius: 20px;">
	<form name="formUpdate" method="post" action="" class="formulaire" enctype="multipart/form-data">
		<br>
		<label style="margin: 30px 80px 40px 40px;"><b>NOM:</b></label>
		<input type="text" name="TXTNOM" class="zonetext" value="<?php echo $ligne['NOM_PERSONNE']?>" readonly style="margin: 20px;background-color:white;color: #003;padding: 14px 20px;margin: 8px 0 ;border: none;cursor: pointer;width: 30%;text-align: center;border-radius: 10px;"><br><br>
		<label style="margin: 30px 50px 40px 40px;"><b>PRENOM  : </b></label>
		<input type="text" name="TXTPRENOM" class="zonetext" value="<?php echo $ligne['PRENOM_PERSONNE']?>" readonly style="margin: 20px;background-color:white;color: #003;padding: 14px 20px;margin: 8px 0 ;border: none;cursor: pointer;width: 30%;text-align: center;border-radius: 10px;"><br><br>
		<label style="margin: 30px 60px 40px 20px;"><b>CIN:</b></label>
		<input type="text" name="TXTCIN" class="zonetext" value="<?php echo $ligne['CIN_PERSONNE']?>" readonly style="margin: 20px;background-color:white;color: #003;padding: 14px 20px;margin: 8px 0 ;border: none;cursor: pointer;width: 10%;text-align: center;border-radius: 10px;">
		<label style="margin: 30px 60px 40px 60px;"><b>SALAIRE  : </b></label>
		<input type="numbre" name="TXTSALAIRE" class="zonetext" value="<?php echo $ligne['SALAIRE_PERSONNE']?> DH" readonly style="margin: 20px;background-color:white;color: #003;padding: 14px 20px;margin: 8px 0 ;border: none;cursor: pointer;width: 15%;text-align: center;border-radius: 10px;"><br><br>
		<label style="margin: 30px 50px 40px 20px;"><b>TRAVAIL  : </b></label>
		<input type="text" name="TXTTRAVAIL" class="zonetext" value="<?php echo $ligne['TRAVAIL_PERSONNE']?>" readonly style="margin: 20px;background-color:white;color: #003;padding: 14px 20px;margin: 8px 0 ;border: none;cursor: pointer;width: 20%;text-align: center;border-radius: 10px;">
		<label style="margin: 30px 60px 40px 30px;"><b>VILLE  : </b></label>
		<input type="text" name="TXTVILLE" class="zonetext" value="<?php echo $ligne['VILLE_PERSONNE']?>" readonly style="margin: 20px;background-color:white;color: #003;padding: 14px 20px;margin: 8px 0 ;border: none;cursor: pointer;width: 15%;text-align: center;border-radius: 10px;"><br><br>
		<label style="margin: 30px 100px 40px 20px;"><b>GMAIL:</b></label>
		<input type="gmail" name="TXTGMAIL" class="zonetext" value="<?php echo $ligne['GMAIL_PERSONNE']?>" readonly style="margin: 20px;background-color:white;color: #003;padding: 14px 20px;margin: 8px 0 ;border: none;cursor: pointer;width: 40%;text-align: center;border-radius: 10px;"><br><br>
		<label style="margin: 20px 10px 40px 5px;"><b>STATUT PERSONNEL  : </b></label>
		<input type="text" name="TXTSTATUT" class="zonetext" value="<?php echo $ligne['STATUT_PERSONNE']?>" readonly style="margin: 20px;background-color:white;color: #003;padding: 14px 20px;margin: 8px 0 ;border: none;cursor: pointer;width: 11%;text-align: center;border-radius: 10px;">&nbsp;
		<label style="margin: 20px 10px 40px 5px;"><b>LIEU DE NAISSANCE  : </b></label>
		<input type="text" name="TXTLIEU" class="zonetext" value="<?php echo $ligne['LIEU_NAISSANCE']?>" readonly style="margin: 20px;background-color:white;color: #003;padding: 14px 20px;margin: 8px 0 ;border: none;cursor: pointer;width: 12%;text-align: center;border-radius: 10px;"><br><br>
		<label style="margin: 30px 100px 40px 20px;"><b>DATE DE NAISSANCE  : </b></label>
		<input type="date" name="TXTDATE" class="zonetext" value="<?php echo $ligne['DATE_NAISSANCE']?>" readonly style="margin: 20px;background-color:white;color: #003;padding: 14px 20px;margin: 8px 0 ;border: none;cursor: pointer;width: 20%;text-align: center;border-radius: 10px;"><br><br>
		<label style="margin: 20px 10px 40px 5px;"><b>TEL PERSONNEL  : </b></label>
		<input type="text" name="TXTTEL" class="zonetext" value="<?php echo $ligne['TEL_PERSONNE']?>" readonly style="margin: 20px;background-color:white;color: #003;padding: 14px 20px;margin: 8px 0 ;border: none;cursor: pointer;width: 15%;text-align: center;border-radius: 10px;">&nbsp;
		<label style="margin: 20px 10px 40px 5px;"><b>COMPTE FINANCIER  : </b></label>
		<input type="nombre" name="TXTCOMPTE" class="zonetext" value="<?php echo $ligne['COMPTE_FINANCIER']?> DH" readonly style="margin: 20px;background-color:white;color: #003;padding: 14px 20px;margin: 8px 0 ;border: none;cursor: pointer;width: 15%;text-align: center;border-radius: 10px;"><br><br>
		<label style="margin: 30px 30px 30px 20px;"><b>ADRESSE PERSONNEL  : </b></label>
		<input type="gmail" name="TXTADRESSE" class="zonetext" value="<?php echo $ligne['ADRESSE_PERSONNE']?>" readonly style="margin: 20px;background-color:white;color: #003;padding: 14px 20px;margin: 8px 0 ;border: none;cursor: pointer;width: 55%;text-align: center;border-radius: 10px;"><br><br>
		<div align="center" >
		<a href="Supprimer.php?supcar=<?php echo $ligne['CIN_PERSONNE']; ?>" style="margin:120px;"><img src="IMAGES/supprimer.png" width="50px" height="50px"></a>
		<a href="Modifier.php?mod=<?php echo $ligne['CIN_PERSONNE']; ?>" style="margin:120px;"><img src="IMAGES/accessories-text-editor-icon.png" width="50px" height="50px"></a>
	</div>
	</form>
	</div>
	
</body>
</html>
