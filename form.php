<?php

if (isset( $_POST['submit'] ) ) {
    $username = $_POST['username'];
    $password = $_POST['password'];
    $minimum = 5;

    $names = array('Edwin', 'Samid', 'Admin', 'Lisa', 'Pete');

    // https://www.php.net/manual/en/function.in-array.php
    if( ! in_array($username, $names ) ){
        echo 'sorry you cant enter';
    } else {
        echo 'welcome';
    }

} else {

}

?>

<form action="form.php" method="post">
    <input type="text" placeholder="Enter Username" name='username'><br>
    <input type="password" placeholder="Enter Password" name='password'><br>
    <input type="submit" name='submit'>
</form>

