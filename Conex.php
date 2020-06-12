<?php
  if ((isset($_POST['username'])) || (isset($_POST['password'])))  {
    if ((($_POST['username'])<>'') && (($_POST['password'])<>'')){
  $link=mysqli_connect('localhost','root','','ListeGi');
  if (!$link) {
    die('not connectedd: '.mysql_error());
  }
  $db_selected=mysqli_select_db($link,'ListeGi');
  if (!$db_selected) {
    die('BD inaccessible: '.mysql_error());
  }

  $namee=$_POST['username'];
  $passworde=$_POST['password'];

  $sqlr='SELECT * FROM loggin WHERE cne="'.$namee.'" AND password="'.$passworde.'"';
  $resultr=mysqli_query($link,$sqlr);
  $rowr = mysqli_fetch_assoc($resultr);

if (!$rowr) {
  session_start();
  $_SESSION['invalid'] ='ok';
  header('location:conextest.php');

}

else{


  if ($rowr['role']=='1') {
    session_start();
    $_SESSION['username'] =$namee;
    $_SESSION['conexionadmin'] ='ok';
    header('location:page_admin.php');
  }

  elseif ($rowr['role']=='2') {
    session_start();
    $_SESSION['username'] =$namee;
    $_SESSION['conexionprof'] ='ok';
    if ($namee=='dadi') {
      header('location:page_prof2.php');
    }
    else {
      header('location:page_prof.php');}
  }
  elseif ($rowr['role']=='3') {
    session_start();
    $_SESSION['username'] =$namee;
    $_SESSION['conexionetudiant'] ='ok';
    header('location:page_etudiant.php');
  }

}
}
else {
  session_start();
  $_SESSION['conexionprincipal'] ='ok';
  header('location:Login_principal.php');
}
}
else{
  session_start();
  $_SESSION['conexionprincipal'] ='ok';
  header('location:Login_principal.php');}
?>
<!--$_SESSION['conexionprof2'] ='ok';-->
