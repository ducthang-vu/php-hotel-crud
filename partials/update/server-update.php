<?php
include_once __DIR__ . '/../data/data.php';

if(empty($_POST['id'])) {
    die('ID not found');
}

$id_room = $_POST['id'];
$room_number = $_POST['room_number'];
$beds = $_POST['beds'];
$floor = $_POST['floor'];

$sql = "UPDATE `stanze`
        SET `room_number` = $room_number,
            `beds` = $bed,
            `floor` = $floor
        WHERE `id` = $id_room";

$result = $conn->query($sql);

if ($result && $conn->affected_rows > 0) {
    header("location: $base_path/show.php?id=$id_room");
} elseif ($result) {
    die('Nessuna room trovata');
} else {
    die('ERROR');
}

$conn->close();