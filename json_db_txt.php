<?php
include 'connection.php';

$sql = "SELECT * FROM messages";
$result = $conn->query($sql);

$data = array();
while ($row = $result->fetch_assoc()) {
    $dt['name'] = $row['name'];
    $dt['email'] = $row['email'];
    $dt['subject'] = $row['subject'];
    $dt['message'] = $row['message'];
    array_push($data, $dt);
}

echo json_encode($data);

$conn ->close();
?>