<?php
    session_start();
?>
<!DOCTYPE html>
<html lang="en" dir="ltr">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width">
    <meta name="description" content="CorpGrowth Company Portal for Internal Employee Access">
    <meta name="author" content="Matthew Harkins & Durelle Maynard">
    <title>CorpGrowth Portal | Home</title>
    <link rel="stylesheet" href="./css/style.css">
	<link rel="stylesheet" href="./css/login.css">

  </head>
  <body>
    <header>
      <div class="container">
        <div id="logo">
          <a href="index.php"><img src="./img/CorpGrowth.png" alt="CorpGrowth Logo"></a>
        </div>

      <div class="container">

      </div>
    </header>
    <nav>
      <div class="container">
        <div class="navbar">
          <a href="index.php">Home</a>

          <a href="faq.php">FAQ</a>
          <div class="dropdown">
            <button class="dropbtn">HR
              <i class="fa fa-caret-down"></i>
            </button>
            <div class="dropdown-content">
              <a href="#">User</a>
              <a href="#">Admin</a>
            </div>
          </div>
          <div class="dropdown">
            <button class="dropbtn">IT
              <i class="fa fa-caret-down"></i>
            </button>
            <div class="dropdown-content">
              <a href="openrequests.php">Open Request</a>
              <a href="catalog.php">Catalog</a>
              <a href="support-view.php">Support View</a>
            </div>
          </div>
          <div class="dropdown">
            <button class="dropbtn">Reporting
              <i class="fa fa-caret-down"></i>
            </button>
            <div class="dropdown-content">
              <a href="user-report.php">Reports</a>
              <a href="report-creator.php">Report Creator</a>
            </div>
          </div>
          <a href="gallery.php">Gallery</a>
        <a href="login.php">Log In</a>

        </div>
      </div>
    </nav>
    <?php
    if (isset($_SESSION["EmployeeID"])) {
      echo "<li><a href='profile.php' >Employee Profile Page</a></li>" ;
      echo "<li><a href='logout.php' >Logout</a></li>" ;
    }
     ?>



<h2>Employee Login</h2>

<form action="../includes/login.inc.php" method="post">
  <div class="imgcontainer">
    <img src="../img/avatar.png" alt="Avatar" class="avatar">
  </div>

  <div class="container">
    <label for="uname"><b>Username</b></label>
    <input type="text" placeholder="Enter Username" name="uname" required>

    <label for="psw"><b>Password</b></label>
    <input type="password" placeholder="Enter Password" name="psw" required>
        
    <button type="submit">Login</button>
    <label>
      <input type="checkbox" checked="checked" name="remember"> Remember me
    </label>
  </div>

  <div class="container" style="background-color:#f1f1f1">
    <button type="button" class="cancelbtn">Cancel</button>

  </div>
</form>


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
 
 		<footer>
			<div class="container">
				<p id="copyright">CorpGrowth LLC, Copyright &copy; 2021</p>
			</div>
		</footer>
  </body>
</html>
