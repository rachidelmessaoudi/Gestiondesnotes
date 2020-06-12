
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
      <br><br>
      <h1><center> <b><a>Veuillez Vous Enregistrer SVP :</a></b></center></h1>
<br><br><br><br>
      <div class="container">
          <form class="form-signin" action="connect_form.php" method="POST">

          <div class="input-group">
         	  <span class="input-group-addon" id="basic-addon1">First Name:</span>
         	  <input type="text" name="firstname" class="form-control" placeholder="Firstname" required>
         	</div>
          <div class="input-group">
         	  <span class="input-group-addon" id="basic-addon1">Last Name:</span>
         	  <input type="text" name="lastname" class="form-control" placeholder="Lastname" required>
         	</div>
          <div class="input-group">
         	  <span class="input-group-addon" id="basic-addon1">Profession:</span>
         	  <input type="text" name="profession" class="form-control" placeholder="Profession" required>
         	</div>
                 <button class="btn btn-lg btn-primary btn-block" type="submit">Sign In</button>

               </form>

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
