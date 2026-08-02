<?php
include 'db.php';

$sql = "SELECT * FROM blood_requests";
$result = $conn->query($sql);

$requests = [];
if ($result->num_rows > 0) {
    while ($row = $result->fetch_assoc()) {
        $requests[] = $row;
    }
}

echo json_encode($requests);
$conn->close();
?>
