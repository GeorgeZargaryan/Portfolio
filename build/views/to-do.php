<?php
    session_start();
    require_once("../model/db.php");

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
    <title>To-Do | Portfolio</title>

</head>

<body>
    <section>
        <header class="headerWrap fixed-top">
            <div class="container navbarList pt-2 pb-2">
                <a href="#" class="logoDemo">
                    <h1>To-Do.php</h1>
                </a>
                <ul class="d-flex flex-row navbarListUl">
                    <li><a href="index.php" class="navbarListBtn">Home</a></li>
                    <li><a href="#" class="navbarListBtn">About</a></li>
                    <li><a href="#" class="navbarListBtn">Sign Out</a></li>
                </ul>

            </div>
        </header>
    </section>
    <section class="mt-5">
        <div class="container cards pt-5">
            <div class="row">
                <div class="card card-body text-center col-md-4 toDoClickable">
                    <p>Title</p>
                    <span>Bio</span>
                    <button type="button" class="btn btn-primary" data-toggle="modal" data-target="#toDoModal">
                        Launch demo modal
                    </button>
                </div>
            </div>
        </div>

        <!-- modal opens-->
        <div class="modal fade" id="toDoModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLongTitle" aria-hidden="true">
            <div class="modal-dialog modal-dialog-centered modal-dialog-scrollable" role="document">
                <div class="modal-content">
                    <div class="modal-header">
                        <h5 class="modal-title" id="exampleModalLongTitle">Modal title</h5>
                        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                            <span aria-hidden="true">&times;</span>
                        </button>
                    </div>
                    <div class="modal-body">
                        ...
                    </div>
                    <div class="modal-footer">
                        <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
                        <button type="button" class="btn btn-primary">Save changes</button>
                    </div>
                </div>
            </div>
        </div>
        <!-- modal closes -->

    </section>
    <script src="../style/bootstrap-5.0.2-dist/js/bootstrap.bundle.min.js"></script>
</body>

</html>