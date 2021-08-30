<?php

//make connection to sql database
$connection = mysqli_connect('localhost', 'root', '', 'loginapp');

function createUser($username,$password){
    global $connection;

    if ($connection) {
        $query = "INSERT INTO users(username,password) ";
        $query .= "VALUES('$username','$password')";

        $result = mysqli_query($connection, $query) or die(mysqli_error($connection));
        print "<p class='alert alert-success'>User Created...</p>";
    } else {
        print "<p class='alert alert-danger'>error connecting to database</p>";
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

function updateUser($id,$username,$password){
    global $connection;

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
