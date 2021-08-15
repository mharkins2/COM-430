<?php
      include_once 'header.php' ;
  ?>

<section class = "createuser-form">
  <h2> Create New Employee Account </h2>
  <div class="Create-User-Form">

  <form action="includes/createuser.inc.php"  method="post">
    <h5>Please enter Employee's Personal Information</h5>

    <input type="text" name="EmployeeID" placeholder="Employee ID #..." autocomplete="off"><br>
    <input type="text" name="Fname" placeholder="First Name..." autocomplete="off">
    <input type="text" name="Mname" placeholder="Middle Name..." autocomplete="off">
    <input type="text" name="Lname" placeholder="Last Name..." autocomplete="off"><br>
    <input type="text" name="DOB" placeholder="Date of Birth..." autocomplete="off">

    <h4>Contact Information</h4>
    <input type="text" name="PhoneNum" placeholder="Phone Number..." autocomplete="off">
        <input type="text" name="Email" placeholder="Email Address..." autocomplete="off"><br><br>
    <input type="text" name="Address" placeholder="Address..." autocomplete="off">
    <input type="text" name="City" placeholder="City..." autocomplete="off"><br><br>
    <input type="text" name="State" placeholder="State..." autocomplete="off">
    <input type="text" name="ZIP" placeholder="ZIP..." autocomplete="off"><br><br>
    <input type="text" name="Country" placeholder="Country..." autocomplete="off">
<h4> Employee's Job Information </h4>
      <input type="text" name="Employee_Department" placeholder="Department..." autocomplete="off">
      <input type="text" name="Employee_Position" placeholder="Position..." autocomplete="off">
      <input type="text" name="DOE" placeholder="Date of Employment..." autocomplete="off">
        <input type="text" name="Access_Level" placeholder="Access Level..." autocomplete="off">
<h4>Employee's Login Information</h4>
        <input type="text" name="username" placeholder="UserName..." autocomplete="off">
        <input type="password" name="Password" placeholder="Password..." autocomplete="off">


<br><br>
    <button type="Submit" name="Submit">Create New Employee</button>
    <br>
    <br>

  </form>
</div>

<?php
if (isset($_GET["error"]))
{
  if($_GET["error"] == "emptyinput"){
    echo "<p>Please Fill In All Fields</p>" ;
  }
  elseif ($_GET["error"] == "EmployeeIDTaken"){
    echo "<p>EmployeeID already exists</p>" ;
  }
  elseif ($_GET["error"] == "UsernameTaken"){
    echo "<p>UserName already exists</p>" ;
  }
  elseif ($_GET["error"] == "stmtfailed"){
    echo "<p>Please try again. If probelm persists, contact technical support.</p>" ;
  }
  elseif ($_GET["error"] == "none"){
    echo "<p>Employee Account has been successfully created!</p>" ;
  }
}
 ?>
</section>


  </body>
</html>
