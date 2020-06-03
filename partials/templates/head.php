<?php
    include_once __DIR__ . '/../../env.php';
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link href="https://fonts.googleapis.com/css2?family=Roboto+Mono:wght@400;700&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="<?php echo $base_path; ?>dist/css/main.css">
</head>
<body>
    <header class="main-header">
        <nav class="navbar navbar-expand-lg navbar-dark bg-dark">
            <a class="navbar-brand ml-5" href="#">Boolean Hotel</a>

            <ul class="navbar-nav mr-5  ml-5">
                <li class="nav-item active">
                    <a class="nav-link" href="<?php echo $base_path ?>">Archive</a>
                </li>
                <li class="nav-item active">
                    <a class="nav-link" href="<?php echo $base_path . "create.php" ?>">New room</a>
                </li>
                <li class="nav-item active">
                    <a class="nav-link" href="<?php echo $base_path . "booking.php" ?>">Bookings</a>
                </li>
            </ul>
        </nav>
    </header>

    <div id="app" class="pb-2">