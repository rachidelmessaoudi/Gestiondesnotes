<link rel="stylesheet" href="Principal.css" type="text/css">

<body>
  <header>
    <?php include 'headerr.php'; ?>
  </header>
  <div class="container">
      <h2><center>Veuillez vous Enregistrez SVP </center> </h2>
      <form class="form-signin" action="connect_form.php" method="POST">
       <h2 class="form-signin-heading">Please Signin</h2>
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
  </div>
  <footer><?php include 'footerr.php'; ?></footer>
</body>
