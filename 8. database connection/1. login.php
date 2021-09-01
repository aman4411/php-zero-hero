<?php
    if(isset($_POST['submitButton'])){
        $username = $_POST['username'];
        $password = $_POST['password'];

        //validating form data
        if(strlen($username)<3){
            print "<p class='alert alert-danger'>Username has to be longer than 6 characters</p>";
        }elseif(strlen($password)<3){
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

<?php include "includes/header.php" ?>
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