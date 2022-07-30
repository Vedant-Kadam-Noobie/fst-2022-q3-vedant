<?php
$servername ="localhost";
$username ="root";
$password ="123456";
$dbName ="practise";

$conn = new mysqli($servername, $username, $password, $dbName);

if ($conn->connect_error) {
  die("Connection failed: " . $conn->connect_error);
}
echo "Connected successfully";

$sql = "use practise";
$result = $conn->query($sql);

$sql1 = "SELECT * FROM data";
$result = $conn->query($sql1);

if ($result->num_rows > 0) {
    while($row = $result->fetch_assoc()) {
        echo "\n" . $row["Key1"]. "\t" . $row["Name"]. "\t" . $row["Hash"]. "";
    }
} else {
    echo "0 results";
}
$conn->close();
?>