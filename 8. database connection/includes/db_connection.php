<?php

//make connection to sql database
$connection = mysqli_connect('localhost', 'root', '', 'loginapp');

function createUser(){
    global $connection;

    if(isset($_POST['submitButton'])){
        $username = $_POST['username'];
        $password = $_POST['password'];

        //validating form data
        if(strlen($username)<3){
            print "<p class='alert alert-danger'>Username has to be longer than 3 characters</p>";
        }elseif(strlen($password)<3){
            print "<p class='alert alert-danger'>Password has to be longer than 3 characters</p>";
        }else{

            //prevent sql injection
            $username = mysqli_real_escape_string($connection,$username);
            $password = mysqli_real_escape_string($connection,$password);

            //encrypting password
            $hashFormat = '$5$rounds=5000$';    //used for SHA-256 hashing
            $salt = 'iloveharrypotter$';
            $passCopy = $password;
            $password = crypt($password, $hashFormat . $salt);

            //check generated hashed password
            if(!hash_equals($password,crypt($passCopy,$hashFormat . $salt))){
                die('Password Hash did not match');
            }

            if ($connection) {
                $query = "INSERT INTO users(username,password) ";
                $query .= "VALUES('$username','$password')";
        
                $result = mysqli_query($connection, $query) or die(mysqli_error($connection));
                print "<p class='alert alert-success'>User Created...</p>";
            } else {
                print "<p class='alert alert-danger'>error connecting to database</p>";
            }
        }     
    }    
}

function getAllUsers(){
    global $connection;
    global $result;
    if ($connection) {
        $query = "SELECT * FROM users ";
        $result = mysqli_query($connection, $query) or die('Query Failed' . mysqli_error($connection));
    } else {
        print "<p class='alert alert-danger'>error connecting to database</p>";
    }
}

function bindUserId()
{   
    global $json_result;
    global $result;
    $userArray = [];
    while ($row = mysqli_fetch_assoc($result)) {
        array_push($userArray, $row);
        $id = $row['id'];
        echo "<option value='$id'>$id</option>";
    }
    $json_result = json_encode($userArray);
}

function updateUser(){
    global $connection;

    if(isset($_POST['submitButton'])){
        $id = $_POST['id'];
        $username = $_POST['username'];
        $password = $_POST['password'];
 
        //validating form data
        if(strlen($username)<3){
            print "<p class='alert alert-danger'>Username has to be longer than 3 characters</p>";
        }elseif(strlen($password)<3){
            print "<p class='alert alert-danger'>Password has to be longer than 3 characters</p>";
        }else{

            //prevent sql injection
            $username = mysqli_real_escape_string($connection,$username);
            $password = mysqli_real_escape_string($connection,$password);

            //encrypting password
            $hashFormat = '$5$rounds=5000$';
            $salt = 'iloveharrypotter$';
            $passCopy = $password;
            $password = crypt($password, $hashFormat . $salt);

            //check generated hashed password
            if(!hash_equals($password,crypt($passCopy,$hashFormat . $salt))){
                die('Password Hash did not match');
            }

            if($connection){
                $updateQuery = "UPDATE users SET username='$username', password='$password' ";
                $updateQuery .= "where id= $id";
        
                $result = mysqli_query($connection, $updateQuery) or die('Query Failed' . mysqli_error($connection));
                if ($result) {
                    print "<p class='alert alert-success'>User Updated Successfully...</p>";
                }
            }else{
                print "<p class='alert alert-danger'>error connecting to database</p>";
            }
        }    
    } 
}

function deleteUser(){
    global $connection;

    if (isset($_POST['deleteConfirmedButton'])) {
        $id = $_POST['id'];
        if($connection){
            $deleteQuery = "DELETE FROM users where id= $id";
    
            $result = mysqli_query($connection, $deleteQuery) or die('Query Failed' . mysqli_error($connection));
            if ($result) {
                print "<p class='alert alert-success'>User Deleted Successfully...</p>";
            }
        }else{
            print "<p class='alert alert-danger'>error connecting to database</p>";
        }
    }
}
