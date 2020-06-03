<?php
include __DIR__ . '/../functions/functions.php';
include dirname(__DIR__) . '/data/data.php';

$rooms = getAll($conn, 'stanze');
