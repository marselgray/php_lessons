<?php

    include "db.php";
    include "functions.php";

    if ( isset( $_POST['submit'] ) ) {
        $username = $_POST['username'];
        $password = $_POST['password'];
        $id       = $_POST['id'];

        $query  = "UPDATE users SET ";
        $query .= "username = '$username', ";
        $query .= "password = '$password' ";
        $query .= "WHERE id = $id ";

        $result = mysqli_query( $connnection, $query );

        if( ! $result ) {
            die( 'query failed' . mysqli_error( $connnection ) );
        }
    }

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-+0n0xVW2eSR5OomGNYDnhzAbDsOXxcvSN1TPprVMTNDbiYZCxYbOOl7+AMvyTG2x" crossorigin="anonymous">
    <title>Document</title>
</head>
<body>

    <div class="container">
        <div class="col-sm-6">
            
            <form action="login_update.php" method='post'>
                <div class="form-group">
                    <label for="username">Username</label>
                    <input type="text" name='username' class="form-control">
                </div>

                <div class="form-group">
                    <label for="password">Password</label>
                    <input type="password" name='password' class="form-control">
                </div>

                <div class="form-group">
                    <select name="id" id="">
                        <?php showAllData(); ?>
                    </select>
                </div>

                <input type="submit" name='submit' value='UPDATE' class='btn btn-primary'>
            </form>

        </div>

    </div>
    
</body>
</html>