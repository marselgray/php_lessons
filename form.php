<?php

if (isset( $_POST['submit'] ) ) {
    $username = $_POST['username'];
    $password = $_POST['password'];

    echo 'hello ' . $username . '<br>';
    echo 'your password is ' .$password;

} else {

}

?>

<form action="form.php" method="post">
    <input type="text" placeholder="Enter Username" name='username'><br>
    <input type="password" placeholder="Enter Password" name='password'><br>
    <input type="submit" name='submit'>
</form>

