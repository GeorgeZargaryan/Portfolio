<?php
require_once('../model/db.php');

$checkEmail = $_POST['SignInEmail'];
$hashPass = md5($_POST['SignInPass']);

if (isset($checkEmail) && isset($hashPass)) {
    $sql = "SELECT user_id, user_theme FROM USERS WHERE user_email = '$checkEmail' AND user_password = '$hashPass'";
    $result = mysqli_query($conn, $sql);
    if ($result) {
        $row = $result->fetch_assoc();
        session_start();
        $_SESSION['userId'] = $row['user_id'];
        $_SESSION['theme'] = $row['theme'];
        header("Location: ../views/home.php");
        exit();
    } else {
        header("Location: ../views/index.php?id=6"); // Invalid email or password
        exit();
    }
}
