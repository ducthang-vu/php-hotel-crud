<?php
    include_once __DIR__ . '/env.php';
    include __DIR__ . '/partials/script/home.php';
    include __DIR__ . '/partials/templates/head.php';
?>

<?php if (!empty($_GET['del'])) { ?>
    <div class="alert alert-success pl-5">Room deleted</div>
<?php } ?>

<header>
    <div class="container">
        <h1 class="text-center">Rooms - Home</h1>
    </div>
</header>

<main>
    <div class="container">
        <table class="table table-hover col-md-6 offset-md-3">
            <thead>
                <tr>
                    <th scope="col">#</th>
                    <th scope="col" class="text-center">Room number</th>
                    <th scope="col"></th>
                    <th scope="col">Options</th>
                    <th scope="col"></th>
                </tr>
            </thead>

            <tbody>
                <?php foreach($rooms as $room) { ?>
                    <tr>
                        <th scope="row">
                            <?php echo $room['id'] ?>
                        </th>
                        <td class="text-center">
                            <?php echo $room['room_number'] ?>
                        </td>
                        <td class="text-info">
                            <a href="show.php?id=<?php echo $room['id']?>">View</a>
                        </td>
                        <td class="text-warning">
                            <a href="<?php echo $base_path; ?>edit.php?id=<?php echo $room['id'] ?>">Update</a>
                        </td>
                        <td class="text-danger">
                            <form action="<?php echo $base_path; ?>partials/script/delete.php" method="POST">
                                <input type="hidden" name="id" value="<?php echo $room['id']?>">
                                <input class="btn btn-danger" type="submit" value="Delete">
                            </form>
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
