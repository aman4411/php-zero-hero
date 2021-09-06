<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>POST Super Global in PHP</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.0/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-KyZXEAg3QhqLMpG8r+8fhAXLRk2vvoC2f3B09zVXn8CA5QIVfZOJ3BCsw2P0p/We" crossorigin="anonymous">
</head>
<body>
    <br>
    <div class="container">
        <form action="2. POST super global.php" method="post">
            <div class="form-group">
                <input type="text" name="name" class="form-control w-50">
            </div>
            <br>
            <div class="form-group">
                <button type="submit" class="btn btn-primary">Submit</button>
            </div>
            <br>
        </form>
    </div>
</body>
</html>

<?php
   if(isset($_POST['name'])){
       echo $_POST['name'];
   }
?>