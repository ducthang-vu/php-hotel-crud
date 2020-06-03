<?php
    include __DIR__ . '/partials/booking/server.php';
    include __DIR__ . '/partials/templates/head.php';
?>

<header>
    <div class="container">
        <h1 class="text-center">Hotel booking</h1>
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
            <?php foreach($bookings as $b) { ?>
                <tr>
                    <th scope="row"><?php echo $b['id'] ?></th>
                    <td><?php echo $b['stanza_id'] ?></td>
                    <td><?php echo $b['created_at'] ?></td>
                    <td>
                        <a href="">view</a>
                    </td>
                    <td>>
                        <a href="">Update</a>
                    </td>
                    <td>
                        <a href="">Delete</a>
                    </td>
                </tr>
            <?php } ?>
        </table>
    </div>
</main>


<?php
    include __DIR__ . '/partials/templates/footer.php'
?>
