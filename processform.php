<?php
require_once("connect.php");

$cname=$_POST['ClientName'];
$rs=$_POST['Reason'];
$pl=$_POST['Principle'];
$it=$_POST['Interest'];

$query = "INSERT INTO loans (ClientName, Reason, Principle, Interest) VALUES(?,?,?,?)";


$statement=mysqli_prepare($con ,$query);

mysqli_stmt_bind_param($statement,"ssss",$cname,$rs,$pl,$it);


mysqli_stmt_execute($statement);
echo "data submitted successfully";
?>