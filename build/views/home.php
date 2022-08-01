<?php
require_once('../model/db.php');
session_start();

$userId = $_SESSION['user_id'];
?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="../style/bootstrap-5.0.2-dist/css/bootstrap.min.css">
    <link rel="stylesheet" href="../style/style.css">
    <title>Home | Pluvia</title>
</head>

<body style="background-image: url('../assets/backgrounds/0.png');">
    <section>
        <header class="headerWrap fixed-top">
            <div class="container navbarList pt-2 pb-2">
                <a href="#" class="logoDemo">Pluvia</a>
                <ul class="d-flex flex-row navbarListUl">
                    <li><a href="#" class="navbarListBtn">Home</a></li>
                    <li><a href="#" class="navbarListBtn">About</a></li>
                    <li><a href="../controllers/signOut.php" class="navbarListBtn">Sign Out</a></li>
                </ul>

            </div>
        </header>
    </section>
</body>

</html>