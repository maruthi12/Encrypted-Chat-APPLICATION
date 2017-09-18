<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>Untitled Document</title>
</head>

<body>
<script>
var r = confirm("Press a button");
if (r == true) {
    


//document.cookie= document.getElementById('usermsg').value; 



<?php



$servername = "localhost";
$username = "root";
$password = "";
$dbname = "test";

// Create connection
$conn = new mysqli($servername, $username, $password, $dbname);

// Check connection
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}

// prepare and bind
$stm = $conn->prepare("TRUNCATE table user");



// set parameters and execute

$stmt->execute();


$conn->close();


?>}
 
else {
   
}
 

//document.getElementById('chatbox').innerHTML=" ";


</script>
</body>
</html>
