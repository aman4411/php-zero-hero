<?php
    if(isset($_POST['submitButton'])){
        $username = $_POST['username'];
        $password = $_POST['password'];

        //validating form data
        if(strlen($username)<6){
            print "<p class='alert alert-danger'>Username has to be longer than 6 characters</p>";
        }elseif(strlen($password)<6){
            print "<p class='alert alert-danger'>Password has to be longer than 6 characters</p>";
        }else{

            //make connection to sql database
            $connection = mysqli_connect('localhost','root','','loginapp');

            if($connection){
                print "<p class='alert alert-success'>connected to database</p>";
            }else{
                print "<p class='alert alert-danger'>error connecting to database</p>";
            }
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
        <h1>Login Form</h1>
        <br>
        <form action="1. login.php" method="post">
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
                <input type="submit" name="submitButton" class="btn btn-primary">
            </div>
        </form>
    </div>
</body>
</html>