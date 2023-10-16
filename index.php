<?php
$servername = "karlissis22-server.mysql.database.azure.com";
$username = "efhrzwbnmh";
$password = "88WQ4MQFL7762RN6$";
$dbname = "karlissis22";

$con = mysqli_init();
mysqli_ssl_set($con,NULL,NULL, "{path to CA cert}", NULL, NULL);
mysqli_real_connect($conn, "karlissis22-server.mysql.database.azure.com", "efhrzwbnmh", "88WQ4MQFL7762RN6$", "karlissis22", 3306, MYSQLI_CLIENT_SSL);

if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}

$sql = "SELECT * FROM your_table";
$result = $conn->query($sql);

if ($result->num_rows > 0) {
    while ($row = $result->fetch_assoc()) {
        echo "ID: " . $row["id"] . " - Name: " . $row["name"] . "<br>";
    }
} else {
    echo "0 results";
}

$conn->close();
?>
