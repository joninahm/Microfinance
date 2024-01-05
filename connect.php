<?php
$host = "localhost";
$user = "root";
$password = "";
$database = "microfinance";
$con = mysqli_connect($host, $user, $password, $database);
if($con){
    echo"connected successfully to database";

}
else{
    echo"connection to database failed";
}
?>