<?php if (isset($_POST['firstname'])){ ?>

<!DOCTYPE html>
<html lang="en">
<head>
<style>
  body{
  background-image: url('22.jpg');
  background-size: cover;
    }
</style>
        <meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <title>Service ENSAH</title>

        <!-- CSS -->
        <link rel="stylesheet" href="http://fonts.googleapis.com/css?family=Roboto:400,100,300,500">
        <link rel="stylesheet" href="assets/bootstrap/css/bootstrap.min.css">
        <link rel="stylesheet" href="assets/font-awesome/css/font-awesome.min.css">
        <link rel="stylesheet" href="assets/css/form-elements.css">
        <link rel="stylesheet" href="assets/css/style.css">
        <link rel="shortcut icon" href="Steps/monstyle.css">



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
      <br><br><br><br><br><br><br>
      <h1><center> <b><a>Désoler ce service n'est pas disponible en ce moment <br>Veuillez consulter la direction de l'ENSAH</a></b></center></h1>
      <strong><center><h1><a href="Login_principal.php">Clicker ici pour revenir a la page d'acceuil</a></h1></center></strong>
<br><br><br><br><br><br><br><br><br><br>



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
<?php }
else {
  header('location:login_principal.php');
}
 ?>
