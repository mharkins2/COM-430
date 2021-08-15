<?php
if (isset($_POST['Submit'])) {
  $username = $_POST["username"] ;
  $Password = $_POST["Password"] ;

require_once 'dbh.inc.php' ;
require_once 'functions.inc.php' ;

//error handler in the event the user logs in incorrectly
if  (emptyLogin($username, $Password) !== false) {
    header("location: ../login.php?error=emptyinput") ;
    exit();
}
//function used to login user
loginUser($conn, $username, $Password) ;
}

else {
header("location:   ../login.php") ;
exit();
}
