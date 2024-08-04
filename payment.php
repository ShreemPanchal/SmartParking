<!DOCTYPE html> 
<html> 
<head> 
  <title>Payment Page</title> 
  <!-- Add any necessary CSS stylesheets here --> 
  <link rel="stylesheet" href="styles.css"> 
   
    <style> 
    /* Add CSS styles to create a box layout */ 
    .container { 
      width: 400px; 
      margin: 0 auto; 
      padding: 17px; 
      border: 1px solid #ccc; 
      border-radius: 10px; 
      background-color: rgba(255,255,255,0.8);
      
      margin-top: 20px;
      opacity: 0;
            transform: translateY(20px);
            animation: slideIn 0.5s forwards ease-out;
            animation-delay: 0.4s;
           
            
        }

        @keyframes slideIn {
            to {
                opacity: 1;
                transform: translateY(0);
            }
        }
    
    .container h1 { 
      text-align: center; 
    } 
    .container label { 
      display: block; 
      margin-bottom: 10px; 
    } 
    .container input[type="text"] { 
      width: 100%; 
      padding: 5px; 
      margin-bottom: 10px; 
      border: 1px solid #ccc; 
      border-radius: 12px; 
      background-color: rgba(255,255,255,0.7);
    } 
    .container select { 
      width: 100%; 
      padding: 5px; 
      margin-bottom: 10px; 
      border: 1px solid #ccc; 
      border-radius: 3px; 
    } 
    .container button { 
      display: block; 
      width: 100%; 
      padding: 10px; 
      border: none; 
      border-radius: 12px; 
      background-color: #363636; 
      color: #fff; 
      font-size: 16px; 
      cursor: pointer; 
    } 
    body{ 
     
   background-image:  url(https://wallpaperaccess.com/full/4597125.png);
    background-image-opacity:20%;
    
       
    } 
  </style> 
</head> 
<body> 
  <h1 style="margin-left: 40%; margin-bottom: 5px; color: dark brown;">Make Your Payment </h1> 
   
  <!-- Payment Method Selection --> 
  <div class="container"> 
     
    <label for="paymentMethod">Payment Method:</label> 
    <select id="paymentMethod"> 
      <option value="card">Credit/Debit Card</option> 
      <option value="paypal">PayPal</option> 
      <!-- Add more payment method options if needed --> 
    </select> 
   
   
  <!-- Payment Details Form --> 
    <form action="end.php"  method="post">
    <label for="cardNumber">Card Number:</label> 
    <input type="text" id="cardNumber" name="cardNumber" placeholder="Enter your card number"> 
   
    <label for="expiryDate">Expiration Date:</label> 
    <input type="text" id="expiryDate" name="expiryDate" placeholder="MM/YY"> 
   
   
    <label for="cvv">CVV:</label> 
    <input type="text" id="cvv" name="cvv" placeholder="Enter CVV"> 
   
   
    <label for="billingAddress">Billing Address:</label> 
    <input type="text" id="billingAddress" name="billingAddress" placeholder="Enter your billing address"> 
  
    <h2>Payment Summary</h2> 
    <p>Amount: Rs 30.00</p> 
    <!-- Add more details if needed --> 
    <button id="payButton"
          style="background-color:  #252627;
          width: 30; 
          border-radius: 0;
          color: #ffffff;
          padding: 8px;
          border: #007bff;
          margin-left:; 
          margin-top: 10px;">Pay Now</button> 
</form>
  </div> 
  
  
   
  <script > 
     
     const redirectButton = document.getElementById('payButton');

redirectButton.addEventListener('click', () => { 
    window.location.href = 'end.php'; // Replace 'end.php' with the actual page URL 
}); 
   
  </script> 
</body> 
</html>
