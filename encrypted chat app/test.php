<!DOCTYPE HTML> 
<html>
<head>

<link type="text/css" rel="stylesheet" href="style.css" />
</head>
<body background="chat.jpg"> 
<?
session_start();
$key_value = "KEYVALUE";

?>

<?php

// define variables and set to empty values
$name = $email = $gender = $comment = $website = "";

if ($_SERVER["REQUEST_METHOD"] == "POST") {
   $_SESSION["username"] = $_POST["user"];
   
}


?>
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
$stmt = $conn->prepare("INSERT INTO user ( username) VALUES (?)");
$stmt->bind_param("s", $val);

// set parameters and execute

$val = $_SESSION["username"];

$stmt->execute();
$last_id = $stmt->insert_id;
$mid=$last_id;
$ql = "SELECT id from user";
$resu = $conn->query($ql);

if ($resu->num_rows > 0 ) {
	//&& $row["message"]
    // output data of each row
    while($row = $resu->fetch_assoc()) {
        $new= " " . $row["id"]. "<br>";
		
    }
} 


?>
<?php
$key_value = "KEYVALUE";


// define variables and set to empty values

 $email = $gender = $comment = "";

if ($_SERVER["REQUEST_METHOD"] == "POST") {
   $msg = $_POST["message"];
   $string= mcrypt_ecb(MCRYPT_DES, $key_value, $msg, MCRYPT_ENCRYPT);
}

?>

<script>

function f1()
{

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
$stmt = $conn->prepare("INSERT INTO test ( messageid,message) VALUES (?,?)");
$stmt->bind_param("is",$messageid, $message);


// set parameters and execute
$messageid =$new ;

$message = $string;

$stmt->execute();


$conn->close();


?>
 

 

//document.getElementById('chatbox').innerHTML=" ";
}


</script>



<div id="wrapper" >

    <div id="menu">
        <p class="welcome">Welcome, <b></b></p>
         
        <p class="logout"><a href="intro.htm">
   <button>Re-login</button>
</a></p><br>
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

$sql = "select s.username,d.message,d.time from user s,test d where s.id=d.messageid";
$result = $conn->query($sql);


if ($result->num_rows > 0 ) {
	//&& $row["message"]
    // output data of each row
    while($row = $result->fetch_assoc()) {
		 $row["message"]=mcrypt_ecb(MCRYPT_DES, $key_value, $row["message"], MCRYPT_DECRYPT);
        echo "<br><div style='text-align:left'> ". $row["time"]."<br><div style='text-align:left'> " . $row["username"].  "<span style='color:#0000FF'>(Logged In)</span> :" . $row["message"] . "</div></div>";
	}
} else {
    echo "0 results";
}
$conn->close();
?>

        <div style="clear:both"></div>
    </div>
     
    

<form method="post" action="<?php echo htmlspecialchars($_SERVER["PHP_SELF"]);?>"> 
  <p>
    <input type="text" name="message" id="usermsg" size=63> 
  </p>
  <p>
  <input type="submit" name="Submit" value="Send" onClick="f1()">
  

  
  
  </p> 
</form>







</body>

</html>