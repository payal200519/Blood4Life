<?php
include 'db.php';

$id = $_GET['id'];

$sql = "DELETE FROM donars WHERE id = $id";

if ($conn->query($sql) === TRUE) {
    echo json_encode(["message" => "Donor deleted successfully"]);
} else {
    echo json_encode(["error" => $conn->error]);
}

$conn->close();
?>
