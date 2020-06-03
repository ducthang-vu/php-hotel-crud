<?php
include __DIR__ . '/../functions/functions.php';
include dirname(__DIR__) . '/data/data.php';

$id_room = $_GET['id'];

$room = getById($conn, 'stanze', $id_room);
