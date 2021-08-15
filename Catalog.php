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

    <section id="row1">
      <div class="card">
        <img src="./img/desktop.jpg" alt="Desktop" style="width:100%">
        <h1>Desktop Computer</h1>
        <p class="price">$800.00</p>
        <p>Dell Desktop</p>
        <p><button>Add to Cart</button></p>
      </div>

      <div class="card">
        <img src="./img/laptop.jpg" alt="Laptop" style="width:100%">
        <h1>Company Laptop</h1>
        <p class="price">$1099.99</p>
        <p>Microsoft Surface Laptop</p>
        <p><button>Add to Cart</button></p>
      </div>

      <div class="card">
        <img src="./img/monitor.jpg" alt="Monitors" style="width:100%">
        <h1>Monitors</h1>
        <p class="price">$159.99</p>
        <p>Dell 24" Monitor</p>
        <p><button>Add to Cart</button></p>
      </div>
    </section>
    <section id="row2">
      <div class="card">
        <img src="./img/mousenkeyboard.png" alt="Keyboard and Mice Combo" style="width:100%">
        <h1>Keyboard and Mice Combo</h1>
        <p class="price">$19.99</p>
        <p>Logitech Wireless Mouse and Keyboard</p>
        <p><button>Add to Cart</button></p>
      </div>

      <div class="card">
        <img src="./img/sap.png" alt="SAP Gui" style="width:100%">
        <h1>SAP Access</h1>
        <p class="price">$19.99</p>
        <p>SAP Access</p>
        <p><button>Add to Cart</button></p>
      </div>

      <div class="card">
        <img src="./img/acrobat.jpg" alt="Adobe Acrobat" style="width:100%">
        <h1>Adobe Acrobat</h1>
        <p class="price">$19.99</p>
        <p>Subscription for Adobe Acrobat</p>
        <p><button>Add to Cart</button></p>
      </div>


    </section>



    <footer>
      <div class="container">
        <p id="copyright">CorpGrowth LLC, Copyright &copy; 2021</p>
      </div>
    </footer>

  </body>
</html>
