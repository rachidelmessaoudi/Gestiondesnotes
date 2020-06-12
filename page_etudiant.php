<?php
session_start();
$link=mysqli_connect('localhost','root','','ListeGi');
if ((isset($_SESSION['conexionetudiant']))){
  if (($_SESSION['conexionetudiant'])=='ok') { $namee=$_SESSION['username'];?>
<!DOCTYPE html>
<html lang="en">

<head>
  <style>
    body{
    background-image: url('images/1.jpg');
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
                  .infos h2{
                    text-align: center;
                    color: black;
                  }
                  .infos h3{
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

      <h1><center> <strong>Bienvenue dans l'Espace Etudiant </strong></center></h1>

      <div class="navii">
      <ul>
          <li><a class="active" href="#home">Home</a></li>
          <li><a href="#presentation">Presentation</a></li>
          <li><a href="#infos">Informations Personnels</a></li>
          <li><a href="#notes">Notes</a></li>
          <li><a href="deconexion.php">Deconexion</a></li>
      </ul>
    </div>

    <div class="princimg">
      <img src="images/2.jpg" width="940" height="360" alt=""></a>
    </div>

    <div class="presentation" id="presentation">
      <br><br><h2><strong>Presentation :</strong></h2><br>
      <p>
      Créée  en 2008, l'Ecole Nationale des Sciences Appliquées d'Al Hoceima (ENSAH) est un établissement public d'enseignement supérieur relevant  de l'université Mohammed Premier. Sa création s'inscrit dans l'optique de favoriser la formation  des ingénieurs d'Etat hautement qualifiés dans les spécialités les plus ouvertes et susceptibles de connaître d'importants développements au sein du tissu socio-économique régional et national.</p>

      <p>
              <p>
      Le positionnement de l'Ecole contribuera à lui conférer une dimension euro-méditerranéenne et à répondre aux besoins régionaux et nationaux en matière de formation en ingénierie.


      L'Ecole Nationale des Sciences Appliquées Al-Hoceima dispense des formations de deux années préparatoires et trois années de spécialités dans les domaines suivants :
      <ul class="listeText">
        <li> Génie Informatique ; </li>
        <li> Génie Civil ; </li>
        <li> Génie de l'Environnement et des Risques Naturels </li>
        </ul>
      </p>

       <p>Etalée sur une superficie de 5.700 m2, l'ENSA d'Al Hoceima est de nature à doter cette zone géographique d'un pôle scientifique à travers la création d'un noyau universitaire, appuyer le secteur de l'enseignement supérieur technique et promouvoir la formation professionnelle
       </p>
       <p>
      D'une capacité d'accueil de 500 étudiants, l'ENSA comprend :
      </p>

      <ul class="listeText">
        <li> Deux amphithéâtres ; </li>
        <li>des salles de cours et des travaux pratiques  ; </li>
        <li>des laboratoires ; </li>
        <li>une bibliothèque ; </li>
        <li> des terrains de sports et des vestiaires ; </li>
        <li> une cafétéria ; </li>
        <li> une chambre froide ainsi que d'autres dépendances. </li>
        </ul>

      <p> Les étudiants de l'Ecole Nationale des Sciences Appliquées d'Al Hoceima sont logés dans l'internat de l'Ecole dont la capacité d'accueil est de 500 lits.</p>



               <p></p>
    </div>

    <div class="infos" id="infos">
      <br><br><h2><strong>Informations Personnel :</strong></h2><br>
      <h3><center><strong><?php
        $sql="SELECT * FROM etudiant WHERE cne=".$namee."";
        //$sql='SELECT * FROM etudiant WHERE cne="'.$namee.'"';

        $result=mysqli_query($link,$sql);
        if (!$result) {
          echo'error';
        }
        else{
        $row = mysqli_fetch_assoc($result);
          echo 'Nom et Prenom : '.$row['nom'] .' ';
          echo $row['prenom'].'</br>'.'</br>';
          echo 'CIN : '.$row['cin'].'</br>'.'</br>';
          echo 'CNE : '.$row['cne'].'</br>';

        } ?>
      </strong></center></h3>

    </div>

    <div class="notes" id="notes">
      <br><br><h2><strong> Liste Des notes :</strong></h2><br>
      <table class="container">
	       <thead>
		         <tr>
                  <th><h1>Numero</h1></th>
                  <th><h1>CNE</h1></th>
			            <th><h1>Web</h1></th>
			            <th><h1>Complexite</h1></th>
			            <th><h1>UML</h1></th>
                  <th><h1>RO</h1></th>
                  <th><h1>C++</h1></th>
			            <th><h1>Comptabilite</h1></th>
                  <th><h1>Management</h1></th>
		          </tr>
	        </thead>
	         <tbody>
      <?php
        //$sql="SELECT * FROM notes WHERE cne=".$_POST['username']." ";
        $sql='SELECT * FROM notes WHERE cne="'.$namee.'"';
        $result=mysqli_query($link,$sql);
        if (!$result) {
          echo'error';
        }
        else{
        $row = mysqli_fetch_assoc($result);
          echo '<tr><td>'.$row['Numero'] .'</td> ';
          echo '<td>'.$row['cne'].'</td>';
          echo '<td>'.$row['web'].'</td>';
          echo '<td>'.$row['complexite'].'</td>';
          echo '<td>'.$row['uml'].'</td>';
          echo '<td>'.$row['ro'].'</td>';
          echo '<td>'.$row['cpp'].'</td>';
          echo '<td>'.$row['comptabilite'].'</td>';
          echo '<td>'.$row['management'].'</td></tr>';

        } ?>
      </tbody>
    </table>
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

<?php   }}
  else {
    header('location:login_principal.php');
  }
 ?>
