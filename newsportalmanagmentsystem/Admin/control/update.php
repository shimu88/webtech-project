<?php

// Create connection
$conn = mysqli_connect("localhost", "root", "", "newspaper");
// Check connection
if ($conn->connect_error) {
  die("Connection failed: " . $conn->connect_error);
}
// sql to delete a record
$sql = "UPDATE registration SET lname='shimu' WHERE id=6";
if ($conn->query($sql) === TRUE) {
  echo "Record updated successfully";
} else {
  echo "Error updating record: " . $conn->error;
}
$conn->close();
?>