<?php 
  include_once 'header.php';
  
?>
<section class="login-form">
    <h2 class="logintext" >Log in</h2>
    <div class="form-wrapper">
  <form action="includes/login.inc.php" method="post">
    <label for="name">Username/Email</label>
    <input class="box" type="text" id="uid" name="uid" placeholder="Username/Email">

    <label >Password</label>
    <input class="box" type="password"  name="pwd" placeholder="Password">
    <input class="submit-button" type="submit" value="Login" name="submit">
  </form>
</div>
<?php
if (isset($_GET["error"])){
    if($_GET["error"]=="emptyinput"){
        echo'<p class="para">Fill in all fields</p>';
    }
    else if($_GET["error"]=="wronglogin"){
        echo"<p class='para'>Incorrect login Information!</p>";
    }
    }
    ?>
</section>
<?php 
  include_once 'footer.php';
  
?>