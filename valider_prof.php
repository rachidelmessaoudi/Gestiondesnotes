<?php
if ((isset($_POST['nom'])) || (isset($_POST['matiere'])))  {

    $link=mysqli_connect('localhost','root','root','ListeGi');
    if (!$link) {
      die('not connectedd: '.mysql_error());
    }
    $db_selected=mysqli_select_db($link,'ListeGi');
    if (!$db_selected) {
      die('BD inaccessible: '.mysql_error());
    }


    $nomm=$_POST['nom'];
    $prenomm=$_POST['prenom'];
    $matieree=$_POST['matiere'];
    $cinn=$_POST['cin'];
    $pass=$_POST['pass'];


    $sqlr="SELECT * FROM loggin WHERE cne='".$nomm."'";
    $resultr=mysqli_query($link,$sqlr);
    $roww = mysqli_fetch_assoc($resultr);

  if (!$roww) {



        $result =mysqli_query($link,'INSERT INTO prof (`nom`, `prenom`, `matiere`, `cin`) VALUES ("'.$nomm.'","'.$prenomm.'","'.$matieree.'","'.$cinn.'")');
        $result2 =mysqli_query($link,'INSERT INTO loggin (`cne`, `role`, `password`) VALUES ("'.$nomm.'","2","'.$pass.'")');

        if ((!$result) || (!$result2)) {
          echo'<b>erreur insertion prof, Reesseyer </b><br>';
          //echo '<a href="inserer_prof.php">Cliquez ici pour revenir vers la page precedente</a>';
          //echo '<br><a href="page_admin.php">Cliquez ici pour revenir vers la page principale</a>';
          include('inserer_prof.php');
        }

        else{

          header('location:page_admin.php');
        /*  echo '<b>Insertion Effectuee prof</b><br>';
          echo '<a href="inserer_prof.php">Cliquez ici pour revenir vers la page precedente</a>';
          echo '<br><a href="page_admin.php">Cliquez ici pour revenir vers la page principale</a>';
        */

        }

      /*  if (!$result2) {
          echo'<br><br><b>erreur insertion loggin !!</b><br>';
          echo '<a href="inserer_prof.php">Cliquez ici pour revenir vers la page precedente</a>';
          echo '<br><a href="page_admin.php">Cliquez ici pour revenir vers la page principale</a>';
        }

        else{

          echo '<br><br><b>Insertion Effectuee loggin</b><br>';
          echo '<a href="inserer_prof.php">Cliquez ici pour revenir vers la page precedente</a>';
          echo '<br><a href="page_admin.php">Cliquez ici pour revenir vers la page principale</a>';
        }
        */


  }

  else{
    header('location:inserer_prof2.php');
      }

  }

  else{header('location:login_principal.php');}
  ?>
