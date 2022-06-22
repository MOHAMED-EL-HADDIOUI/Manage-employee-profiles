<?php require_once('connexion.php');  ?>
<!doctype html>
<html>
<head>
<meta charset="utf-8">
<link rel="stylesheet" href="loccar_style.css" type="text/css"/>
<title>Ajouter</title>
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
</div><br>
<div id ="contrainer">
	<form name="formAdd" action="" method="post"class="formulaire" enctype="multipart/form-data">
	<h2 align="center">Ajouter Nouvelle Voiture...</h2>
		<label><b>Immatriculation :</b></label>
		<input type="text" name="txtImm"class="zonetext" placeholder="Entrer Immatriculation" required>
		<label><b>Marque :</b></label>
		<input type="text" name="txtMarque"class="zonetext" placeholder="Entrer La Marque" required>
		<label><b>Prix de Location :</b></label>
		<input type="numbre" name="txtPl"class="zonetext" placeholder="Entrer Le Prix" required>
		<label><b>Photo :</b></label>
		<input type="file" name="txtphoto"class="zonetext" placeholder="Choisir une image" required>
		<input type="submit" name="btadd" value="Ajouter"class="submit">
		<p><a href="accuiel.php" class="submit">Tableau de Bord </a></p>
		<label style="text-align: center;color: #960406;">
		<?php
		if(isset($_POST['btadd']))
		{
			$imm=$_POST['txtImm'];
			$marque=$_POST['txtMarque'];
			$prixloc=$_POST['txtPl'];
			$image=$_FILES['txtphoto']['tmp_name'];
			$traget="IMAGES/".$_FILES['txtphoto']['name'];
			move_uploaded_file($image,$traget);
			$reqAdd="INSERT INTO automobile(IMM,MARQUE,PRIX_LOC,PHOTO)VALUES('$imm','$marque','$prixloc','$traget')";
			$resultat=mysqli_query($cnloccar,$reqAdd);
			if($resultat)
			{
				echo"Insertion des donnees valides...";
			}else{
				echo"Echec de Insertion des donnees...";
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