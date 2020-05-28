<?php
    include __DIR__ . '/partials/templates/head.php';
?>

    <header>
        <h1>Rooms</h1>
    </header>

    <main>
        <table class="table">
            <thead>
                <tr>
                    <th scope="col">#</th>
                    <th scope="col">Room number</th>
                    <th scope="col"></th>
                </tr>
            </thead>

            <tbody>
                <tr>
                    <th scope="row">1</th>
                    <td>100</td>
                    <td class=".text-info">
                        <a href="">View</a>
                    </td>
                </tr>
            </tbody>
        </table>
    </main>

<?php
    include __DIR__ . '/partials/templates/footer.php'
?>
