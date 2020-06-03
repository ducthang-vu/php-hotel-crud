<?php
include_once __DIR__ . '/../data/data.php';

if(empty($_POST['id'])) {
    die('Error: no id was passed');
}

$id_room = $_POST['id'];
$room_number = $_POST['room_number'];
$beds = $_POST['beds'];
$floor = $_POST['floor'];

/*
$sql = "UPDATE `stanze`
        SET `room_number` = $room_number,
            `beds` = $beds,
            `floor` = $floor
        WHERE `id` = $id_room";
*/

$sql = "UPDATE `stanze`
        SET `room_number` = ?,
            `beds` = ?,
            `floor` = ?.
        WHERE `id` = ?";

$stmt = $conn-> prepare($sql);
$stmt->bind_param('iiii', $room_number, $beds, $floor, $id_room);
$stmt->execute();

$result = $conn->query($sql);

if ($stmt && $stmt->affected_rows > 0) {
    header("location: $base_pathshow" . "php?id=$id_room");
} elseif ($stmt) {
    die('Nessuna room trovata');
} else {
    die('ERROR');
}

$conn->close();