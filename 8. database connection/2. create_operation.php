<?php include "db_connection.php";
    if(isset($_POST['submitButton'])){
        $username = $_POST['username'];
        $password = $_POST['password'];

        //validating form data
        if(strlen($username)<3){
            print "<p class='alert alert-danger'>Username has to be longer than 3 characters</p>";
        }elseif(strlen($password)<3){
            print "<p class='alert alert-danger'>Password has to be longer than 3 characters</p>";
        }else{
            createUser($username,$password);
        }     
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