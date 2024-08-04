

<!DOCTYPE html>
<html>
  <title>Login Page</title> 
  <style> 
   body {
            font-family: 'Arial', sans-serif;
            margin: 0;
            padding: 0;
            background-color: #f1ecec;
            display: flex;
            justify-content: center;
            align-items: center;
            min-height: 100vh;
            background-image: url(https://carsoid.com/wp-content/uploads/2021/01/Is-It-Possible-to-Check-a-Cars-History-for-Free-scaled.jpg);
    background-size: cover;
        }

        .container {
            max-width: 400px;
            width: 100%;
            padding: 20px;
        }

        .login-box {
            background-color: rgba(255, 255, 255, 0.8);
            padding: 30px;
            border-radius: 8px;
            box-shadow: 0 0 20px rgba(0, 0, 0, 0.1);
            text-align: center;
        }

        h2 {
            color: #333;
            font-size: 24px;
            margin-bottom: 20px;
            text-transform: uppercase;
            letter-spacing: 1px;
        }

        .input-container {
            margin-bottom: 20px;
            text-align: left;
        }

        label {
            display: block;
            margin-bottom: 8px;
            font-weight: bold;
            color: #666;
        }

        input[type="text"],
        input[type="email"],
        input[type="password"] {
            width: calc(100% - 24px);
            padding: 10px;
            border: 1px solid #ccc;
            border-radius: 4px;
            font-size: 16px;
        }

        button {
            cursor: pointer;
            padding: 12px 20px;
            border: none;
            border-radius: 4px;
            font-size: 16px;
            transition: background-color 0.3s ease;
        }

        .login-button {
            background-color: #4CAF50;
            color: #fff;
        }

        .signup-button {
            background-color: #3498db;
            color: #fff;
            margin-left: 10px;
        }

        button:hover {
            background-color: #555;
        }

        /* Additional animations */
        .input-container {
            opacity: 0;
            transform: translateY(-20px);
            animation: slideIn 0.5s forwards ease-out;
            animation-delay: 0.2s;
        }

        .button-container {
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
    
     </style>
</head> 
 <body>
 <div class="container">
        <div class="login-box">
            <h2>Login</h2>
            <form action="connect.php" method="post" onsubmit="return validateForm()">
                <div class="input-container">
                    <label for="name">Name:</label>
                    <input type="text" id="name" name="name" placeholder="Enter your name" required>
                </div>
                <div class="input-container">
                    <label for="email">Email:</label>
                    <input type="email" id="email" name="email" placeholder="Enter your email" required pattern="[a-zA-Z0-9._%+-]+@[a-zA-Z0-9.-]+\.[a-zA-Z]{2,}.com">
                </div>
                <div class="input-container">
                    <label for="password">Password:</label>
                    <input type="password" id="password" name="password" placeholder="Enter your password" required minlength="6">
                </div>
                <div class="button-container">
                    <button type="submit" class="login-button">Login</button>
                    <button type="button" class="signup-button" id="sign">Sign Up</button>
                </div>
            </form>
        </div>
    </div>

<script> 
function validateForm() {
            var name = document.getElementById("name").value;
            var email = document.getElementById("email").value;
            var password = document.getElementById("password").value;

            if (name === "" || email === "" || password.length<6) {
                alert("Please fill in all required fields properly.");
                return false;
            }
            return true; // Form submission allowed
        }

        // Simulated form submission (replace with actual form handling)
        document.querySelector('form').addEventListener('submit', function(event) {
            event.preventDefault(); // Prevent actual form submission for demo purposes
            alert('Form submitted successfully!');
            // Replace with actual form submission code
            window.location.href = 'index.php';
        });

        // Redirect to signup page
        document.querySelector('.signup-button').addEventListener('click', function() {
            window.location.href = 'registration.php'; // Replace with actual signup page URL
        });
    </script>
</body>
</html>
</script> 
</body>
</html>
