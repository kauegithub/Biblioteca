<?php
	$phpconnect = mysqli_connect("localhost","root","","site_biblioteca");
 
	if (mysqli_connect_errno()){
		echo "Connection Failed; " . mysqli_connect_error();
	}else{
		 echo "Connection Established.<br>";
	}
?>