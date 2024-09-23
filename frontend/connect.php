
<?php
$url ='localhost';
$username ='huutho15012003';
$password ='123456';
$db_name ='dryfruit';


$conn = mysqli_connect($url, $username, $password, $db_name);

mysqli_set_charset($conn, 'UTF8');

if($conn === false){ 
die("ERROR: Could not connect. " . mysqli_connect_error()); 
}
else {

}
?> 
