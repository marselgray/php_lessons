<?php

if (isset( $_POST['submit'] ) ) {
    echo 'yes it works';
} else {

}

?>

<form action="form.php" method="post">
    <input type="text" placeholder="Enter Username"><br>
    <input type="password" placeholder="Enter Password"><br>
    <input type="submit" name='submit'>
</form>

