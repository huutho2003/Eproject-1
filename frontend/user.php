<?php
require_once ('../db/dbhelper.php');
$id= '';
if (isset($_GET['id'])) {
	$id       = $_GET['id'];
	$sql      = 'select * from viewer where id = '.$id;
	$viewer = executeSingleResult($sql);
	if ($viewer != null) {
		$user_name = $viewer['user_name'];
	}
}
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>viewer</title>
    <style>
        h1{
            text-align: center;
        }
        h3{
            text-align: center;
        }
        div{
            border: solid;
        }body{
            background: url(anh/anh111.jpg);
            background-size: cover;
            background-position-y: -100px;
            padding: auto;
        }
    </style>
</head>
<body>
    
<h1>User information</h1>
    <div class="viewer">
    <h3>Full Name:<?=$viewer['first_name']?> <?=$viewer['last_name']?></h3>
    <h3>Location:<?=$viewer['location']?></h3>
    <h3>Phone Number:<?=$viewer['phone_number']?></h3>
    <h3>Email:<?=$viewer['email']?></h3>
<a href='index-1.php' class="Return" title='Return'> <h3>Return</h3></a>
    </div>
</body>
</html>