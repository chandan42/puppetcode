<?php
 $conn = mysqli_connect("192.168.33.52","root","","mysql");
 if (!$conn) {
	die("Connection failed");
 }
 echo "Connected Successfully";
 $res = mysqli_query($conn, "select distinct User from user");
 while ($row = mysqli_fetch_assoc($res)){
	echo "<h1> " . $row["name"] . "</h1>";
 }
 echo "Pitching in from " . gethostname();

?>
