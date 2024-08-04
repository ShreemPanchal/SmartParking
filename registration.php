<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Registration Form</title>
    <style>
        /* General styles */
        body {
            font-family: Arial, sans-serif;
            background-color: #f1ebebfa;
            margin: 0;
            padding: 20px;
            background-image: url(https://nitethrive.com/wp-content/uploads/2021/11/how-much-does-it-cost-to-rent-a-car-in-las-vegas-large-768x384.jpg);
            background-size: cover;
            display: flex;
            justify-content: center;
            align-items: center;
            min-height: 100vh;
        }

        .box {
            width: 400px;
            background-color: rgba(255, 255, 255, 0.9);
            padding: 30px;
            border-radius: 10px;
            box-shadow: 0 0 20px rgba(0, 0, 0, 0.1);
            text-align: center;
            animation: fadeInUp 1s ease-out forwards;
            animation-delay: 0.2s;
        }

        h2 {
            color: #353333;
            font-family: Arial, Helvetica, sans-serif;
            margin-bottom: 10px;
            font-size: 24px;
            text-transform: uppercase;
            letter-spacing: 1px;
        }

        form {
            opacity: 0;
            animation: fadeInForm 0.8s forwards ease-out;
            animation-delay: 0.4s;
            text-align: left; /* Align form content to the left */
        }

        label {
            display: block;
            margin-bottom: 8px;
            font-weight: bold;
            font-size: 16px;
            color: #333;
            text-align: left; /* Align labels to the left */
        }

        input[type="text"],
        input[type="password"],
        input[type="email"],
        input[type="time"],
        select,
        textarea {
            width: calc(100% - 24px); /* Adjusted width to accommodate padding */
            padding: 10px;
            border: 1px solid #ccc;
            border-radius: 10px;
            margin-bottom: 15px;
            font-size: 14px;
            box-sizing: border-box; /* Ensure padding does not affect width */
            transition: border-color 0.3s ease;
        }

        input[type="submit"] {
            background-color: #4CAF50;
            color: #ffffff;
            padding: 12px 20px;
            border: none;
            border-radius: 10px;
            cursor: pointer;
            transition: background-color 0.3s ease;
            width: 100%; /* Make the submit button full-width */
            font-size: 16px;
            font-weight: bold;
            letter-spacing: 1px;
            text-transform: uppercase;
        }

        input[type="submit"]:hover {
            background-color: #45a049;
        }

        /* Animations */
        @keyframes fadeInUp {
            from {
                opacity: 0;
                transform: translateY(50px);
            }
            to {
                opacity: 1;
                transform: translateY(0);
            }
        }

        @keyframes fadeInForm {
            from {
                opacity: 0;
                transform: translateY(20px);
            }
            to {
                opacity: 1;
                transform: translateY(0);
            }
        }
    </style>
</head>
<body>
<div class="box">
    <h2>Registration Form</h2>
    <form action="regesback.php" method="post">
        <label for="name">Full Name:</label>
        <input type="text" id="name" name="name" value="name" placeholder="Full Name" required>

        <label for="pass">Password:</label>
        <input type="password" id="pass"  name="password" placeholder="Password" required>

        <label for="vname">Number Plate:</label>
        <input type="text" id="vname" name="numberplate" placeholder="Number Plate" required>

        <label for="email">Your Email:</label>
        <input type="email" id="email" name="email" placeholder="Email" required>

        <label for="message">Vehicle Description:</label>
        <textarea id="message" name="message" placeholder="Vehicle Description" rows="3" required></textarea>

        <input type="submit" value="Submit">
    </form>
</div>


</body>
</html>