<?php      
    $host = "localhost";
    $user = "root";
    $pwd = "";
    $db = "project";
      
     $con=mysqli_connect("localhost", "root","","project");
    if(mysqli_connect_errno()) {  
        die("Failed to connect with MySQL: ". mysqli_connect_error());  
    }    
      
 
    $uname1 = $_POST['uname1'] ?? "";  
    $upswd1 = $_POST['upswd1'] ?? "";


    $uname1 = stripcslashes($uname1);  
    $upswd1= stripcslashes($upswd1);  
    $uname1 = mysqli_real_escape_string($con, $uname1);  
    $upswd1 = mysqli_real_escape_string($con, $upswd1);  


     $sql = "select * from register where uname1 = '$uname1' and upswd1 = '$upswd1'";  
     $result = mysqli_query($con, $sql);  
    // $row = mysqli_fetch_array($result, MYSQLI_ASSOC);  
     $count = mysqli_num_rows($result);  


  
if($count == 1){  
         echo "<h1><center> Password is incorrect	 </center></h1>"; 
        }  
        else{       
       header("Location: home.html");
        }     

?>


