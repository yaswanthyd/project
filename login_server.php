<?php 

$host="localhost";
$user="yaswanth";
$password="7448444670";
$db="yaswanth_garments";


$conn=new mysqli($host,$user,$password,$db);



//if(isset($_POST['UserName'])){
    
    $UserName=$_POST['UserName'];
    $Password=$_POST['Password'];
    
    $sql="select * from customer where UserName='$UserName' AND Password='$Password' limit 1";
    
    $result=mysqli_query($conn,$sql);
    $row=mysqli_fetch_array($result,MYSQLI_ASSOC);
	
	
    if(mysqli_num_rows($result)==1){
        //echo "<h1> You Have Successfully Logged in</h1>";
		header("location:main_module.php");
       
    }
    else{
        echo "<h1> You Have Entered Incorrect Password or User Name</h1>";
        
    }
        
//}
?> 

































































