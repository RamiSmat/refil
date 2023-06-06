<?php 
session_start();
?>
<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <link rel="stylesheet" href="css/style.css">
  <link rel="stylesheet" href="css/reset.css">
  <title>ReFil</title>
</head>
<body>
  <nav>
    <div class="wrapper">
      <a href="index.php"><img class="logo" src="img/logo.png" alt="Refil's Logo"></a>
      <ul>
        <li><a class="header-btn" href="index.php">Home |</a></li>
        <li><a class="header-btn"  href="discover.php"> About us |</a></li>
        <?php 
          if(isset($_SESSION["useruid"])){
            echo "<li><a class='header-btn' href='profile.php'> Profile |</a></li>";
            echo "<li><a class='header-btn'  href='includes/logout.inc.php'> Log out</a></li>";
          }
          else{
            echo "<li><a class='header-btn'  href='signup.php'> Sign up |</a></li>";
            echo "<li><a class='header-btn'  href='login.php'> Log in</a></li>";
          }

        ?>
        
        </ul>
    </div>
</nav>
  
