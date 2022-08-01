<?php
    require_once("../model/db.php");

    if(!filter_var($_POST['SignUpEmail'], FILTER_VALIDATE_EMAIL)){
        header("Location: ../views/index.php?id=1"); //Invalid Email
        exit();
    }

    $checkedemail = $_POST['SignUpEmail'];
    $password = $_POST['SignUpPass'];
    $confirmpassword = $_POST['SignUpConfPass'];

    if ($password != $confirmpassword) {
        header("Location: ../views/index.php?id=2"); //Passwords are not same
        exit();
    }

    if($password < 8){
        header("Location: ../views/index.php?id=3"); //Passwords is too short
        exit();
    }

    if($password == 0){
        header("Location: ../views/index.php?id=4"); //No entered password
        exit();
    }

    $result = mysqli_query($conn, "SELECT user_email FROM USERS WHERE user_email = '$checkedemail'");
    if(mysqli_num_rows($result)>0){
        header("Location: ../views/index.php?id=5"); //Your email already used
        exit();
    }
    
    $checkedPass = md5($password);
    $sql = "INSERT INTO USERS (user_email, user_password, user_bio, user_theme, user_icon)
            VALUES('$checkedemail', '$checkedPass', 'Hi Everyone', 0, 0)";

    mysqli_query($conn,$sql);
    mysqli_close($conn);

    header("Location: ../views/index.php?id=0"); //Succesfully signed up !!!
    exit();
    

?>