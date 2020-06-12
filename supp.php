<?php
  if ((isset($_POST['etudiantt']))||(isset($_POST['proff']))) {
    $link=mysqli_connect('localhost','root','root','ListeGi');
    if (!$link) {
      die('not connectedd: '.mysql_error());
    }
    $db_selected=mysqli_select_db($link,'ListeGi');
    if (!$db_selected) {
      die('BD inaccessible: '.mysql_error());
    }

    if ((($_POST['etudiantt'])<>'')&& (($_POST['proff'])<>'')){
      $cnee=$_POST['etudiantt'];
      $nom=$_POST['proff'];

      $sqlp="DELETE FROM prof WHERE nom='".$nom."'";
      $sqlp2="DELETE FROM loggin WHERE cne='".$nom."'";

      $sql="DELETE FROM etudiant WHERE cne='".$cnee."'";
      $sql2="DELETE FROM loggin WHERE cne='".$cnee."'";

      $resulta=mysqli_query($link,$sql);
      $resulta2=mysqli_query($link,$sql2);

      $resultap=mysqli_query($link,$sqlp);
      $resultap2=mysqli_query($link,$sqlp2);

      if ((!$resulta) || (!$resulta2) || (!$resultap) || (!$resultap2) ) {
        echo'erreur requette';
      }
      else {
        header('location:page_admin.php');
      }
    }

    if (($_POST['etudiantt'])<>'') {
      $link=mysqli_connect('localhost','root','root','ListeGi');
      $cnee=$_POST['etudiantt'];
      $sql="DELETE FROM etudiant WHERE cne='".$cnee."'";
      $sql2="DELETE FROM loggin WHERE cne='".$cnee."'";

      $resulta=mysqli_query($link,$sql);
      $resulta2=mysqli_query($link,$sql2);

      if ((!$resulta) || (!$resulta2)) {
        echo'erreur requette';
      }
      else {
        header('location:page_admin.php');
      }
    }
    elseif (($_POST['proff'])<>'') {
      $nom=$_POST['proff'];

      $sqlp="DELETE FROM prof WHERE nom='".$nom."'";
      $sqlp2="DELETE FROM loggin WHERE cne='".$nom."'";

      $resultap=mysqli_query($link,$sqlp);
      $resultap2=mysqli_query($link,$sqlp2);

      if ((!$resultap) || (!$resultap2)) {
        echo'erreur requette';
      }
      else {
        header('location:page_admin.php');
      }
    }

  }
  else{header('location:login_principal.php');}
  ?>
