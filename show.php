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
    <div class="container text-center">
        <table class="table mb-5 col-md-8 offset-md-2">
            <thead>
                <tr>
                    <th scope="col">#</th>
                    <th scope="col">Room number</th>
                    <th scope="col">floor</th>
                    <th scope="col">beeds</th>
                    <th scope="col">updated</th>
                    <th scope="col">created</th>
                </tr>
            </thead>
        <tbody>
            <tr>
                <th scope="row"><?php echo $room['id'] ?></th>
                <td><?php echo $room['room_number'] ?></td>
                <td><?php echo $room['floor'] ?></td>
                <td><?php echo $room['beds'] ?></td>
                <td><?php echo $room['created_at'] ?></td>
                <td><?php echo $room['updated_at'] ?></td>
            </tr>
        </table>

        <!--<a class="text-primary" href="index.php">Go back to Home.</a>-->
        
        <a class="btn btn-warning" href="<?php echo $base_path ?>/edit.php?id=<?php echo $room['id']; ?>">Update</a>
    </div>
</main>


<?php
    include __DIR__ . '/partials/templates/footer.php'
?>
