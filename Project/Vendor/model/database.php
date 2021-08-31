<?php
$fname=$_POST['fname'];
$lname=$_POST['lname'];
$email=$_POST['email'];
$gender=$_POST['gender'];
$phone=$_POST['phone'];
$passsword=$_POST['password'];

if(!empty($fname)|| !empty($lname)||!empty($email)||!empty($gender)||!empty($phone)||!empty($password))
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
        $SELECT="SELECT email From registration where email= ? Limit 1";
        $INSERT="INSERT Into registration (fname,lname,email,gender,phone,passsword) 
        values(?,?,?,?,?,?)";

        ///Prepare Statement
        $stmt=$conn->prepare($SELECT);
        $stmt->bind_param("s",$email);
        $stmt->execute();
        $stmt->bind_result($email);
        $stmt->store_result();
        $rnum=$stmt->num_rows;

        if($rnum==0)
        {
            $stmt->close();
            $stmt=$conn->prepare($INSERT);
            $stmt->bind_param("ssssis",$fname,$lname,$email,$gender,$phone,$passsword);
            $stmt->execute();
            echo "All Field Inserterd Succesfully";
            // header("location: ")
        }
        else
        {
            echo "Someone already registered using this email";
        }


        function UpdateUser($conn,$table,$fname, $lname,$email,$gender)
 {
     $sql = "UPDATE $table SET firstname='$fname', '$lname', email='$email', gender='$gender', WHERE fname='$fname'";

    if ($conn->query($sql) === TRUE) {
        $result= TRUE;
    } else {
        $result= FALSE ;
    }
    return  $result;
 }
        $stmt->close();
        $conn->close();
    }

}
else
{
    echo "All Field Are Required";
    die();
}


?>