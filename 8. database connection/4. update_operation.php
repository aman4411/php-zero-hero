<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Form Handling in PHP</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.0/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-KyZXEAg3QhqLMpG8r+8fhAXLRk2vvoC2f3B09zVXn8CA5QIVfZOJ3BCsw2P0p/We" crossorigin="anonymous">
</head>

<body>
    <div class="container">
        <h1>Update User</h1>
        <br>
        <form action="1. login.php" method="post">
            <div class="form-group">
                <label for="id">User Id</label>
                <select name="id" id="" class="form-select w-50" onchange="bindUser(event.target.value)">
                    <option selected disabled>Select Id</option>
                    <?php include "getAllUsers.php";
                        $userArray = [];
                        while ($row = mysqli_fetch_assoc($result)) {
                           array_push($userArray,$row);
                           $id = $row['id'];
                           echo "<option value='$id'>$id</option>";
                        }
                        $json_result = json_encode($userArray);
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