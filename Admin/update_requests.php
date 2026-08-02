<?php
include 'db.php';

$data = json_decode(file_get_contents("php://input"), true);

$id = $data['id'];
$status = $data['status'];

$sql = "UPDATE blood_requests SET status = '$status' WHERE id = $id";

if ($conn->query($sql) === TRUE) {
    echo json_encode(["message" => "Request updated successfully"]);
} else {
    echo json_encode(["error" => $conn->error]);
}

$conn->close();
?>