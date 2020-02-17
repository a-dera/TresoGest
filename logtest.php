<?PHP
require 'connect.php';
?>
<!DOCTYPE html>
<html lang="fr">
<head>
	<title>Connexion SSM</title>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
<!--===============================================================================================-->
	<link rel="icon" type="image/png" href="images/icons/favicon.ico"/>
<!--===============================================================================================-->
	<link rel="stylesheet" type="text/css" href="vendor/bootstrap/css/bootstrap.min.css">
<!--===============================================================================================-->
	<link rel="stylesheet" type="text/css" href="fonts/font-awesome-4.7.0/css/font-awesome.min.css">
<!--===============================================================================================-->
	<link rel="stylesheet" type="text/css" href="vendor/animate/animate.css">
<!--===============================================================================================-->
	<link rel="stylesheet" type="text/css" href="vendor/css-hamburgers/hamburgers.min.css">
<!--===============================================================================================-->
	<link rel="stylesheet" type="text/css" href="vendor/select2/select2.min.css">
<!--===============================================================================================-->
	<link rel="stylesheet" type="text/css" href="css/util.css">
	<link rel="stylesheet" type="text/css" href="css/main.css">
<!--===============================================================================================-->
</head>
<body>


	<div class="limiter">
		<div class="container-login100">
			<div class="wrap-login100">
				<div class="login100-pic js-tilt" data-tilt>
					<img src="images/img-01.png" alt="IMG">
				</div>







<!---------------------------stylisé------------------>

<?php
require 'connect.php';
 ?>
<?php
if (isset($_POST['submit'])) {

  $id=htmlspecialchars($_POST['identifiant']);
  $pass=htmlspecialchars($_POST['mdp']);

   $stmt_find = $connect->prepare("SELECT * FROM `user` WHERE identifiant = :identifiant"); //tester si le nom existe
   $stmt_find->bindParam(':identifiant' ,$id , PDO::PARAM_STR);
   $stmt_find->execute();

      $find_row = $stmt_find->fetch();
	  $fetch_nom=$find_row['identifiant'];
	  $fetch_quant=$find_row['mdp'];
	  $quantite =  $fetch_quant;
	  $name =  $fetch_nom;

       if ($name!=$id){//test id
		    echo "<div class='alert alert-danger center ' style='width: 90%; margin: auto;'>
			<p>  \"$id\" n'est pas utilisateur. <br>
	              </p></div>
				  <a href=\"index.html\" class=\"login100-form-btn\">Réessayer</a><br><br> ";
	   }

	   else{//test id


	  if($quantite!=$pass)// test mdp
	  {echo "<div class='alert alert-danger center ' style='width: 90%; margin: auto;'>
	  <p> Votre mot de passe est incorrect . <br>
	  </p></div><br><br>
	 <a href=\"index.html\" class=\"login100-form-btn\">Réessayer</a><br><br> ";  }

			else{ //si tout est ok
				// on la démarre :)

		session_start ();

		// on enregistre les paramètres de notre visiteur

		$_SESSION['identifiant'] = $_POST['identifiant'];

		$_SESSION['mdp'] = $_POST['mdp'];



		// on redirige notre visiteur vers le dash
			header("Location: /Gestion_de_la_tresorerie/Dashboard/index.php");
			}
	   }



 }//fin grand if

?>

<!---------------------------stylisé------------------>

</div>
		</div>
	</div>




<!--===============================================================================================-->
	<script src="vendor/jquery/jquery-3.2.1.min.js"></script>
<!--===============================================================================================-->
	<script src="vendor/bootstrap/js/popper.js"></script>
	<script src="vendor/bootstrap/js/bootstrap.min.js"></script>
<!--===============================================================================================-->
	<script src="vendor/select2/select2.min.js"></script>
<!--===============================================================================================-->
	<script src="vendor/tilt/tilt.jquery.min.js"></script>
	<script >
		$('.js-tilt').tilt({
			scale: 1.1
		})
	</script>
<!--===============================================================================================-->
	<script src="js/main.js"></script>

</body>
</html>
