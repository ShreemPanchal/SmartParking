<?php
// Connect to the database
$conn = new mysqli('localhost', 'root', '', 'smart_parking');

if ($conn->connect_error) {
    die("Connection failed: ". $conn->connect_error);
}

// Check if the table is empty
$result = $conn->query("SELECT COUNT(*) as count FROM slot3");
if (!$result) {
    die("Error running query: ". $conn->error);
}

// Check if the result is not null
if ($result->num_rows > 0) {
    $row = $result->fetch_assoc();
    if ($row['count'] == 0) {
        // Insert rows into the table
        for ($i = 1; $i <= 15; $i++) {
            $query = "INSERT INTO slot3 (id, status) VALUES ('$i', 'vacant')";
            if (!$conn->query($query)) {
                die("Error inserting rows: ". $conn->error);
            }
        }
    }
}

$conn->close();

// Return a JSON response
$response = array("success" => true);
echo json_encode($response);
?>
