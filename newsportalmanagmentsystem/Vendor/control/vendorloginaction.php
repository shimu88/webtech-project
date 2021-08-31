<?php
$email=$_POST['email'];
$passsword=$_POST['password'];

if(!empty($email)||!empty($passsword))
{
    $host="localhost";
    $dbusername="root";
    $dbpassword="";
    $dbname="newspaper";

    ///Create Connection
    $conn= new mysqli($host,$dbusername,$dbpassword,$dbname);
    if(mysqli_connect_error())
    {
        die('Connect Error('.mysqli_connect_error());
    }
    else
    {
        $SELECT="SELECT * from registration where email= ?";
        $stmt=$conn->prepare($SELECT);
        $stmt->bind_param("s",$email);
        $stmt->execute();
        $stmt_result=$stmt->get_result();
        if($stmt_result->num_rows>0)
        {
            $data=$stmt_result->fetch_assoc();
            if($data['passsword']==$passsword)
            {
                
                header("location: /Project/Vendor/view/welcomevendor.php"); 
                
            }
            else
            {
                echo "Invalid email or password";
            }
        }
    }
}

?>