<?php
    include __DIR__ . '/partials/templates/head.php';
?>

<main>
    <div class="col-md-4 offset-md-4">
        <header class="my-4">
            <h1 class="text-center text-primary">
                Create room <?php echo $room['id']?>
            </h1>
        </header>

        <form action="./partials/create/create.php" method="POST">
            <div class="form-group">
                <label for="room_number">Room number</label>
                <input type="number" class="form-control" name="room_number" id="room_number" placeholder="Insert room number">
            </div>
            <div class="form-group">
                <label for="beds">Beds number</label>
                <input type="number" class="form-control" name="beds" id="beds" placeholder="Insert beds">
            </div>
            <div class="form-group">
                <label for="">Floor</label>
                <input type="number" class="form-control" name="floor" id="floor" placeholder="Insert floor number">
            </div>
            <div class="form-group text-right">
                <input type="hidden" name="id">
                <input class="btn btn-primary" type="submit" value="Create">
            </div>
        </form> 
    </div> 
</main>

<?php
    include __DIR__ . '/partials/templates/footer.php'
?>
