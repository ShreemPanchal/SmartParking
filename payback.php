<?php
   $conn = mysqli_connect("localhost","root","","smart_parking");
   if($conn===false){
     die("ERROR:could not connect".mysqli_connect_error());
   
   }
     //taking values
     $cardNumber = isset($_POST['cardNumber']) ? $_POST['cardNUmber'] : '';
     $expiryDate = isset($_POST['expiryDate']) ? $_POST['expiryDate'] : '';
     $cvv = isset($_POST['cvv']) ? $_POST['cvv'] : '';
     $billingAddress = isset($_POST['billingAddress']) ? $_POST['billingAddress'] : '';
     //insert values
    
     $sql="INSERT INTO pay_table(cardno,expirydate ,cvv , billingaddress)
                 VALUES('$cardNumber' , '$expiryDate' , '$cvv' , '$billingAddress')";
     if(mysqli_query($conn,$sql)){
       echo "<h3>data stored in the database successfully"."please browse your localhost php my admin"."to view the updated data</h3>";
       header("Location:end.php");
       
     }            
     else{
       echo "ERROR:HUSH! sorry $sql".mysqli_error($conn);
   
     }

     
     mysqli_close($conn);





?>