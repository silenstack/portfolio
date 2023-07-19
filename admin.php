<?php
// Connect to the database
$servername = "localhost";
$username = "admin";
$password = "admin";
$dbname = "admin";
$conn = mysqli_connect($servername, $username, $password, $dbname);

// Check connection
if (!$conn) {
    die("Connection failed: " . mysqli_connect_error());
}

// Fetch data from the table
$sql = "SELECT * FROM users";
$result = mysqli_query($conn, $sql);

// Display the data in a table
echo "<table>";
echo "<tr><th>ID</th><th>Name</th><th>Email</th><th>Role</th></tr>";
while($row = mysqli_fetch_assoc($result)) {
    echo "<tr><td>".$row["id"]."</td><td>".$row["name"]."</td><td>".$row["email"]."</td><td>".$row["role"]."</td></tr>";
}
echo "</table>";

// Close the database connection
mysqli_close($conn);
?>
