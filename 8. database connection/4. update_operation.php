<?php include "includes/db_connection.php";
   updateUser();
?>

<?php include "includes/header.php" ?>
    <div class="container">
        <h1>Update User</h1>
        <br>
        <form action="4. update_operation.php" method="post">
            <div class="form-group">
                <label for="id">User Id</label>
                <select name="id" id="" class="form-select w-50" onchange="bindUser(event.target.value)">
                    <option selected disabled>Select Id</option>
                    <?php
                        getAllUsers();
                        bindUserId();
                    ?>
                </select>
            </div>
            <br>
            <div class="form-group">
                <label for="username">Username</label>
                <input type="text" name="username" class="form-control w-50">
            </div>
            <br>
            <div class="form-group">
                <label for="password">Password</label>
                <input type="text" name="password" class="form-control w-50">
            </div>
            <br>
            <div class="form-group">
                <input type="submit" name="submitButton" class="btn btn-primary" value="Update">
            </div>
        </form>
    </div>

    <script>
        function bindUser(id) {
            var users = <?php echo $json_result ?>;
            var user = users.find(user => user.id == id);
            var username = document.getElementsByName('username');
            var password = document.getElementsByName('password');
            username[0].value = user.username;
            password[0].value = user.password;
        }
    </script>
</body>

</html>