<?php

echo "<HTML>\n";

include("dbconfig.php");
$con = mysqli_connect("imc.kean.edu", "yauh", "1041428", "CPS3740");
if (mysqli_connect_errno()) {
    echo "Failed to connect to MySQL: " . mysqli_connect_error();
      exit();
}

$fname = str_replace("'","'",$_POST['fname']);
$lname = str_replace("'","'",$_POST['lname']);
$pnumber = str_replace("'","'",$_POST['pnumber']);
$email = str_replace("'","'",$_POST['email']);
$loginID = str_replace("'","'",$_POST['loginID']);
$password = str_replace("'","'",$_POST['password']);
$address = str_replace("'","'",$_POST['address']);
$city = str_replace("'","'",$_POST['city']);
$state = str_replace("'","'",$_POST['state']);
$zipcode = str_replace("'","'",$_POST['zipcode']);


$stmt = $con->prepare("INSERT INTO CPS3740_2021F.Lab4program_yauh (fname,lname,pnumber,email,loginID,password,address,city,state,zipcode)
VALUE (?, ?, ?, ?, ?, ?, ?, ?, ?, ?)");
$stmt->bind_param($fname, $lname, $pnumber, $email, $loginID, $password, $address, $city, $state, $zipcode);
$stmt->execute();


if ($stmt->errno) {
 echo "<br>Account Creation failed!\n";
 printf("<br>Error: %s\n", mysqli_error($con));
 $stmt->close();
}

else {
  echo "<br>Account Created!\n";
  $stmt->close();
}

?>