<?php
if (isset($_POST["Submit"])) {


$EmployeeID = $_POST["EmployeeID"];
$Fname = $_POST["Fname"];
$Mname = $_POST["Mname"];
$Lname = $_POST["Lname"];
$DOB = $_POST["DOB"];
$PhoneNum = $_POST["PhoneNum"];
$Email = $_POST["Email"];
$Address = $_POST["Address"];
$City = $_POST["City"];
$State = $_POST["State"];
$ZIP = $_POST["ZIP"];
$Country = $_POST["Country"];
$Department = $_POST["Employee_Department"];
$Position = $_POST["Employee_Position"];
$DOE = $_POST["DOE"];
$Access_Level = $_POST["Access_Level"];
$username = $_POST["username"];
$password = $_POST["Password"];

//referencing database call
require_once 'dbh.inc.php' ;
//referencing the functions call
require_once 'functions.inc.php' ;

if (emptyInputCreateUser($EmployeeID, $Fname, $Mname,  $Lname, $DOB, $PhoneNum, $Email, $Address, $City, $State, $ZIP, $Country, $Department, $Position, $DOE, $Access_Level, $username,$password) !== false) {
      header("location: ../createuser.php?error=emptyinput") ;
      exit() ;
}
/*if (invalidUsername($username) !== false) {
header("location: ../createuser.php?error=InvalidUsername") ;
}
if (invalidEmployeeID($EmployeeID) !== false) {
header("location: ../createuser.php?error=InvalidEmployeeID") ;
}
*/
if (employeeIDExists($conn, $EmployeeID) !== false) {
header("location: ../createuser.php?error=EmployeeIDTaken") ;
exit();
}

if (usernameExists($conn, $username) !== false) {
header("location: ../createuser.php?error=UsernameTaken") ;
exit();
}

//function to add data into employeebio table
createUserBio($conn, $EmployeeID, $Fname, $Mname,  $Lname, $DOB, $PhoneNum, $Email, $Address, $City, $State, $ZIP, $Country ) ;
//function to add data to employee_job_data
createUserJobData($conn, $EmployeeID, $Department, $Position, $DOE, $Access_Level) ;
//function to add data to employee_login
createUserLogin($conn, $EmployeeID, $username, $password) ;
}
else {
      header("location: ../createuser.php") ;
      exit() ;
}
