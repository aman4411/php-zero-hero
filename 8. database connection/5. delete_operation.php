<?php include "db_connection.php";
if (isset($_POST['deleteConfirmedButton'])) {
    $id = $_POST['id'];
    deleteUser($id);
}
?>

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
        <h1>Delete User</h1>
        <br>
        <form action="5. delete_operation.php" method="post" id="delete-user-form">
            <div class="form-group">
                <label for="id">User Id</label>
                <select name="id" id="select-id" class="form-select w-50" onchange="bindUser(event.target.value)">
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
                <button type="button" name="deleteButton" id="deleteButton" class="btn btn-danger" data-toggle="modal" data-target="#confirm-delete-modal" disabled>Delete</button>
            </div>
        </form>
    </div>

    <!-- Modal -->
    <div class="modal fade" id="confirm-delete-modal" tabindex="-1" role="dialog" aria-labelledby="exampleModalCenterTitle" aria-hidden="true">
        <div class="modal-dialog modal-dialog-centered" role="document">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title" id="exampleModalLongTitle">Confirm Delete</h5>
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                        <span aria-hidden="true">&times;</span>
                    </button>
                </div>
                <div class="modal-body">
                    <h4>Are you sure you want to delete this user?</h4>
                </div>
                <div class="modal-footer">
                    <button type="button" class="btn btn-secondary" data-dismiss="modal">Cancel</button>
                    <button type="submit" class="btn btn-danger" name="deleteConfirmedButton" form="delete-user-form">Delete</button>
                </div>
            </div>
        </div>
    </div>

    <script>
        function bindUser(id) {
            document.getElementById("deleteButton").disabled = false;
            var users = <?php echo $json_result ?>;
            var user = users.find(user => user.id == id);
            var username = document.getElementsByName('username');
            var password = document.getElementsByName('password');
            username[0].value = user.username;
            password[0].value = user.password;
        }

    </script>
    <script src="https://code.jquery.com/jquery-3.4.1.slim.min.js" integrity="sha384-J6qa4849blE2+poT4WnyKhv5vZF5SrPo0iEjwBvKU7imGFAV0wwj1yYfoRSJoZ+n" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.0/dist/umd/popper.min.js" integrity="sha384-Q6E9RHvbIyZFJoft+2mJbHaEWldlvI9IOYy5n3zV9zzTtmI3UksdQRVvoxMfooAo" crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/js/bootstrap.min.js" integrity="sha384-wfSDF2E50Y2D1uUdj0O3uMBJnjuUD4Ih7YwaYd1iqfktj0Uod8GCExl3Og8ifwB6" crossorigin="anonymous"></script>
</body>

</html>