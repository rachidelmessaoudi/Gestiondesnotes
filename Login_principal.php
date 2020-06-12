<?php
  session_start();
  if ((isset($_SESSION['conexionprof']))||(isset($_SESSION['conexionetudiant']))||(isset($_SESSION['conexionadmin']))){
    if ($_SESSION['username']=='dadi'){
      header('location:page_prof2.php');
    }

    elseif (isset($_SESSION['conexionprof'])){
      header('location:page_prof.php');
    }

    elseif (isset($_SESSION['conexionetudiant'])){
      header('location:page_etudiant.php');
    }

    else {
      header('location:page_admin.php');
    }
  }
 else{?>
   <!DOCTYPE html>
   <html lang="en">

       <head>
         <style >
             body{
               background-image: url('images/1.jpg');
               background-size: contain;
      }
         </style>

           <meta charset="utf-8">
           <meta http-equiv="X-UA-Compatible" content="IE=edge">
           <meta name="viewport" content="width=device-width, initial-scale=1">
           <title>Page Principale Gestion de Notes</title>

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

           <!-- Top content -->
           <div class="top-content">

               <div class="inner-bg">
                   <div class="container">
                       <div class="row">
                           <div class="col-sm-8 col-sm-offset-2 text">
                               <h1><strong>Bienvenue </strong>dans la page principal de gestion des notes de l'ENSAH</h1>
                           </div>
                       </div>
                       <div class="row">
                           <div class="col-sm-6 col-sm-offset-3 form-box">
                           	<div class="form-top">
                           		<div class="form-top-left">
                           			<h3>Login to our site</h3>
                               		<p>Enter your username and password to log on:</p>
                           		</div>
                           		<div class="form-top-right">
                           			<i class="fa fa-lock"></i>
                           		</div>
                               </div>
                               <div class="form-bottom">
   			                    <form role="form" action="Conex.php" method="post" class="login-form">
   			                    	<div class="form-group">
   			                    		<label class="sr-only" for="form-username">Username</label>
   			                        	<input type="text" name="username" placeholder="CNE ou Numero Prof..." class="form-control" id="form-username" required>
   			                        </div>
   			                        <div class="form-group">
   			                        	<label class="sr-only" for="form-password">Password</label>
   			                        	<input type="password" name="password" placeholder="Password..." class="form-control" id="form-password" required>
   			                        </div>
   			                        <button type="submit" class="btn btn-lg btn-primary btn-block">Sign in!</button>
                                 <a class="btn btn-lg btn-primary btn-block" href="registre2.php">Register</a>
   			                    </form>

   		                    </div>
                           </div>
                       </div>

                   </div>
               </div>

           </div>


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

  <?php } ?>
