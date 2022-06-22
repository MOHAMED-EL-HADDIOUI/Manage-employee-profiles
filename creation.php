<?php require_once("connexion.php"); ?>
<!doctype html>
<html>
<head>
<meta charset="utf-8">
<link rel="stylesheet" href="loccar_style.css" type="text/css"/>
<title>Location des Voitures</title>
	<style>
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
		table{
			margin-left: 100px;
			margin-right: 100px;
			width: 90%;

		}
		.instgrame{
			width: 45px;
			height: 40px;
			border-radius: 20px;
		}
		#contrainer{
	    width: 80%;
	    margin: 0 auto;
	    margin-top: 10%;}
	
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
<div id="contrainer">
	<form name="formUpdate" method="post" action="" class="formulaire" enctype="multipart/form-data">
		<h2 align="center"><b>Creation une Compte...</b></h2>
		<label style="margin: 30px 80px 40px 40px;"><b>NOM:</b></label>
		<input type="text" name="TXTNOM" class="zonetext" placeholder="Entrer Le NOM ici ..."  style="margin: 20px;background-color:white;color: #003;padding: 14px 20px;margin: 8px 0 ;border: none;cursor: pointer;width: 30%;text-align: center;border-radius: 10px;"><br><br>
		<label style="margin: 30px 50px 40px 40px;"><b>PRENOM  : </b></label>
		<input type="text" name="TXTPRENOM" class="zonetext" placeholder="Entrer Le PRENOM ici ..."  style="margin: 20px;background-color:white;color: #003;padding: 14px 20px;margin: 8px 0 ;border: none;cursor: pointer;width: 30%;text-align: center;border-radius: 10px;"><br><br>
		<label style="margin: 30px 60px 40px 20px;"><b>CIN:</b></label>
		<input type="text" name="TXTCIN" class="zonetext" placeholder="Entrer Le CIN ici ..." style="margin: 20px;background-color:white;color: #003;padding: 14px 20px;margin: 8px 0 ;border: none;cursor: pointer;width: 10%;text-align: center;border-radius: 10px;">
		<label style="margin: 30px 60px 40px 60px;"><b>SALAIRE  : </b></label>
		<input type="numbre" name="TXTSALAIRE" class="zonetext" placeholder="Entrer Le SALAIRE EN DH ici ..."  style="margin: 20px;background-color:white;color: #003;padding: 14px 20px;margin: 8px 0 ;border: none;cursor: pointer;width: 15%;text-align: center;border-radius: 10px;"><br><br>
		<label style="margin: 30px 50px 40px 20px;"><b>TRAVAIL  : </b></label>
		<input type="text" name="TXTTRAVAIL" class="zonetext" placeholder="Entrer Le TRAVAIL ici ..."  style="margin: 20px;background-color:white;color: #003;padding: 14px 20px;margin: 8px 0 ;border: none;cursor: pointer;width: 20%;text-align: center;border-radius: 10px;">
		<label style="margin: 30px 60px 40px 30px;"><b>VILLE  : </b></label>
		<input type="text" name="TXTVILLE" class="zonetext" placeholder="Entrer La VILLE ici ..."  style="margin: 20px;background-color:white;color: #003;padding: 14px 20px;margin: 8px 0 ;border: none;cursor: pointer;width: 15%;text-align: center;border-radius: 10px;"><br><br>
		<label style="margin: 30px 100px 40px 20px;"><b>GMAIL:</b></label>
		<input type="text" name="TXTGMAIL" class="zonetext" placeholder="Entrer Le GMAIL ici ..."  style="margin: 20px;background-color:white;color: #003;padding: 14px 20px;margin: 8px 0 ;border: none;cursor: pointer;width: 40%;text-align: center;border-radius: 10px;"><br><br>
		<label style="margin: 30px 100px 40px 20px;"><b>PASSWORD:</b></label>
		<input type="password" name="TXTPASSWORD" class="zonetext" placeholder="Entrer Le PASSWORD  ici ..."  style="margin: 20px;background-color:white;color: #003;padding: 14px 20px;margin: 8px 0 ;border: none;cursor: pointer;width: 40%;text-align: center;border-radius: 10px;"><br><br>
		<label style="margin: 20px 10px 40px 5px;"><b>STATUT PERSONNEL  : </b></label>
		<input type="text" name="TXTSTATUT" class="zonetext" placeholder="Entrer Le STATUT PERSONNEL ici ..." style="margin: 20px;background-color:white;color: #003;padding: 14px 20px;margin: 8px 0 ;border: none;cursor: pointer;width: 11%;text-align: center;border-radius: 10px;">&nbsp;
		<label style="margin: 20px 10px 40px 5px;"><b>LIEU DE NAISSANCE  : </b></label>
		<input type="text" name="TXTLIEU" class="zonetext" placeholder="Entrer Le LIEU ici ..." style="margin: 20px;background-color:white;color: #003;padding: 14px 20px;margin: 8px 0 ;border: none;cursor: pointer;width: 12%;text-align: center;border-radius: 10px;"><br><br>
		<label style="margin: 30px 100px 40px 20px;"><b>DATE DE NAISSANCE  : </b></label>
		<input type="date" name="TXTDATE" class="zonetext"  style="margin: 20px;background-color:white;color: #003;padding: 14px 20px;margin: 8px 0 ;border: none;cursor: pointer;width: 20%;text-align: center;border-radius: 10px;"><br><br>
		<label style="margin: 20px 10px 40px 5px;"><b>TEL PERSONNEL  : </b></label>
		<input type="text" name="TXTTEL" class="zonetext" placeholder="Entrer Le TEL ici ..."  style="margin: 20px;background-color:white;color: #003;padding: 14px 20px;margin: 8px 0 ;border: none;cursor: pointer;width: 15%;text-align: center;border-radius: 10px;">&nbsp;
		<label style="margin: 20px 10px 40px 5px;"><b>COMPTE FINANCIER  : </b></label>
		<input type="nombre" name="TXTCOMPTE" class="zonetext" placeholder="Entrer Le COMPTE EN DH ici ..."  style="margin: 20px;background-color:white;color: #003;padding: 14px 20px;margin: 8px 0 ;border: none;cursor: pointer;width: 15%;text-align: center;border-radius: 10px;"><br><br>
		<label style="margin: 30px 30px 30px 20px;"><b>ADRESSE PERSONNEL  : </b></label>
		<input type="gmail" name="TXTADRESSE" placeholder="Entrer Le ADRESSE ici ..."  style="margin: 20px;background-color:white;color: #003;padding: 14px 20px;margin: 8px 0 ;border: none;cursor: pointer;width: 55%;text-align: center;border-radius: 10px;"><br>
		<label><b>PHOTO : </b></label>
		<input type="file" name="txtphoto" placeholder="Choisir une PHOTO ..." required style="margin: 20px;background-color:white;color: #003;padding: 14px 20px;margin: 8px 0 ;border: none;cursor: pointer;width: 40%;"><br>
		<input type="submit" name="btadd" value="Creation" style="background-color:#514F4F;color: white;padding: 14px 20px;margin: 8px 0 ;border: none;cursor: pointer;width: 50%;font-weight: bold;">
		<p><a href="login.php" style="background-color:#514F4F;color: white;padding: 14px 20px;margin: 8px 0 ;border: none;cursor: pointer;width: 60%;font-weight: bold;">Login </a></p>
		<label style="text-align: center;color: #960406;">
		<?php
	     if(isset($_POST['btadd']))
		 {
			 $CIN=$_POST['TXTCIN'];
			 $NOM=$_POST['TXTNOM'];
			 $PRENOM=$_POST['TXTPRENOM'];
			 $SALAIRE=$_POST['TXTSALAIRE'];
			 $TRAVAIL=$_POST['TXTTRAVAIL'];
			 $VILLE=$_POST['TXTVILLE'];
			 $GMAIL=$_POST['TXTGMAIL'];
			 $STATUT=$_POST['TXTSTATUT'];
			 $LIEU=$_POST['TXTLIEU'];
			 $DATE=$_POST['TXTDATE'];
			 $TEL=$_POST['TXTTEL'];
			 $COMPTE=$_POST['TXTCOMPTE'];
			 $ADRESSE=$_POST['TXTADRESSE'];
			 $PASSWORD=$_POST['TXTPASSWORD'];
			 $image=$_FILES['txtphoto']['tmp_name'];
			 $traget="IMAGES/".$_FILES['txtphoto']['name'];
			 move_uploaded_file($image,$traget);
			 $reqAdd="INSERT INTO personne(CIN_PERSONNE,NOM_PERSONNE,PRENOM_PERSONNE,ADRESSE_PERSONNE,VILLE_PERSONNE,PASSWORD_PERSONNE,GMAIL_PERSONNE,STATUT_PERSONNE,PHOTO_PERSONNE,SALAIRE_PERSONNE,TRAVAIL_PERSONNE,LIEU_NAISSANCE,COMPTE_FINANCIER,DATE_NAISSANCE,TEL_PERSONNE) VALUES('$CIN','$NOM','$PRENOM'      ,'$ADRESSE','$VILLE','$PASSWORD','$GMAIL','$STATUT' ,'$traget','$SALAIRE','$TRAVAIL','$LIEU','$COMPTE','$DATE','$TEL')"; 
			 $resultat=mysqli_query($cnloccar,$reqAdd);
			if($resultat)
			{
				echo"Creation de compte valides...";
			}else{
				echo"Echec de Creation de compte...";
			}
		 }
	    ?>
		</label>
	</form>
</div>
<footer>
	<table cellpadding="0" cellspacing="0" width="100%"> 
	<tbody>
		<tr> 
			<td class="td2"> 
				<ul type="none"> 
					<li style="align-content: center;font-size: 24px;"><a href="index.php" target="_blank" rel="noopener">Tv</a></li>
					<li style="align-content: center;font-size: 24px;"><a href="index.php">Photo</a></li>
					<li style="align-content: center;font-size: 24px;"><a href="index.php" target="_blank" rel="noopener">Forums</a></li>
				</ul> 
			</td>
			<td class="td3"> 
				<ul type="none"> 
					<li><a href="https://mail.google.com"/><img src="IMAGES/email.png" class="instgrame"></a></li>
					<li><a href="https://web.twitter.com/"><img src="IMAGES/twitter.png" class="instgrame"></a></li>
					<li><a href="https://web.youtube.com/"><img src="IMAGES/youtube.png" class="instgrame"></a></li>
				</ul> 
			</td>
			<td class="td4"> 
				<ul type="none"> 
					<li><a href="https://web.instagram.com/"><img src="IMAGES/instagram.png" class="instgrame"></a></li>
					<li><a href="https://web.facebook.com/"><img src="IMAGES/facebook.png" class="instgrame"></a></li>
					<li><a href="https://www.whatsapp.com/"><img src="IMAGES/whatsapp.png" class="instgrame"></a></li>
				</ul> 
			</td>
			<td class="td5"> 
				<ul type="none"> 
					<li style="align-content: center;font-size: 24px;"><a href="index.php">Politique d'utilisation</a></li>
					<li style="align-content: center;font-size: 24px;"><a href="index.php">Contactez-nous</a></li>
					<li style="align-content: center;font-size: 24px;"><a href="index.php">faites de la publicité avec nous</a></li>
				</ul>
			</td>
		</tr>
	</tbody>
</table>
</footer>
</body>
</html>