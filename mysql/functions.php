<?php

include "db.php";


function showAllData() {
    global $connnection;
    
    $query = "SELECT * FROM users";

    $result = mysqli_query( $connnection, $query );

    if( !$result ){
        die('query failed');
    } 

    while ( $row = mysqli_fetch_assoc( $result ) ) {
        $id = $row['id'];
        echo "<option value='$id'>$id</option>";
    }
}

