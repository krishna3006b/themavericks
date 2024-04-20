<?php
		$conn = mysqli_connect("localhost", "root", "", "agriwise");
		$name = $_REQUEST['name'];
		$phone = $_REQUEST['phone'];
		$farm = $_REQUEST['farm'];
		$password = $_REQUEST['password'];	

		$sql = "INSERT INTO farm VALUES ('$name','$phone','$farm','$password')";
		$result=mysqli_query($conn, $sql);
		if($result){
			session_start();
            $_SESSION['info'] = $phone;
			echo '<script>alert("Registration Successfull")</script>';  
            echo "<script>window.location.href = 'dashboard.html';</script>";

		} else{
			echo '<script>alert("Some Error occured during Registration. Try again.")</script>';
			echo "<script>window.location.href = 'registration.html';</script>";
		}
		mysqli_close($conn);
?>
