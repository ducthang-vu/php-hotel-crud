<?php
include __DIR__ . '/../functions/functions.php';
include_once __DIR__ . '/../data/data.php';

if (empty($_POST['id'])) {
    die('ID non corretto');
}

$id_room = $_POST['id'];
$url = "$base_path?del=room";
removeById($conn, `stanze`, $id_room, $url);
