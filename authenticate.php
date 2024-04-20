<?php        
        $conn = mysqli_connect("localhost", "root", "", "agriwise");
        $phone = $_REQUEST['phone']; 
        $password = $_REQUEST['password'];   
        $sql = "SELECT * FROM farm WHERE phone = '$phone' and password = '$password'";  
        $result = mysqli_query($conn, $sql);  
        $row = mysqli_fetch_array($result, MYSQLI_ASSOC);  
        $count = mysqli_num_rows($result);  
          
        if($count == 1){
            session_start();
            $_SESSION['info'] = $phone;
            echo '<script>alert("Login Successfull")</script>';  
            echo "<script>window.location.href = 'dashboard.html';</script>";
        }  
        else{  
            echo '<script>alert("Invalid details Entered")</script>';
            echo "<script>window.location.href = 'relogin.html';</script>";

        }     
?>  
