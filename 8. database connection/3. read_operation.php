<?php include "includes/header.php" ?>
    <div class="container">
        <h2>Users Table</h2>
        <br>

        <div class="col-sm-6">
            <?php include "includes/db_connection.php";
                getAllUsers();
                while ($row = mysqli_fetch_assoc($result)) {
            ?>
                <pre class="alert alert-success">
            <?php
                print_r($row)
            ?>
                </pre>
            <?php
            }
            ?>
        </div>

    </div>
</body>

</html>