<?php
    //In Associated arrays, we can give key value pairs. In other words, we can give labels to our indexes.
    $student = ['first_name' => 'Aman', 'last_name' => 'Mehta', 'roll_number' => 24];
    echo 'Student Array : ';
    print_r($student);
    echo '<br>';
    echo 'First Name : ' . $student['first_name'] . '<br>';
    echo 'Last Name : ' . $student['last_name'] . '<br>';
?>
