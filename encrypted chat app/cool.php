<!DOCTYPE HTML> 
<html>
<head>
<link type="text/css" rel="stylesheet" href="style.css" />
</head>
<body> 

<?php
// define variables and set to empty values
$name = $email = $gender = $comment = $website = "";

if ($_SERVER["REQUEST_METHOD"] == "POST") {
   $name = $_POST["user"];
   
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
$sql = "INSERT INTO user (username)
VALUES ('$name')";

// set parameters and execute

$val = $name;





?>
<?php
// define variables and set to empty values
 $email = $gender = $comment = $msg = "";

if ($_SERVER["REQUEST_METHOD"] == "POST") {
   $msg = $_POST["message"];
   
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
$stmt = $conn->prepare("INSERT INTO test ( message) VALUES (?)");
$stmt->bind_param("s", $message);

// set parameters and execute

$message = $msg;

$stmt->execute();




?>
 

 

//document.getElementById('chatbox').innerHTML=" ";
}

</script>



<div id="wrapper" >

    <div id="menu">
        <p class="welcome">Welcome, <b></b></p>
        <p class="logout"><a id="exit" href="#">Exit Chat</a></p>
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

$sql = "select s.username,d.message from user s,test d";
$result = $conn->query($sql);

if ($result->num_rows > 0 ) {
	//&& $row["message"]
    // output data of each row
    while($row = $result->fetch_assoc()) {
        echo  " " . $row["username"].  ": " . $row["message"]. "<br>";
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
<h1> DB </h1>




</body>
</html>