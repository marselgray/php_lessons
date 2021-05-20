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


function updateTable() {

    global $connnection;

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

