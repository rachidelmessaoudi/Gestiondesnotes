<?php
  if ((isset($_POST['nom'])) || (isset($_POST['cne'])))  {

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
    $cnee=$_POST['cne'];
    $cinn=$_POST['cin'];
    $dn=$_POST['date_nai'];

    $sqlr="SELECT * FROM loggin WHERE cne='".$cnee."'";
    $resultr=mysqli_query($link,$sqlr);
    $roww = mysqli_fetch_assoc($resultr);

    if (!$roww) {

    $result =mysqli_query($link,'INSERT INTO etudiant (`nom`, `prenom`, `cne`, `cin`, `date_nai`) VALUES ("'.$nomm.'","'.$prenomm.'","'.$cnee.'","'.$cinn.'","'.$dn.'")');
    $result2 =mysqli_query($link,'INSERT INTO loggin (`cne`, `role`, `password`) VALUES ("'.$cnee.'","3","'.$dn.'")');


        if ((!$result) || (!$result2)) {
            echo'erreur insertion Reesseyer !!<br>';
            //echo '<a href="inserer_etudiant.php">Cliquez ici pour revenir vers la page precedente</a>';
            //echo '<br><a href="page_admin.php">Cliquez ici pour revenir vers la page principale</a>';
            include('inserer_etudiant2.php');
    }

        else{
            header('location:page_admin.php');
            //echo '<b>Insertion Effectuee</b><br>';
            //echo '<a href="inserer_etudiant.php">Cliquez ici pour revenir vers la page precedente</a>';
            //echo '<br><a href="page_admin.php">Cliquez ici pour revenir vers la page principale</a>';
          }
      /*    if (!$result2) {
            echo'<br><br><b>erreur insertion loggin !!</b><br>';
            echo '<a href="inserer_prof.php">Cliquez ici pour revenir vers la page precedente</a>';
            echo '<br><a href="page_admin.php">Cliquez ici pour revenir vers la page principale</a>';
          }

          else{

            echo '<br><br><b>Insertion Effectuee loggin</b><br>';
            echo '<a href="inserer_prof.php">Cliquez ici pour revenir vers la page precedente</a>';
            echo '<br><a href="page_admin.php">Cliquez ici pour revenir vers la page principale</a>';
          } */
        }
  else {
      header('location:inserer_etudiant2.php');

  }
}

  else{header('location:login_principal.php');}
  ?>
