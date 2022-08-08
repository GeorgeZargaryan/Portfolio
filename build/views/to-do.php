<?php
session_start();
require_once("../model/db.php");

$userId = $_SESSION['userId'];

?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="../style/bootstrap-5.0.2-dist/css/bootstrap.min.css">
    <link rel="stylesheet" href="../style/style.css">
    <title>To-Do | Pluvia</title>

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
                    <li><a onclick="openAddList()" class="navbarListBtn">Add List</a></li>
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
                    <button onclick="openToDo(0)">Open</button>
                </div>
            </div>
        </div>

        <div class="modalForToDo">
            <div class="ToDoHead">

            </div>
            <div class="ToDoBody">
                <div class="ToDoList">

                </div>

            </div>
        </div>
    </section>

    <div class="addListCard" id="addListCard">
        <div class="addListConatiner">
            <div class="addListHeader">
                <h2>CreateList</h2>
                <a href="#" id="closeModalAdd"><img src="../assets/icons/close.png" alt="x" style="width: 40px; height: 40px;"></a>
            </div>
            <div class="addListBody">
                <form action="#" method="POST">
                    <input type="text" id="inputList" placeholder="Enter list name">
                    <input type="text" id="inputList" placeholder="Enter list bio">
                    <button type="submit">Create</button>
                </form>
            </div>
        </div>
    </div>
    <script src="../scripts/todo.js"></script>
    <script src="../style/bootstrap-5.0.2-dist/js/bootstrap.bundle.min.js"></script>
</body>

</html>