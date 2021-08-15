<?php

function emptyInputCreateUser($EmployeeID, $Fname, $Mname,  $Lname, $DOB, $PhoneNum, $Email, $Address, $City, $State, $ZIP, $Country, $Department, $Position, $DOE, $Access_Level, $username,$password ) {
$result;
if (empty($EmployeeID) || empty($Fname) || empty($Mname) || empty($Lname) || empty($DOB) || empty($PhoneNum) || empty($Email) || empty($Address) || empty($City) || empty($State) ) {
  $result = true ;
}

if (empty($ZIP) || empty($Country) || empty($Department) || empty($Position) || empty($DOE) || empty($Access_Level) || empty($username) || empty($password)) {
  $result = true;
}
else {
  $result = false;
}
return $result ;
}
/*function invalidUsername($username){
$result;
if (!preg_match("/^[a-zA-Z0-9]*$/", $username)) {
  $result = true ;
}
else {

  $return  = false ;
}
return $result ;
} */
/*function invalidEmployeeID($EmployeeID){
  $result;
  if (!preg_match("/^[A-Z0-9]*$/", $EmployeeID)) {
    $result = true ;
  }
  else {

    $return  = false ;
  }
  return $result ;
} */
function employeeIDExists($conn, $EmployeeID){
    $sql = "SELECT * FROM employeebio WHERE EmployeeID = ?;" ;
    $stmt = mysqli_stmt_init($conn) ;
    if (!mysqli_stmt_prepare($stmt, $sql)) {
        header("location: ../createuser.php?error=stmtfailed") ;
        exit();
      }
      mysqli_stmt_bind_param($stmt, "s", $EmployeeID) ;
      mysqli_stmt_execute($stmt) ;

      $resultData = mysqli_stmt_get_result($stmt) ;

      if ($row = mysqli_fetch_assoc($resultData)) {
        return $row ;
        }
        else {
    $result = false;
    return $result;
  }

  mysqli_stmt_close($stmt) ;
}
function usernameExists($conn, $username){
  $sql = "SELECT * FROM employee_login WHERE username = ?;" ;
  $stmt = mysqli_stmt_init($conn) ;
  if (!mysqli_stmt_prepare($stmt, $sql)) {
    header("location: ../createuser.php?error=stmtfailed") ;
    exit();
  }
  mysqli_stmt_bind_param($stmt, "s", $username) ;
  mysqli_stmt_execute($stmt) ;

  $resultData = mysqli_stmt_get_result($stmt) ;

    if ($row = mysqli_fetch_assoc($resultData)) {
      return $row ;
    }
    else {
      $result = false;
      return $result;
    }

    mysqli_stmt_close($stmt) ;
  }

//function to insert data into table employeebio
function createUserBio($conn, $EmployeeID, $Fname, $Mname,  $Lname, $DOB, $PhoneNum, $Email, $Address, $City, $State, $ZIP, $Country){

  $sql = "INSERT INTO employeebio (EmployeeID, fname, mname, lname, DOB, PhoneNum, email, address, city, state, zip, country) VALUES (?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?);" ;

  $stmt = mysqli_stmt_init($conn) ; //initialize connction between website and database
  if (!mysqli_stmt_prepare($stmt, $sql)) {
    header("location: ../createuser.php?error=stmtfailed") ;
    exit();
    }
// $hashedPassword = password_hash($password, PASSWORD_DEFAULT) ;
  mysqli_stmt_bind_param($stmt, "ssssssssssss", $EmployeeID, $Fname, $Mname,  $Lname, $DOB, $PhoneNum, $Email, $Address, $City, $State, $ZIP, $Country) ;

  mysqli_stmt_execute($stmt) ;
  mysqli_stmt_close($stmt) ;

// header("location: ../index.php?error=successfulcreation") ;
// exit();
}

// function to insert data in table 'employee_job_data'
function createUserJobData($conn, $EmployeeID, $Department, $Position, $DOE, $Access_Level){

  $sql = "INSERT INTO employee_job_data (EmployeeID, department, position, DOE, access_level) VALUES (?, ?, ?, ?, ?);" ;

  $stmt = mysqli_stmt_init($conn) ; //initialize connction between website and database
  if (!mysqli_stmt_prepare($stmt, $sql)) {
    header("location: ../createuser.php?error=stmtfailed") ;
    exit();
  }

  mysqli_stmt_bind_param($stmt, "sssss", $EmployeeID, $Department, $Position, $DOE, $Access_Level) ;

  mysqli_stmt_execute($stmt) ;
  mysqli_stmt_close($stmt) ;

// header("location: ../index.php?error=successfulcreation") ;
// exit();
}


//function to insert data in table 'employee_login'
function createUserLogin($conn, $EmployeeID, $username, $password ){

$sql = "  INSERT INTO employee_login (EmployeeID, username, password) VALUES (?, ?, ?);" ;

$stmt = mysqli_stmt_init($conn) ; //initialize connction between website and database
if (!mysqli_stmt_prepare($stmt, $sql)) {
header("location: ../createuser.php?error=stmtfailed") ;
exit();
}
$hashedPassword = password_hash($password, PASSWORD_DEFAULT) ;
mysqli_stmt_bind_param($stmt, "sss", $EmployeeID, $username, $hashedPassword) ;

mysqli_stmt_execute($stmt) ;
mysqli_stmt_close($stmt) ;

header("location: ../createuser.php?error=none") ;
exit();
}


//function to check for empty input on login screen
function emptyLogin($username,$password ) {
$result;
//testing if username or password field were left empty
if (empty($username) || empty($password)) {
  $result = true;
}
else {
  $result = false;
}
return $result ;
}

//function that will log in the user into a new session
function loginUser($conn, $username, $Password){

$usernameExists = usernameExists($conn, $username) ;

if ($usernameExists === false) {
  header("location: ../login.php?error=UsernameIncorrect") ;
  exit();
}

$passwordHashed = $usernameExists ["password"] ;
$checkPassword = password_verify($Password, $passwordHashed) ;

if ($checkPassword === false) {
  header("location: ../login.php?error=passwordIncorrect") ;
  exit();
}
elseif ($checkPassword === true) {
  session_start();
  $_SESSION["EmployeeID"] = $usernameExists["EmployeeID"] ;
  $_SESSION["username"] = $usernameExists["username"] ;
  header("location: ../profile.php") ;
  exit() ;
}

}
