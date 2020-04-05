<?php
/*
    Name:

    Email:
*/
?>

<?php 
    if (!isset($_SESSION['uname'])) {
        header('Location: login-view.html');
}

?>

<html>
    <body>
        <h1>highly sensitive data. Must be protected</h1>
    </body>
</html>
