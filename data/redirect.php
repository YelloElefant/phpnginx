<!DOCTYPE html>
<html lang="en">
<head>
  <meta http-equiv="refresh" content="0; url=/">
</head>
</html>
<?php


$servername = "db";
$username = "yelloelefant";
$password = "elefant";
$dbname = "PHP";

$firstname = $_POST['firstname'];
$lastname = $_POST['lastname'];
$email = $_POST['email'];
$access = TRUE;

$conn = new mysqli($servername, $username, $password, $dbname);

if ($firstname === 'First Name') {$access = FALSE;}
if ($firstname === 'Last Name') {$access = FALSE;}
if ($firstname === 'Email') {$access = FALSE;}




if ($conn->connect_error) {
  die("Connection failed: " . $conn->connect_error);
}
echo "Connected successfully";


if ($access === TRUE){


  $sql = "INSERT INTO People (firstname, lastname, email) VALUES ('$firstname', '$lastname', '$email')";

  if ($conn->query($sql) === TRUE) {
    echo "New record created successfully";
  } else {
    echo "Error: " . $sql . "<br>" . $conn->error;
  }

  $conn->close();
}
else {
  echo "no";
}
?>


