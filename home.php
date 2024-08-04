<!DOCTYPE html>
<html>
<head>
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.3/css/all.min.css" />
  <title>My Website</title>
  <style>
    /* CSS for the navigation portion */
    .navigation {
      background-color: #515355; /* Replace with your desired color */
      color: #6b6868; /* Replace with the text color you prefer */
      padding: 10px; /* Adjust the padding as needed */
      display: flex;
      justify-content: center;
      align-items: center;
      margin-top: 0%;
      transition: background-color 0.5s ease; /* Add transition effect */
      animation: bounceIn 2s ease;
      animation: slideIn 2s ease;
    }

  .navigation:hover {
      background-color: #666; /* Change background color on hover */
    }

    /* CSS for the navigation links */
  .navigation a {
      margin: 0 10px;
      margin-top: 0%;
      color: #fffafa; /* Adjust the margin as needed */
      font-family: Cambria, Cochin, Georgia, Times, 'Times New Roman', serif;
      text-decoration: none;
      transition: color 0.5s ease; /* Add transition effect */
    }

  .navigation a:hover {
      color: #ccc; /* Change text color on hover */
      transform: scale(1.1); /* Add scale animation on hover */
    }

    /* CSS for the footer */
    footer {
      background-color: #515355; /* Replace with your desired color */
      color: white; /* Replace with the text color you prefer */
      padding: 10px; /* Adjust the padding as needed */
      text-align: center;
      transition: background-color 0.5s ease; /* Add transition effect */
      /*animation: bounceIn 5s ease;*/
      animation: fadeIn 2s ease;
    }

    footer:hover {
      background-color: #666; /* Change background color on hover */
    }

    body {
      /* Add a fade-in animation on page load */
      animation: fadeIn 2s ease;
     /* animation: bounceIn 5s ease;*/
    }

    @keyframes fadeIn {
      0% {
        opacity: 0;
      }
      100% {
        opacity: 1;
      }
    }

  .image {
      display: flex;
    }

  .image img {
      width: 50%;
      margin-right: 40px;
      transition: transform 0.5s ease; /* Add transition effect */
    }

  .image img:hover {
      transform: scale(1.1); /* Add scale animation on hover */
    }

  .image img:last-child {
      margin-right: 0;
    }

    /* Add animation to the heading */
    h1 {
      /*animation: bounceIn 5s ease;*/
    }

    @keyframes bounceIn {
      0% {
        transform: translateX(-100%);
        opacity: 0;
      }
      60% {
        transform: translateX(20px);
        opacity: 1;
      }
      100% {
        transform: translateX(0);
      }
    }
  </style>
</head>
<body>
  <h1 style="padding:20px; font-size: 40px; text-align: center; background-color: rgb(155, 10, 10); margin-bottom: 0%; color: #FFFFFF;">
     Smart Parking <i class='fas fa-car-side'style="color:white; margin-right: 10px; size:20px;"></i>
  </h1>
  <div class="navigation">
    <!-- Your navigation elements go here -->
    <a href="home.php"> Home</a>
    <a href="login.php">Log in</a>
    <a href="index.php">Find Slot</a>
  </div>
  <div>
    <p style="font-family:playfair; font-size: 30px;"><b>Home <i class="fas fa-home" style="color:black;" ></i></b> <p><br>
    <p style="font-size: 19px;">
      Welcome to our website Smart Parking System! Say goodbye to the hassle of searching for parking spots.
      Our innovative technology uses real-time data and sensors to guide you to available parking spaces, saving you time and reducing frustration.
      With our user-friendly app, you can easily find parking, make reservations, and even pay seamlessly.
      Experience the convenience and efficiency of our smart parking system today!
    </p>

    <div class="image">
      <img src="http://smartparking.co.in/wp-content/uploads/2019/05/smart-parking-1-768x383.png" width="150px" height="200px">
      <img src="https://repository-images.githubusercontent.com/261507492/2b94c000-8fdb-11ea-8d2d-c2ee7f12281a" width="150px" height="200px">
  </div>
    <p style="font-size: 19px;">
      Our advanced sensors detect available parking spots in real-time, and our app guides you directly to them.
      No more wasting time circling.

      Also no more worrying about arriving and finding all the spots taken. Just reserve your spot through the app, and it'll be waiting for you when you arrive.
      our user-friendly app allows you to seamlessly pay for your parking without fumbling for change or dealing with parking meters.
    </p>
  </div>
  <footer>
    <i class="fas fa-phone" style="color:white;"></i> Contact us: + 123 234 4532
  </footer>

<!-- Rest of your website content -->
</body>
</html>