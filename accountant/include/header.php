<?php include '../include/config.php';
check(1);
$staffid = $_SESSION['sid'] ;
$ns = ucwords($_SESSION['name']);

?>
<!doctype html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="description" content="">
    <meta name="author" content="">
    <link rel="icon" href="favicon.ico">

    <title>Role Based Access Control</title>

    <!-- Bootstrap core CSS -->
    <link href="../css/bootstrap.min.css" rel="stylesheet">

    <!-- Custom styles for this template -->
    <style>
    body {
    padding-top: 5rem;
    padding-bottom: 5rem;
    }
    .starter-template {
    padding: 3rem 1.5rem;
    text-align: center;
    }
      
    </style>
    
    <link rel="stylesheet" href="../css/sweetalert.css">
    <link rel="stylesheet" href="../css/bootstrap.min.css" >
    <script src="../js/sweetalert.min.js"></script>
    
  </head>

  <body>

    <nav class="navbar navbar-expand-md navbar-dark bg-dark fixed-top">
      <a class="navbar-brand" href="index.php">Role Based Access Control</a>
      <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarsExampleDefault" aria-controls="navbarsExampleDefault" aria-expanded="false" aria-label="Toggle navigation">
        <span class="navbar-toggler-icon"></span>
      </button>

      <div class="collapse navbar-collapse" id="navbarsExampleDefault">
        <ul class="navbar-nav mr-auto">
          
        </ul>
            <a class="btn btn-outline-info my-2 my-sm-0" href="../include/logout.php" >Logout</a>
           
      </div>
    </nav>

    <main role="main" class="container">
    