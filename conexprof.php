<?php
  if (isset($_POST['cne'])) {
    $link=mysqli_connect('localhost','root','root','ListeGi');
    if (!$link) {
      die('not connectedd: '.mysql_error());
    }
    $db_selected=mysqli_select_db($link,'ListeGi');
    if (!$db_selected) {
      die('BD inaccessible: '.mysql_error());
    }


    $cnee=$_POST['cne'];

    $sql="SELECT * FROM etudiant WHERE cne=".$_POST['cne']."";
    $resulta=mysqli_query($link,$sql);
    $roww = mysqli_fetch_assoc($resulta);
  if (!$roww) {
    echo'CNE Invaliid ! <br>';
    // echo '<a href="page_prof.php">Cliquez ici pour revenir vers la page precedente</a>';
    include('page_prof.php');
  }
  else {
    session_start();
    $namee=$_SESSION['username'];

    $sql2="SELECT matiere FROM prof WHERE nom=".$namee."";
    $result2=mysqli_query($link,"SELECT matiere FROM prof WHERE nom='".$namee."'");
    $row2 = mysqli_fetch_assoc($result2);

    $matiere=$row2['matiere'];
    $note=$_POST['note'];

    $result =mysqli_query($link,"UPDATE notes set ".$matiere."=".$note." where cne=".$_POST['cne']."");

    if (!$result) {
      echo'erreur insertion !!';
      //echo '<a href="page_prof.php">Cliquez ici pour revenir vers la page precedente</a>';
      include('page_prof.php');
    }

    else{

      echo 'Insertion Effectuee';
      //echo '<a href="page_prof.php">Cliquez ici pour revenir vers la page precedente</a>';
      include('page_prof.php');
    }
  }



  }
  else{header('location:login_principal.php');}
  ?>
