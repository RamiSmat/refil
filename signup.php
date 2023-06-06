<?php 
  include_once 'header.php';
  
?>
<section class="signup-form">
    <h2 class="signuptext" >Sign Up</h2>
    <div class="form-wrapper">
  <form action="includes/signup.inc.php" method="post">
    <label for="name">Name</label>
    <input class="box" type="text" id="name" name="name" placeholder="Name">

    <label for="email">Email</label>
    <input class="box" type="email" id="email" name="email" placeholder="Email">
    <label for="uid">Username</label>
    <input class="box" type="text" name="uid" placeholder="Username">

    <label >Password</label>
    <input class="box" type="password"  name="pwd" placeholder="Password">
    <label for="pwd">Repeat</label>
    <input class="box" type="password" name="pwdrepeat" placeholder="Repeat your password">
    <input class="submit-button" type="submit" value="Register" name="submit">
  </form>
</div>
<?php
if (isset($_GET["error"])){
    if($_GET["error"]=="emptyinput"){
        echo'<p class="para">Fill in all fields</p>';
    }
    else if($_GET["error"]=="invaliduid"){
        echo"<p class='para'>Choose a proper username!</p>";
    }
    else if($_GET["error"]=="invalidemail"){
        echo"<p class='para'>Choose a proper email!</p>";
    }
    else if($_GET["error"]=="passwordsdontmatch"){
        echo"<p class='para'>Passwords doesn't match!</p>";
    }
    else if($_GET["error"]=="stmtfailed"){
        echo"<p class='para'>Something went wrong, try again :(!</p>";
    }
    else if($_GET["error"]=="usernametaken"){
        echo"<p class='para'>Username already taken!</p>";
    }
    else if($_GET["error"]=="none"){
        echo"<p class='para'>You have signed up!</p>";
    }

}
?>
</section>

<?php 
  include_once 'footer.php';
  
?>