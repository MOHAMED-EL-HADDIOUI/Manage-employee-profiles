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
</div></br>
<div style="width: 40%;margin: 0 auto;margin-top: 10%;">
	<form name="formAdd" action="" method="post"class="formulaire" enctype="multipart/form-data">
		<h2 align="center"><b>Contact Avec l'Admistration</b></h2>
		<label><b>CIN d'Utilisateur :</b></label>
		<input type="text" name="txtCIN" placeholder="Entrer le CIN d'utilisateur" required style="margin: 20px;background-color:white;color: #003;padding: 14px 20px;margin: 8px 0 ;border: none;cursor: pointer;width: 80%;">
		<input type="submit" name="btadd" value="Obtenir" style="background-color:#514F4F;color: white;padding: 14px 20px;margin: 8px 0 ;border: none;cursor: pointer;width: 20%; font-weight: bold;">
		<p><a href="login.php" style="margin: 20px;background-color:white;color:white;padding: 14px 20px;margin: 8px 0 ;border: none;cursor: pointer;width: 30%;background-color: #514F4F;">Login </a></p>
		<label style="text-align: center;color: #960406;">
		<?php
		if(isset($_POST['btadd']))
		{
			$CIN_PERSONNE=$_POST['txtCIN'];
			$req="select *from personne where CIN_PERSONNE='$CIN_PERSONNE'";
			$resultat=mysqli_query($cnloccar,$req);
			$ligne=mysqli_fetch_assoc($resultat);
			if($ligne)
			{
				echo "Votre mot mot passe est : ";
			    echo $ligne['PASSWORD_PERSONNE']; 
			}
			else
			{
				echo "Echec le utilisateur n'existe pas...";
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