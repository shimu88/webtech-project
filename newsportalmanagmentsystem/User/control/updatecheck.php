<?php
include('../model/database.php');


 $error="";

if (isset($_POST['update'])) {
if (empty($_POST['fname']) || (empty($_POST['lname']) || empty($_POST['email'])) {
$error = "input given is invalid";
}
else
{
$connection = new db();
$conobj=$connection->OpenCon();

$userQuery=$connection->UpdateUser($conobj,"newspaper",$_SESSION["email"],$_POST['fname'], $_POST['lname'],$_POST['email'],$_POST['gender']);
if($userQuery==TRUE)
{
    echo "update successful"; 
}
else
{
    echo "could not update";    
}
$connection->CloseCon($conobj);

}
}


?>