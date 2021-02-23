<?php
    if (isset( $_POST['submit'] ) ) {
        $username = $_POST['username'];
        $password = $_POST['password'];

        $names = array('Edwin', 'Samid', 'Admin', 'Lisa', 'Pete');

        // https://www.php.net/manual/en/function.in-array.php
        if( ! in_array($username, $names ) ){
            echo 'sorry you cant enter';
        } else {
            echo 'welcome';
        }

    } else {

    }
