<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Parking Slot Reservation</title>
    <style>
        body {
            font-family: Arial, sans-serif;
            background-image: url('https://delconcreteinc.com/wp-content/uploads/2018/04/concrete-driveway-lombard.jpg');
            background-size: cover;
            display: flex;
            justify-content: center;
            align-items: center;
            height: 100vh;
            margin: 0;
            padding: 20px;
            color: #333;
        }

        .container {
            background-color: rgba(255, 255, 255, 0.8);
            padding: 20px;
            border-radius: 10px;
            box-shadow: 0 4px 8px rgba(0, 0, 0, 0.1);
            text-align: center;
            max-width: 600px;
            width: 100%;
            margin: auto;
            animation: fadeIn 1s ease-in-out;
        }

        header {
            margin-bottom: 20px;
        }

        header h1 {
            color: #444;
            font-size: 24px;
            font-weight: bold;
        }

        .parking-area {
            display: grid;
            grid-template-columns: repeat(5, 1fr);
            grid-gap: 20px;
            margin-top: 20px;
        }

        .parking-slot {
            background-color: #fff;
            padding: 20px;
            border: 1px solid #ddd;
            border-radius: 8px;
            cursor: pointer;
            transition: background-color 0.3s ease, transform 0.3s ease, box-shadow 0.3s ease;
            text-align: center;
            box-shadow: 0 2px 4px rgba(0, 0, 0, 0.1);
        }

        .parking-slot:hover {
            background-color: #f0f0f0;
            transform: scale(1.05);
            box-shadow: 0 4px 8px rgba(0, 0, 0, 0.2);
        }

        .parking-slot.occupied {
            background-color: #ff6666;
            cursor: not-allowed;
        }

        .parking-slot.selected {
            background-color: #ffff00;
            transform: scale(1.05);
            box-shadow: 0 0 20px rgba(255, 255, 0, 0.7);
        }

        .row {
            display: flex;
            justify-content: center;
            margin-top: 20px;
        }

        .row input[type="submit"] {
            background-color: #4caf50;
            color: white;
            padding: 12px 24px;
            border: none;
            border-radius: 5px;
            cursor: pointer;
            transition: background-color 0.3s ease;
            box-shadow: 0 2px 4px rgba(0, 0, 0, 0.2);
            font-size: 16px;
            text-transform: uppercase;
        }

        .row input[type="submit"]:hover {
            background-color: #45a049;
        }

        @keyframes fadeIn {
            from {
                opacity: 0;
            }
            to {
                opacity: 1;
            }
        }

        @keyframes slotSelect {
            0% {
                transform: scale(1);
            }
            50% {
                transform: scale(1.1);
            }
            100% {
                transform: scale(1);
            }
        }

        @keyframes pulse {
            0% {
                box-shadow: 0 0 0 rgba(255, 255, 0, 0.5);
            }
            50% {
                box-shadow: 0 0 20px rgba(255, 255, 0, 0.8);
            }
            100% {
                box-shadow: 0 0 0 rgba(255, 255, 0, 0.5);
            }
        }
    </style>
</head>
<body>
    <div class="container">
        <header>
            <h1>Parking Slot Reservation</h1>
        </header>
        <div class="parking-area">
            <?php
            // Simulated database connection and slot statuses
            $host = 'localhost'; // or your database host
            $dbname = 'smart_parking';
            $username = 'root';
            $password = '';

try {
                $pdo = new PDO("mysql:host=$host;dbname=$dbname","root","");
                $pdo->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);


$stmt = $pdo->prepare("SELECT id, status FROM slot3");
                $stmt->execute();
                $slots = $stmt->fetchAll(PDO::FETCH_ASSOC);

                foreach ($slots as $slot) {
                    $className = 'parking-slot';
                    if ($slot['status'] === 'occupied') {
                        $className .= ' occupied';
                    }
                    echo '<div id="slot-' . $slot['id'] . '" class="' . $className . '" onclick="selectSlot(' . $slot['id'] . ')">';
                    echo '<h2>Slot ' . $slot['id'] . '</h2>';
                    echo '<p>' . ucfirst($slot['status']) . '</p>';
                    echo '</div>';
                }
                }
            catch (PDOException $e) {
                die("Error: " . $e->getMessage());
            }
            ?>
        </div>
        <form id="bookingForm" >
            <input type="hidden" id="slotId" name="slotId">
            <div class="row">
                <input type="submit" value="Confirm Reservation" onclick="submitForm()">
            </div>
        </form>
    </div>
    <script>
         function selectSlot(slotId) {
        var slotElement = document.getElementById('slot-' + slotId);
        if (slotElement.classList.contains('occupied')) {
            alert('This slot is already occupied.');
            return;
        }
        document.getElementById('slotId').value = slotId;
        var slots = document.querySelectorAll('.parking-slot');
        slots.forEach(function(slot) {
            slot.classList.remove('selected');
        });
        slotElement.classList.add('selected');

        // Animation for slot selection feedback
        slotElement.style.animation = 'slotSelect 0.5s ease-in-out';
        setTimeout(function() {
            slotElement.style.animation = '';
        }, 500);
    }


    function submitForm() {
    var selectedSlot = document.querySelector('.parking-slot.selected');
    if (!selectedSlot) {
        alert('Please select a slot before confirming.');
        return;
    }

    var submitButton = document.querySelector('input[type="submit"]');
    submitButton.disabled = true; // Disable the submit button

    // AJAX call to submit form data
    var slotId = document.getElementById('slotId').value;
    var xhr = new XMLHttpRequest();
    xhr.open('POST', '<?php echo $_SERVER['PHP_SELF']; ?>', true);
    xhr.setRequestHeader('Content-Type', 'application/x-www-form-urlencoded');
    xhr.onreadystatechange = function() {
        if (xhr.readyState == 4 && xhr.status == 200) {
            alert("Reservation confirmed"); // Display response from server
            window.location.href = 'payment.php?slotId=' + slotId;
            submitButton.disabled = false; // Enable the submit button again
            // Optionally, update UI or perform additional actions
            
        }
    };
    xhr.send('slotId=' + encodeURIComponent(slotId));
}

    </script>
    <?php
    if ($_SERVER['REQUEST_METHOD'] === 'POST') {
        try {
             
            // Handle form submission and database update
            $slotId = $_POST['slotId'];

            $stmt = $pdo->prepare("SELECT status FROM slot3 WHERE id = :id");
            $stmt->bindParam(':id', $slotId, PDO::PARAM_INT);
            $stmt->execute();
            $slot = $stmt->fetch(PDO::FETCH_ASSOC);

            if (!$slot) {
                echo "Slot not found.";
                exit;
            }

            if ($slot['status'] === 'occupied') {
                echo "This slot is already occupied.";
                exit;
            }

            $stmt = $pdo->prepare("UPDATE slot3 SET status = 'occupied' WHERE id = :id");
            $stmt->bindParam(':id', $slotId, PDO::PARAM_INT);
            $stmt->execute();


    echo"Reservation confirmed successfully!";
        } catch (PDOException $e) {
            echo "Error: " . $e->getMessage();
        }

    }
    session_start();
$slotId = $i; // assuming $i is the value you want to pass
$_SESSION['slotId'] = $slotId;
    ?>
</body>
</html>