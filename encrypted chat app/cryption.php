<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<script language="javascript" type="text/javascript"> 
function closeMe()

{

var win = window.open("about:blank", "_self");
win.close();

win.close();

}
</script>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>Untitled Document</title>
</head>

<body>
<form>
<input type="button" name="CloseMe" value="Close Me" onclick="closeMe()" />
</form>
<?php 
echo("<h3> Symmetric Encryption </h3>"); 
$secret_key = "KEYVALUE"; 
$plain_text = "hello"; 
$plain_text1 = "how is this?"; 
$iv = mcrypt_create_iv(mcrypt_get_iv_size(MCRYPT_RIJNDAEL_256, MCRYPT_MODE_ECB), MCRYPT_RAND);
$encrypted_text = mcrypt_encrypt(MCRYPT_RIJNDAEL_256, $secret_key,$plain_text, MCRYPT_MODE_CBC, $iv); 
$encrypted_text1 = mcrypt_encrypt(MCRYPT_RIJNDAEL_256, $secret_key,$plain_text1, MCRYPT_MODE_CBC, $iv);
?> 
<?php

$servername = "localhost";
$username = "root";
$password = "";
$dbname = "chatdb";

// Create connection
$conn = new mysqli($servername, $username, $password, $dbname);

// Check connection
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}

// prepare and bind
$stmt = $conn->prepare("INSERT INTO value ( msg) VALUES (?)");
$stmt->bind_param("s", $val);
$val=$encrypted_text;
$stmt->execute();
$stmt = $conn->prepare("INSERT INTO value ( msg) VALUES (?)");
$stmt->bind_param("s", $va);
$va=$encrypted_text1;
$stmt->execute();




$ql = "SELECT msg from value";
$result = $conn->query($ql);

if ($result->num_rows > 0 ) {
	//&& $row["message"]
    // output data of each row
    while($row = $result->fetch_assoc()) {
		$row["msg"]= mcrypt_decrypt(MCRYPT_RIJNDAEL_256, $secret_key, $row["msg"], MCRYPT_MODE_CBC, $iv);
        echo " " .  $row["msg"]. "<br>";
		
    }
} else {
    echo "0 results";
}
?>

</body>
</html>
 