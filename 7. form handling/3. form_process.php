<?php
    //extracting values from submitted form.
    if(isset($_POST['submitButton'])){
        print 'Form Submitted' . '<br>';
        $username = $_POST['username'];
        $password = $_POST['password'];

        //validating form data
        if(strlen($username)<6){
            print "<p class='alert alert-danger'>Username has to be longer than 6 characters</p>";
        }elseif(strlen($password)<6){
            print "<p class='alert alert-danger'>Password has to be longer than 6 characters</p>";
        }else{
            print "Username : $username" . "<br>";
            print "Password : $password" . "<br>";
        }     
    }
?>