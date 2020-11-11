<?php
	$UserName = $_POST['UserName'];
	$Password = $_POST['Password'];
	$FirstName = $_POST['FirstName'];
	$LastName = $_POST['LastName'];
	$Email = $_POST['Email'];
	$Mobile = $_POST['Mobile'];
	$Address = $_POST['Address'];
	
	$conn=new mysqli('localhost','root','','yaswanth_garments');
	if ($conn->connect_error){
		die('Connection Failed :'.$conn->connect_error);
	}else{
		$stmt=$conn->prepare("insert into customer(UserName, Password, FirstName, LastName, Email, Mobile, Address )
			values(?, ?, ?, ?, ?, ?, ?)");
		$stmt->bind_param("sssssis", $UserName, $Password, $FirstName, $LastName, $Email, $Mobile, $Address);
		$stmt->execute();
		//echo "registration sucessfully....!";
		header("location:login.php");
		$stmt->close();
		$conn->close();
	}

?>  