<?php
session_start();
if ((isset($_SESSION['conexionadmin']))){
  if (($_SESSION['conexionadmin'])=='ok') { $namee=$_SESSION['username'];?>
    <!DOCTYPE html>
    <html lang="en">
    <head>
    <style>
      body{
      background-image: url('22.jpg');
      background-size: cover;
        }
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
                    .presentation{
                      text-align: left;
                      color: white;

                    }
                    .presentation h2{
                      text-align: center;
                      color: black;
                      text-decoration-style: solid;

                    }
                    .inserer_note{text-align: left;
                    color: black;}
                    .inserer_note h2 {text-align: center;
                    color: black;
                    text-decoration-style: solid;}

                    .liste h2{
                      text-align: center;
                      color: black;
                    }
                    .liste h3{
                      text-align: right;
                      color: white;
                    }


    </style>

    <style>
    .container h1 {
    font-size:3em;
    font-weight: 300;
    line-height:1em;
    text-align: center;
    color: #4DC3FA;
    }

    .container h2 {
    font-size:1em;
    font-weight: 300;
    text-align: center;
    display: block;
    line-height:1em;
    padding-bottom: 2em;
    color: #FB667A;
    }

    .container h2 a {
    font-weight: 700;
    text-transform: uppercase;
    color: #FB667A;
    text-decoration: none;
    }

    .blue { color: #185875; }
    .yellow { color: #FFF842; }

    .container th h1 {
      font-weight: bold;
      font-size: 1em;
    text-align: left;
    color: #185875;
    }

    .container td {
      font-weight: normal;
      font-size: 1em;
    -webkit-box-shadow: 0 2px 2px -2px #0E1119;
       -moz-box-shadow: 0 2px 2px -2px #0E1119;
            box-shadow: 0 2px 2px -2px #0E1119;
    }

    .container {
      text-align: left;
      overflow: hidden;
      width: 80%;
      margin: 0 auto;
    display: table;
    padding: 0 0 8em 0;
    }

    .container td, .container th {
      padding-bottom: 2%;
      padding-top: 2%;
    padding-left:2%;
    }

    /* Background-color of the odd rows */
    .container tr:nth-child(odd) {
      background-color: #323C50;
    }

    /* Background-color of the even rows */
    .container tr:nth-child(even) {
      background-color: #2C3446;
    }

    .container th {
      background-color: #1F2739;
    }

    .container td:first-child { color: #FB667A; }

    .container tr:hover {
     background-color: #464A52;
    -webkit-box-shadow: 0 6px 6px -6px #0E1119;
       -moz-box-shadow: 0 6px 6px -6px #0E1119;
            box-shadow: 0 6px 6px -6px #0E1119;
    }

    .container td:hover {
    background-color: #FFF842;
    color: #403E10;
    font-weight: bold;

    box-shadow: #7F7C21 -1px 1px, #7F7C21 -2px 2px, #7F7C21 -3px 3px, #7F7C21 -4px 4px, #7F7C21 -5px 5px, #7F7C21 -6px 6px;
    transform: translate3d(6px, -6px, 0);

    transition-delay: 0s;
      transition-duration: 0.4s;
      transition-property: all;
    transition-timing-function: line;
    }

    @media (max-width: 800px) {
    .container td:nth-child(4),
    .container th:nth-child(4) { display: none; }
    }
    </style>
            <meta charset="utf-8">
            <meta http-equiv="X-UA-Compatible" content="IE=edge">
            <meta name="viewport" content="width=device-width, initial-scale=1">
            <title>Espace Administrateur</title>

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
          <h1><center> <b><a>Insertion d'un nouveau Etudiant :</a></b></center></h1>
          <br><h1><center> <a>Désoler , cet Etudiant Existe deja , Veuillez inserer un nouveau Etudiant :</a></center></h1>


        <div class="insertion" id="insertion">

          <div class="row">
              <div class="col-sm-6 col-sm-offset-3 form-box">
                <div class="form-top">
                  <div class="form-top-left">
                      <p>Veuillez Remplir les informations suivantes </p>
                  </div>

                  </div>
                  <div class="form-bottom">
          <form role="form" action="valider_etudiant.php" method="post" class="login-form">
            <div class="form-group">
              <label>Nom Etudiant</label>
                <input type="text" name="nom" placeholder="Nom Etudiant..." class="form-control" id="" required>
              </div>

              <div class="form-group">
              <label>Prenom Etudiant</label>
                <input type="text" name="prenom" placeholder="Prenom Etudiant..." class="form-control" id="" required>
              </div>


            <div class="form-group">
              <label>CNE Etudiant</label>
                <input type="text" name="cne" placeholder="CNE Etudiant..." class="form-control" id="" required>
              </div>

              <div class="form-group">
                <label>CIN Etudiant</label>
                  <input type="text" name="cin" placeholder="CIN Etudiant..." class="form-control" id="" required>
                </div>

                <div class="form-group">
                  <label>Date de naissance</label>
                    <input type="text" name="date_nai" placeholder="jj/mm/aaaa..." class="form-control" id="" required>
                  </div>

              <button type="submit" class="btn btn-lg btn-primary btn-block">Enregistrer</button>
              </div></div></div>
          </form>

        </div>

           </div>

          <br><br>
         <h1><b>Pour Revenir vers la page precedente <a href="page_admin.php">Cliquez ici</a></b></h1>

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
<!-- <div class="form-group">
  <label>Matiere</label>
    <input type="text" name="matiere" placeholder="Matiere ..." class="form-control" id="form-username">
</div> -->
