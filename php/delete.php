<?php

	include 'connection.php'; 
	if(isset($_GET['deleteid'])){ 
		$id=$_GET['deleteid']; 


		$sql="DELETE FROM `contactus` WHERE id=$id"; 
		$result=mysqli_query($conn,$sql);
		if($result){
			
			echo 
			'<script>
	            alert("Deleted Successfull");
	            window.location="adminContact.php";
	        </script>';
		}
		else{
			die(mysqli_error($conn));
		}
	}

?>