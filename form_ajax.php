<?php
include('../admin/action/database.php');
$a1=$_POST['a1'];
$sql = "SELECT * FROM register_user where id='".$a1."'";
$result = $conn->query($sql);

if ($result->num_rows > 0) {
    // while($row = $result->fetch_assoc()) {
		
	 echo '1';
 }
// }
else{
	echo '0';
}
?>