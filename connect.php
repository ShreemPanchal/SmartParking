<?php
   $conn = mysqli_connect("localhost","root","","smart_parking");
   if($conn===false){
     die("ERROR:could not connect".mysqli_connect_error());
   
   }
     //taking values
     $name = isset($_POST['name']) ? $_POST['name'] : '';
     $email = isset($_POST['email']) ? $_POST['email'] : '';
     $password = isset($_POST['password']) ? $_POST['password'] : '';
     //insert values
    
     $sql="INSERT INTO logintable(Name2,Email2,Password2)
                 VALUES('$name','$email', '$password')";
     if(mysqli_query($conn,$sql)){
       echo "<h3>data stored in the database successfully"."please browse your localhost php my admin"."to view the updated data</h3>";
       echo("\n$name \n$email \n$password");
       header("Location:index.php");
     }            
     else{
       echo "ERROR:HUSH! sorry $sql".mysqli_error($conn);
   
     }

     
     mysqli_close($conn);
?>