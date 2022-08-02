<?php
require_once('../model/db.php');
session_start();

$userId = $_SESSION['user_id'];
$theme = $_SESSION['theme'];
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
                    <li><a href="profile.php" class="navbarListBtn">Profile</a></li>
                    <li><a href="#" class="navbarListBtn">About Us</a></li>
                    <li><a href="../controllers/signOut.php" class="navbarListBtn">Sign Out</a></li>
                </ul>

            </div>
        </header>
    </section>

    <section>

    </section>

    <section>
        <footer class="footerWrap fixed-bottom">
            <div class="container pt-2 pb-2 d-flex flex-row justify-content-around">
                <div class="footerFAQ d-flex flex-column">
                    <ul>
                        <li><a href="#">Why is this Created?</a></li>
                        <li><a href="#">Why is this Created?</a></li>
                        <li><a href="#">Why is this Created?</a></li>
                    </ul>
                </div>
                <div class="footerContacts d-flex flex-column">
                    <ul>
                        <li><a href="#">Web Developer</a></li>
                        <li><a href="#">Web Developer</a></li>
                        <li><a href="#">Web Developer</a></li>
                    </ul>
                </div>
                <div class="footerAttribution d-flex flex-column">
                    <ul>
                        <li><a href="#">Creator</a></li>
                        <li><a href="#">Creator</a></li>
                        <li><a href="#">Creator</a></li>
                    </ul>
                </div>
            </div>
        </footer>
    </section>
</body>

</html>