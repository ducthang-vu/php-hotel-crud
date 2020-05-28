<?php
    include __DIR__ . '/partials/script/show.php';
    include __DIR__ . '/partials/templates/head.php';
?>

<header>
    <div class="container">
        <h1 class="text-center">Room - details</h1>
    </div>
</header>

<main>
    <div class="container">
        <table class="table mb-5">
            <thead>
                <tr>
                    <th scope="col">#</th>
                    <th scope="col">Room number</th>
                    <th scope="col">floor</th>
                    <th scope="col">beeds</th>
                </tr>
            </thead>
        <tbody>
            <tr>
                <th scope="row"><?php echo $room['id'] ?></th>
                <td><?php echo $room['room_number'] ?></td>
                <td><?php echo $room['floor'] ?></td>
                <td><?php echo $room['beds'] ?></td>
            </tr>
        </table>

        <a href="index.php">Go back to Home.</a>
    </div>
</main>


<?php
    include __DIR__ . '/partials/templates/footer.php'
?>
