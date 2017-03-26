<?php
include('database.php');
$username=$_POST['username'];
$pass=$_POST['pass'];
$email=$_POST['email'];
$fname=$_POST['fname'];
$lname=$_POST['lname'];
$gender=$_POST['gender'];
$id=$_POST['id'];
 $sql = "UPDATE form SET username='$username' ,pass='$pass' ,email='$email' ,fname='$fname' ,lname='$lname' ,gender='$gender' WHERE id='".$id."'";
if ($conn->query($sql) === TRUE) {
    echo "Record updated successfully";
} else {
    echo "Error updating record: " . $conn->error;
}
header('Location:form_show.php');
?>