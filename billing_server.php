<?php
	$FullName = $_POST['FullName'];
	$Email = $_POST['Email'];
	$Address = $_POST['Address'];
	$City= $_POST['City'];
	$State = $_POST['State'];
	$Mobile = $_POST['Mobile'];
	
	
	$conn=new mysqli('localhost','root','','yaswanth_garments');
	if ($conn->connect_error){
		die('Connection Failed :'.$conn->connect_error);
	}else{
		$stmt=$conn->prepare("insert into shipping(FullName, Email, Address, City, State, Mobile )
			values(?, ?, ?, ?, ?, ?)");
		$stmt->bind_param("sssssi", $FullName, $Email, $Address, $City, $State, $Mobile);
		$stmt->execute();
		//echo "your order has been done....! thanking for shopping :) ";
		header("location:thankyou.php");
		$stmt->close();
		$conn->close();
	}

?>  