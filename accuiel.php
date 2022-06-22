<?php require_once('connexion.php');  ?>
<!doctype html>
<html>
<head>
<meta charset="utf-8">
<link rel="stylesheet" href="loccar_style.css" type="text/css"/>
<title>Accuiel</title>
<style>
		.myphoto{
			width: 100px;height: 60px;
			border-radius: 20px;
			border: 1px solid;
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
	<div id="globl">
		<div id="profil">
		<b>
		<?php 
	     session_start();
		echo "Bonjour et Bienvenue ".$_SESSION['monLogin']."</br>";
			$req="select *from personne where PRENOM_PERSONNE='".$_SESSION['monLogin']."'";
		    $resulatat=mysqli_query($cnloccar,$req);
			$ligne=mysqli_fetch_assoc($resulatat);
	    ?></b>
		    <img src="<?php echo $ligne['PHOTO_PERSONNE'];?>" class="myphoto">
			</br>
		    <a href="Deconnecter.php"><b>Deconnection</b></a>
		</div>
		<div id="tableaubord">
		<?php 
			include("tableaubord.php");
		?>
		</div>
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