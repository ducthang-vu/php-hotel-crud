<?php
include_once __DIR__ . '/../data/data.php';

if (!empty($_GET['id'])) {
    $id_room = $GET['id'];
    $sql = "SELECT * 
            FROM `stanze`
            WHERE `id` = $id_room";
    $result = $conn->query($sql);

    if ($result && $result->num_rows > 0) {
        $room = $result->fetch_assoc();
    } else {
        die('id not found');
    }
} else {
    die('impossibile ottenere la stanza da editare');
}

$conn->close();
