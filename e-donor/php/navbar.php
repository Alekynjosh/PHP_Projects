<?php #include 'connection.php'; ?>

<link rel="stylesheet" href="../css/bootstrap.min.css">
<script src="../js/jquery.min.js"></script>
<script src="../js/bootstrap.min.js"></script>
<link rel="stylesheet" href="../css/font-awesome.min.css">
<script src="//netdna.bootstrapcdn.com/bootstrap/3.0.0/js/bootstrap.min.js"></script>
<script src="//code.jquery.com/jquery-1.11.1.min.js"></script>
<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
<link href="https://fonts.googleapis.com/css?family=Raleway:200,300,400,700" rel="stylesheet">
<link href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css" rel="stylesheet">

<link rel="Shorcut icon" href="../donor.png">
<body style="background-image: url(../images/blood2.jpg);">
	<nav class="navbar navbar-default">
  <div class="container-fluid">
    <div class="navbar-header">
      <a class="navbar-brand navbar-center" href="#"><img src="../donor.png" width="50px" height="30px"></a>
    </div>
    <ul class="nav navbar-nav">
      <li class="active"><a href="../index.php"><span><big>e</big>-</span>Donor</a></li>
    </ul>
    <ul class="nav navbar-nav navbar-right">
      <li><a href="#"><span class="glyphicon glyphicon-user"></span>
        <?php if (isset($_SESSION['username'])): ?>
            <?php echo $_SESSION['username']; ?>
        <?php endif ?>
        <?php if (isset($_SESSION['recipient'])): ?>
            <?php echo $_SESSION['recipient']; ?>
        <?php endif ?>
    </a></li>

      <li><a href="../index.php?logout='1'">
        <?php 
          if (isset($_SESSION['username']) || isset($_SESSION['recipient'])) {
            echo '<span class="glyphicon glyphicon-log-in"></span> Logout';
          }
         ?>
        </a></li>
    </ul>
  </div>
</nav> 

