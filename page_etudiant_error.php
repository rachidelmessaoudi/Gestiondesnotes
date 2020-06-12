<?php
session_start();
$link=mysqli_connect('localhost','root','root','ListeGi');
if ((isset($_SESSION['conexionetudiant']))){
  if (($_SESSION['conexionetudiant'])=='ok') { $namee=$_SESSION['username'];?>

<!DOCTYPE html>
<html lang="en">

<head>
  <style>
      .navii ul {
          display:flex;
          list-style-type: none;
          margin: 0;
          padding: 0;
          overflow: hidden;
          background-color: #333;
        }

      .navii li {
          flex: 1;
          float: left;
        }

      .navii li a {
          display: block;
          color: white;
          text-align: center;
          padding: 14px 16px;
          text-decoration: none;
              }

      .navii li a:hover {
          background-color: #111;
                  }
  </style>
  <style >
          body{
            background-image: url('images/1.jpg');
            background-size: cover;
              }
  </style>
        <meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <title>Espace Etudiant</title>

        <!-- CSS -->
        <link rel="stylesheet" href="http://fonts.googleapis.com/css?family=Roboto:400,100,300,500">
        <link rel="stylesheet" href="assets/bootstrap/css/bootstrap.min.css">
        <link rel="stylesheet" href="assets/font-awesome/css/font-awesome.min.css">
		    <link rel="stylesheet" href="assets/css/form-elements.css">
        <link rel="stylesheet" href="assets/css/style.css">



        <!-- Favicon and touch icons -->
        <link rel="shortcut icon" href="assets/ico/favicon.png">
        <link rel="apple-touch-icon-precomposed" sizes="144x144" href="assets/ico/apple-touch-icon-144-precomposed.png">
        <link rel="apple-touch-icon-precomposed" sizes="114x114" href="assets/ico/apple-touch-icon-114-precomposed.png">
        <link rel="apple-touch-icon-precomposed" sizes="72x72" href="assets/ico/apple-touch-icon-72-precomposed.png">
        <link rel="apple-touch-icon-precomposed" href="assets/ico/apple-touch-icon-57-precomposed.png">

    </head>
    <header>
      <?php include 'headerr.php'; ?>
    </header>

    <body>
      <br><br><br><br><br>
      <h1><center> <strong>Désoler,Votre Identifiant ou Mot de Pass est INVALID ! </strong></center></h1>
      <br><br><br><br><br>
      <strong><center><h1><a href="Login_principal.php">Clicker ici pour revenir a la page d'acceuil</a></h1></center></strong>
      <br><br><br><br><br><br>

        <!-- Javascript -->
        <script src="assets/js/jquery-1.11.1.min.js"></script>
        <script src="assets/bootstrap/js/bootstrap.min.js"></script>
        <script src="assets/js/placeholder.js"></script>
        <script src="assets/js/scripts.js"></script>



        <!--[if lt IE 10]>   </script>

        <![endif]-->

    </body>
    <footer><?php include 'footerr.php'; ?></footer>
</html>
<?php   }}
  else {
    header('location:login_principal.php');
  }
 ?>
