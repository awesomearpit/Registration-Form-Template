<?php
include('database.php');
$uname=$_POST['username'];
$pass=$_POST['pass'];
$email=$_POST['email'];
$fname=$_POST['fname'];
$lname=$_POST['lname'];
$gender=$_POST['gender'];
$sql="insert into form(username,pass,email,fname,lname,gender) values ('".$uname."','".$pass."','".$email."','".$fname."','".$lname."','".$gender."')";
if($conn->query($sql)=== true){
	// echo "record insert";
	header('Location:form_success.php');
}
else{
	
	// echo "Error";
}
$conn->close();
?>