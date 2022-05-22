 <html><head><title>tyc</title></head><body bgcolor="white-green"><center><br>
 
<?php
$nom=$_POST['nom'];
$prenom=$_POST['prenom'];
$mdp=$_POST['mdp'];
$datel=$_POST['datel'];
$texta=$_POST['texta'];
$prix=$_POST['prix'];
	 $bdd=mysqli_connect("localhost","root","","projet");
	$result=mysqli_query($bdd,"INSERT INTO CLIENTS(nom,prenom,mdp,datel,texta,prix)VALUES('$nom','$prenom','$mdp','$datel','$texta','$prix')");
?>

	 <h1><marquee behavior="alternate" bgcolor="red" SCROLLAMOUNT="35" direction="right">VOS INFORMATIONS</marquee></h1><br><br>
	 <h3> Votre Nom</h3><?php echo $nom ?><br><br>
	 <h3>Votre Prénom</h3><?php echo $prenom ?><br><br>	 
	 <h3>Votre mot de passe</h3><?php echo $mdp ?><br><br>
	 <h3>Votre date limite</h3><?php echo $datel ?><br><br>
	 <h3>Votre premiere offre</h3><?php echo $prix ?><br><br>
	 <h3>Vos recommandations:</h3><?php echo $texta ?>
	 
	  </center>
	 </body>
	 </html>
  
  