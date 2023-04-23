<?php
$server="localhost";
$username="root";
$password="";
$con=new mysql($server,$username,$password);
if($con->connect_error)
{
    die("Connection Error".$con->connect_error);
}
echo "Connection Successful";
?>