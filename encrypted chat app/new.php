<!DOCTYPE HTML> 
<html>
<head>
</head>
<body> 

<?php
// define variables and set to empty values
$name = $email = $gender = $comment = $website = "";

if ($_SERVER["REQUEST_METHOD"] == "POST") {
   $name = $_POST["name"];
   
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
$stmt = $conn->prepare("INSERT INTO user ( username) VALUES (?)");
$stmt->bind_param("s", $val);

// set parameters and execute

$val = $name;

$stmt->execute();




?>
 

//document.getElementById('chatbox').innerHTML=" ";
var password = document.getElementById('pwd').value;
var name = document.getElementById('name').value;
if (password = "rawr" && name="adi")
{alert('Correct!')}
else
{alert('Wrong Password')}
}

</script>

<h2>PHP Form Validation Example</h2>

<form method="post" action="<?php echo htmlspecialchars($_SERVER["PHP_SELF"]);?>"> 
   Username: <input type="text" name="name" class="btn">
   <br><br>
   Password: <input type="password" name="pwd">
   <br><br>
   
   
  
   <br><br>
   <input  type="submit" name="submit" value="Submit" onClick="f1()"  > 
</form>



</body>
</html>