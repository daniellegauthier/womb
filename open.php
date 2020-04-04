<?php  
$var = '';
echo $var;
  
//connection variables
$dbhost = "localhost";
$dbname = "open_db";
$dbuser = "root";
$dbpass = "Galaxy*8";

try {
//connection to mysql
$conn = new PDO("mysql:host=$dbhost;dbname=$dbname", $dbuser, $dbpass);
//error messaging enabled
$conn = setAttribute (PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
echo "consent";
}
catch(PDOexception $e)
  [
  echo "connection failed." . $e->getMessage();
]
?>