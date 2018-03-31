<?php include 'include/config.php';//check(1);?>

<!doctype html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="description" content="">
    <meta name="author" content="">
    <link rel="icon" href="favicon.ico">

    <title>Role Based Access Control</title>

    <script src="js/sweetalert.min.js"></script>
    <link rel="stylesheet" href="css/sweetalert.css">
    <link rel="stylesheet" href="css/bootstrap.min.css">
    
    <!-- Custom styles for this template -->
    <link href="css/signin.css" rel="stylesheet">
    <style>
    body {
    padding-top: 8rem;
    padding-bottom: 5rem;
    }
    </style>
  </head>

  <body>
  <nav class="navbar navbar-expand-md navbar-dark bg-dark fixed-top">
      <a class="navbar-brand" href="index.php">Role Based Access Control</a>
      
    </nav>
    <div class="container">
    
      <form class="form-signin" method="post" action="include/loginproc.php">
      
      <label for="inputEmail" class="sr-only">Emel</label>
      <input type="email" id="email" name ="email" class="form-control mb-2" placeholder="Emel" required autofocus>
      <label for="inputPassword" class="sr-only">Katalaluan</label>
      <input type="password" id="password" name ="pass" class="form-control" placeholder="Katalaluan" required>
      <p>login credentials examples? <a href="#"data-toggle="modal" data-target="#exampleModalCenter">click here</a> </p>
      <button class="btn btn-md btn-primary btn-block" type="submit" name="submit">Log Masuk</button>
      </form>

    </div> <!-- /container -->
  </body>
  <!-- Modal -->
<div class="modal fade" id="exampleModalCenter" tabindex="-1" role="dialog" aria-labelledby="exampleModalCenterTitle" aria-hidden="true">
  <div class="modal-dialog modal-dialog-centered" role="document">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="exampleModalLongTitle">Example login credentials</h5>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
      <div class="modal-body">
        <strong>Admin</strong>
        <p>Email : admin@email.com <br>Password : user</p>
        <strong>User</strong>
        <p>Email : user@email.com <br>Password : user</p>
        <strong>Accountant</strong>
        <p>Email : accountant@email.com <br>Password : user</p>
      </div>
      
    </div>
  </div>
</div>
  <script src="js/jquery.min.js" ></script>
  <script src="js/popper.min.js"></script>
  <script src="js/bootstrap.min.js"></script>
  <?php
  if(isset($_GET['s'])){
      $s = $_GET['s'];
      switch ($s){
          case 'lot':
          echo  '<script type="text/javascript" language="javascript">
          swal("Berjaya", "Berjaya Log Keluar", "success");</script>';
          break;
          case 'lt':
          echo  '<script type="text/javascript" language="javascript">
          swal("Berjaya", "Berjaya Log Masuk", "success");</script>';
          break;
          case 'lf':
          echo  '<script type="text/javascript" language="javascript">
          swal("Gagal", "Kemungkinan Akaun anda tidak aktif atau Emel dan katalaluan anda salah. sila cuba lagi.", "error");</script>';
          break;
          
          case 'fl':
          echo  '<script type="text/javascript" language="javascript">
          swal("Gagal", "Maaf, anda perlu log masuk terlebih dahulu", "error");</script>';
          break;
          default:
          }
    }
    ?>
</html>
