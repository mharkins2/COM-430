<?php
      include_once 'header.php' ;
  ?>



<section class = "login-form">
  <h2> Log In</h2>
  <div class = "login-form-form">
  <form action="includes/login.inc.php"  method="post">
    <input type="text" name="username" placeholder="UserName...">
    <input type="password" name="Password" placeholder="Password..." autocomplete="off">

  <button type="Submit" name="Submit">Sign In</button>

  </form>
</div>
<?php
if (isset($_GET["error"]))
{
  if($_GET["error"] == "emptyinput"){
    echo "<p>Please Fill In All Fields</p>" ;
  }
  elseif ($_GET["error"] == "UsernameIncorrect"){
    echo "<p>Incorrect UserName</p>" ;
  }
  elseif ($_GET["error"] == "passwordIncorrect"){
    echo "<p>Incorrect User Password</p>" ;
  }
}
 ?>
</section>
  </body>
</html>
