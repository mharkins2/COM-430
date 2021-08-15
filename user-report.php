<!DOCTYPE html>
<html lang="en" dir="ltr">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width">
    <meta name="description" content="CorpGrowth Company Portal for Internal Employee Access">
    <meta name="author" content="Matthew Harkins & Durelle Maynard">
    <title>CorpGrowth Portal | Home</title>
    <link rel="stylesheet" href="./css/style.css">
  </head>
  <body>
    <header>
      <div class="container">
        <div id="logo">
          <a href="index.html"><img src="./img/CorpGrowth.png" alt="CorpGrowth Logo"></a>
        </div>

        <form id="login">
          <label for="uname">Username</label><br>
          <input type="text" id="uname" name="uname" placeholder="Enter Username..."><br>
          <label for="pwd">Password</label><br>
          <input type="password" id="pwd" name="pwd" placeholder="Enter Password...">
          <input type="submit">
        </form>
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
		  


        </div>
      </div>
    </nav>

    <body>
      <iframe class="report-dashboard" src="https://samples.dundas.com/Dashboard/8cb8fb5d-18c2-42e4-9ef8-78c329562fc4?e=false&vo=viewonly" width="80%" height="900px"></iframe>

      <footer>
        <div class="container">
          <p id="copyright">CorpGrowth LLC, Copyright &copy; 2021</p>
        </div>
      </footer>

    </body>
</html>
