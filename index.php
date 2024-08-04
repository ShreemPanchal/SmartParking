<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Reservation Page</title>
    <style>
        /* General styles */
        body {
            font-family: 'Arial', sans-serif;
            background-color: #f1ecec;
            margin: 0;
            padding: 20px;
            background-image: url(https://mixnews.lv/wp-content/uploads/2021/03/30/2021-03-30-mixnews-let_12036664.jpg);
            background-size: cover;
            display: flex;
            justify-content: center;
            align-items: center;
            min-height: 100vh;
        }

        #box {
            width: 400px; /* Reduced width */
            background-color: rgba(255, 255, 255, 0.6);
            padding: 30px;
            border-radius: 10px;
            box-shadow: 0 0 20px rgba(0, 0, 0, 0.1);
            text-align: center;
            animation: fadeInUp 1s ease-out forwards;
            animation-delay: 0.3s;
            
        }

        h2 {
            color: #000000; /* Header color */
            font-family: Verdana, Geneva, Tahoma, sans-serif;
            margin-top: 20px;
            margin-bottom: 20px;
            font-size: 24px; /* Adjusted font size */
            text-transform: uppercase;
            opacity: 0;
            animation: fadeIn 0.8s forwards ease-out;
            animation-delay: 0.2s;
        }

        form {
            animation: slideIn 0.8s forwards ease-out;
            animation-delay: 0.4s;
        }

        label {
            display: block;
            margin-bottom: 10px;
            font-weight: bold;
            font-size: 16px; /* Adjusted font size */
            color: #333;
            text-align: left;
        }

        input[type="text"],
        input[type="email"],
        input[type="time"],
        input[type="date"],
        textarea {
            width: calc(100% - 24px);
            padding: 12px;
            border: 1px solid #ccc;
            border-radius: 8px;
            font-size: 14px; /* Adjusted font size */
            margin-bottom: 15px;
        }

        button {
            cursor: pointer;
            padding: 15px 30px;
            border: none;
            border-radius: 8px;
            font-size: 16px; /* Adjusted font size */
            background-color: /*#4CAF50;*/ dimgrey;
            color: #fff;
            transition: background-color 0.3s ease;
        }

        button:hover {
            background-color: grey;
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

        @keyframes fadeIn {
            to {
                opacity: 1;
            }
        }

        @keyframes slideIn {
            from {
                opacity: 0;
                transform: translateY(50px);
            }
            to {
                opacity: 1;
                transform: translateY(0);
            }
        }
    </style>
</head>
<body>
    <div id="box">
        <h2>Make Your Reservation</h2>
        <form action="reservationbackend.php" method="POST" onsubmit="return validateForm()">
            <label for="date">Date:</label>
            <input type="date" id="date" name="date" required>

            <label for="time">Arrival Time:</label>
            <input type="time" id="time" name="time" required>

            <label for="parkingduration">Parking Duration:</label>
            <input type="time" id="parkingduration" name="parkingduration" required>

            <label for="message">Additional Requests:</label>
            <textarea id="message" name="message" rows="4" style="resize: vertical;"></textarea>

            <button type="submit" id="book">Make Reservation</button>
        </form>
    </div>

    <script>
        function validateForm() {
            var date = document.getElementById("date").value;
            var time = document.getElementById("time").value;
            var parkingduration = document.getElementById("parkingduration").value;

            if (date === "" || time === "" || parkingduration === "") {
                alert("Please fill in all required fields.");
                return false;
            }
            return true; // Form submission allowed
        }
        document.querySelector('form').addEventListener('submit', function(event) {
            event.preventDefault(); // Prevent actual form submission for demo purposes
            
            // Replace with actual form submission code
            window.location.href = 'parking_area.php';
        });

    </script>
</body>
</html>
