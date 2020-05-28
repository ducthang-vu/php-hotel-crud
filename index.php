<?php
    include __DIR__ . '/partials/script/home.php';
    include __DIR__ . '/partials/templates/head.php';
?>

<header>
    <div class="container">
        <h1 class="text-center">Rooms - Home</h1>
    </div>
</header>

<main>
    <div class="container">
        <table class="table">
            <thead>
                <tr>
                    <th scope="col">#</th>
                    <th scope="col">Room number</th>
                    <th scope="col"></th>
                </tr>
            </thead>

            <tbody>
                <?php foreach($rooms as $room) { ?>
                    <tr>
                        <th scope="row">
                            <?php echo $room['id']; ?>
                        </th>
                        <td>
                            <?php echo $room['room_number']; ?>
                        </td>
                        <td class=".text-info">
                            <a href="show.php?id=<?php echo $room['id'];?>">View</a>
                        </td>
                    </tr>
                <?php } ?>
            </tbody>
        </table>
    </div>
</main>

<?php
    include __DIR__ . '/partials/templates/footer.php'
?>
