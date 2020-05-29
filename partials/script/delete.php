<?php
include_once __DIR__ . '/../data/data.php';

if (empty($_POST['id'])) {
    die('ID is not correct');
}

$id_room = $_POST['id'];
$sql = "DELETE FROM `stanze`
        WHERE `id` = $id_room";
$result = $conn->query($sql);

if ($result && $conn->affected_rows > 0) {
    header("Location: $base_path?del=1");
} else if ($result) {
    echo 'No room found';
} else {
    echo 'ERROR';
}

$conn->close();