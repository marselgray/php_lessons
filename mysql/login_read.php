<?php

    $connnection = mysqli_connect( 'localhost', 'root', 'root', 'loginapp' );

    $query = "SELECT * FROM users";

    $result = mysqli_query( $connnection, $query );

    if( !$result ){
        die('query failed');
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
            
            <?php 
            
                while ( $row = mysqli_fetch_assoc( $result ) ) {
                    ?>
                    <pre>
                    <?php
                    print_r( $row );
                    ?>
                    </pre>
                    <?php
                }

            ?>

        </div>

    </div>
    
</body>
</html>