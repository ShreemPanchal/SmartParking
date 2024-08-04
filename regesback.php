<?php
   $conn = mysqli_connect("localhost","root","","smart_parking");
   if($conn===false){
     die("ERROR:could not connect".mysqli_connect_error());
   
   }
     //taking values
     $name = isset($_POST['name']) ? $_POST['name'] : '';
     $password = isset($_POST['password']) ? $_POST['password'] : '';
     $numberplate = isset($_POST['numberplate']) ? $_POST['numberplate'] : '';
     $email = isset($_POST['email']) ? $_POST['email'] : '';
     //insert values
    
     $sql="INSERT INTO register_table 
                 VALUES('$name' , '$password' , '$numberplate' , '$email')";
     if(mysqli_query($conn,$sql)){
       echo "<h3>data stored in the database successfully"."please browse your localhost php my admin"."to view the updated data</h3>";
       header("Location:index.php");
       
     }            
     else{
       echo "ERROR:HUSH! sorry $sql".mysqli_error($conn);
   
     }

     
     mysqli_close($conn);





?>
