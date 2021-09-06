<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>GET Super Gloabl Variable in PHP</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.0/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-KyZXEAg3QhqLMpG8r+8fhAXLRk2vvoC2f3B09zVXn8CA5QIVfZOJ3BCsw2P0p/We" crossorigin="anonymous">
</head>

<body>
    <div class="container">

        <?php
          $name = 'Aman';
        ?>

        <br>

        <a href="./1. GET super global.php?name=<?php echo $name; ?>">
            <button class="btn btn-primary">
                Reload Page
            </button>
        </a>

        <br>
        <br>

        <?php
          //we can get all query params from the url in this $_GET super global variable.
          if(isset($_GET['name'])){
            print_r($_GET);
          }
        ?>
    </div>
</body>
</html>