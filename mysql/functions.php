<?php

include "db.php";


function createRows() {
    if ( isset( $_POST['submit'] ) ) {
         
        global $connnection;

        $username = $_POST['username'];
        $password = $_POST['password'];

        $query = "INSERT INTO users(username,password) ";
        $query .= "VALUES ('$username', '$password')";

        $result = mysqli_query( $connnection, $query );

        if( !$result ){
            die('query failed');
        } else {
            echo 'record created';
        }
    }
}


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

    if ( isset( $_POST['submit'] ) ) {
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
        } else {
            echo 'record updated';
        }
    }
}



function deleteRows() {

    if ( isset( $_POST['submit'] ) ) {
        global $connnection;
    
        $id       = $_POST['id'];
    
        $query  = "DELETE FROM users ";
        $query .= "WHERE id = $id ";
    
        $result = mysqli_query( $connnection, $query );
    
        if( ! $result ) {
            die( 'query failed' . mysqli_error( $connnection ) );
        } else {
            echo 'record deleted';
        }
    }
}

