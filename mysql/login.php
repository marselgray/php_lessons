<?php

    if ( isset( $_POST['submit'] ) ) {

        $username = $_POST['username'];
        $password = $_POST['password'];

        $connnection = mysqli_connect( 'localhost', 'root', 'root', 'loginapp' );

        if ( $connnection ) {
            echo 'we are connected';
        } else {
            die( 'no' );
        }

        // if ( $username && $password ) {

        // } else {

        // }
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
            <form action="login.php" method='post'>
                <div class="form-group">
                    <label for="username">Username</label>
                    <input type="text" name='username' class="form-control">
                </div>

                <div class="form-group">
                    <label for="password">Password</label>
                    <input type="password" name='password' class="form-control">
                </div>

                <input type="submit" name='submit' value='Submit' class='btn btn-primary'>
            </form>
        </div>

    </div>
    
</body>
</html>