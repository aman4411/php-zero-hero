<?php include "includes/db_connection.php";
    createUser();
?>

<?php include "includes/header.php" ?>
    <div class="container">
        <h1>Signup Form</h1>
        <br>
        <form action="2. create_operation.php" method="post">
            <div class="form-group">
                <label for="username">Username</label>
                <input type="text" name="username" class="form-control w-50">
            </div>
            <br>
            <div class="form-group">
                <label for="password">Password</label>
                <input type="password" name="password" class="form-control w-50">
            </div>
            <br>
            <div class="form-group">
                <input type="submit" name="submitButton" class="btn btn-primary" value="Signup">
            </div>
        </form>
    </div>
</body>
</html>