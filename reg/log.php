<?php
require_once('db.php');

if (isset($_POST['login']) && isset($_POST['pass'])) {
    $login = mysqli_real_escape_string($conn, $_POST['login']);
    $pass = mysqli_real_escape_string($conn, $_POST['pass']);

    $sql = "SELECT * FROM `users` WHERE login = '$login' AND pass = '$pass'";
    $result = $conn->query($sql);

    if ($result->num_rows > 0) {
        $user = $result->fetch_assoc();
        setcookie('user', $user['login'], time() + 3600, "/");
        header('Location: ../index.php');
    } else {
        echo "Žiadny použivatel";
    }
} else {
    echo "Vyplňte všetky polia";
}



?>