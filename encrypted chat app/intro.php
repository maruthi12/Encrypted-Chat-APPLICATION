<html>
<style type="text/css">

.green {
	color: #80FF00;
}

.BLUE {
	color: #00F;
}
</style>
<?php
// define variables and set to empty values
$name = $email = $gender = $comment = $user = "";

if ($_SERVER["REQUEST_METHOD"] == "GET") {
   $user = $_GET["user"];
   
}


?>


<body background="Untitled-1.jpg" >



&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
<div>
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
$stmt = $conn->prepare("INSERT INTO user (username) VALUES (?)");
$stmt->bind_param("s", $val);

// set parameters and execute

$val = $user;

$stmt->execute();




?>
 

//document.getElementById('chatbox').innerHTML=" ";
}

</script>


<form method="get" action=""> 
  <table width="441" height="429" border="3">
    <label></label>
    
    &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
    
    <tr>
    
      <td><div align="center">
        <h2><span class="BLUE"><strong>LOGIN</strong></span><strong><br>
          <br>
          </strong>
        </h2>
      </div>
        <h3><strong>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;  <span class="green">USERNAME:
          </span>
            <input name="user" type="text" id="user">
        </strong></h3>
        <p>&nbsp;</p>
        <h3 align="left"><strong>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; &nbsp;<span class="green">PASSWORD:  </span>
            <input type="password" name="textfield" id="textfield4">
        </strong></h3>
        <p>&nbsp;</p>
        <p> <strong>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</strong>&nbsp;
          &nbsp;&nbsp;
          <input type="submit" name="submit" id="submit" value="Submit" onClick="f1()"  >
          &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
          <input type="reset" name="Reset" id="Reset" value="Reset">
      </p></td>
    </tr>
  </table>
</div>
></form>
</body>
</html>