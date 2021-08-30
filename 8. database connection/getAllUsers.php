<?php
//make connection to sql database
$connection = mysqli_connect('localhost', 'root', '', 'loginapp');

if ($connection) {
    $query = "SELECT * FROM users ";

    $result = mysqli_query($connection, $query);

    if (!$result) {
        die('Query Failed' . mysqli_error($connection));
    }
} else {
    print "<p class='alert alert-danger'>error connecting to database</p>";
}