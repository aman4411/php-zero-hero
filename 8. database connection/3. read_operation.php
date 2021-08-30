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
        <h2>Users Table</h2>
        <br>

        <div class="col-sm-6">
            <?php include "getAllUsers.php";
                while ($row = mysqli_fetch_assoc($result)) {
            ?>
                <pre class="alert alert-success">
            <?php
                print_r($row)
            ?>
                </pre>
            <?php
            }
            ?>
        </div>

    </div>
</body>

</html>