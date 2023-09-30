<?php
// Connect to the database (replace with your actual database credentials)
$servername = "localhost";
$username = "your_username";
$password = "your_password";
$dbname = "bookstore";

$conn = new mysqli($servername, $username, $password, $dbname);

// Check connection
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}

// Assuming you have user authentication, get the user's ID (replace with your authentication logic)
$userID = 1; // Replace with your user ID retrieval logic

// Query to retrieve booking history for the user
$sql = "SELECT * FROM orders WHERE user_id = $userID ORDER BY order_date DESC";

$result = $conn->query($sql);

if ($result->num_rows > 0) {
    echo "<h2>Booking History</h2>";
    echo "<table>";
    echo "<tr><th>Order ID</th><th>Order Date</th><th>Total Price</th></tr>";

    while ($row = $result->fetch_assoc()) {
        echo "<tr>";
        echo "<td>" . $row["order_id"] . "</td>";
        echo "<td>" . $row["order_date"] . "</td>";
        echo "<td>" . $row["total_price"] . "</td>";
        echo "</tr>";
    }

    echo "</table>";
} else {
    echo "No booking history found.";
}

// Close the database connection
$conn->close();
?>
