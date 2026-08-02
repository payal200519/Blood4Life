<?php
include 'db.php';

$data = json_decode(file_get_contents("php://input"), true);

$name = $data['name'];
$blood_group = $data['blood_group'];
$contact = $data['contact'];
$last_donation_date = $data['last_donation_date'];

$sql = "INSERT INTO donars (name, blood_group, contact, last_donation_date) VALUES ('$name', '$blood_group', '$contact', '$last_donation_date')";

if ($conn->query($sql) === TRUE) {
    echo json_encode(["message" => "Donor added successfully"]);
} else {
    echo json_encode(["error" => $conn->error]);
}

$conn->close();
?>
