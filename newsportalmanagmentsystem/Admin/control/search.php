<?php

// Create connection
$conn = mysqli_connect("localhost", "root", "", "newspaper");
$sql = "SELECT * FROM registration WHERE fname LIKE '%".$_POST['name']."%'";
$result = mysqli_query($conn, $sql);
if(mysqli_num_rows($result)>0){
	while ($row=mysqli_fetch_assoc($result)) {
		echo "	<tr>
		          <td>".$row['fname']."</td>
		          <td>".$row['lname']."</td>
		          <td>".$row['email']."</td>
		          <td>".$row['gender']."</td>
				  <td>".$row['phone']."</td>
				  <td>".$row['passsword']."</td>
		        </tr>";
	}
}
else{
	echo "<tr><td>0 result's found</td></tr>";
}

?>