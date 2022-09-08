<?php
session_start();
require_once("../model/db.php");
require_once('../model/functions.php');

$userId = $_SESSION['userId'];


$selectLists = "SELECT toDoList_id, toDoList_name, toDoList_bio, toDoList_color FROM toDoLists WHERE toDoList_owner = $userId";



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
    <script src="../scripts/jquery.js"></script>

</head>

<body style="background-image: url('../assets/backgrounds/0.png');">
    <section>
        <header class="headerWrap fixed-top">
            <div class="container navbarList pt-2 pb-2">
                <a href="#" class="logoDemo">
                    <h1>To-Do.php</h1>
                </a>
                <ul class="d-flex flex-row navbarListUl">
                    <li><a href="home.php" class="navbarListBtn">Home</a></li>
                    <li><a onclick="openAddList()" class="navbarListBtn">Add List</a></li>
                    <li><a href="../controllers/signOut.php" class="navbarListBtn">Sign Out</a></li>
                </ul>

            </div>
        </header>
    </section>
    <section class="mt-5 pt-5">
        <?php if (isset($_GET['id'])) { ?>
            <div class="toDoCreateAlertDiv" id="toDoCreateAlertDiv">
                <?php if ($_GET['id'] == 0) { ?>
                    <div class="alert alert-success toDoCreateAlert" id="toDoCreateAlert" role="alert">
                        List succesfully created!!!
                    </div>
                <?php } elseif ($_GET['id'] == 1) { ?>
                    <div class="alert alert-danger toDoCreateAlert" id="toDoCreateAlert" role="alert">
                        There's no user id!!!
                    </div>
                <?php } elseif ($_GET['id'] == 2) { ?>
                    <div class="alert alert-danger toDoCreateAlert" id="toDoCreateAlert" role="alert">
                        There's no list name!!!
                    </div>
                <?php } ?>
            </div>
        <?php } ?>
        <div class="container pb-3 d-flex flex-wrap ">
            <?php
            $result = mysqli_query($conn, $selectLists);

            if (mysqli_num_rows($result) > 0) {
                while ($row = mysqli_fetch_assoc($result)) { ?>

                    <div class="toDoList pb-3 pe-3 pr-3" id='List<?= $row['toDoList_id'] ?>'>
                        <a href="#" class="deleteList" id="DltL<?= $row['toDoList_id'] ?>"><img src="../assets/icons/close.png" alt="x" class="deleteImg"></a>
                        <div class="card card-body text-center toDoClickable" id="<?= $row['toDoList_id'] ?>">
                            <h3 id="ListTitle<?= $row['toDoList_id'] ?>"><?= $row['toDoList_name'] ?></h3>
                            <span><?= $row['toDoList_bio'] ?></span>
                        </div>
                    </div>
            <?php  }
            }
            ?>
        </div>

        <div class="modalDelete" id="modalDelete">
            <div class="deleteModalContent">
                <h2>Delete Account</h2>
                <p>Are you sure you want to delete your account?</p>
                <a id="DeleteBtn" class="deleteBtn">Delete</a>
                <a id="closeDeleteModal">Cancel</a>
            </div>
        </div>

        <div class="modalForToDo" id="modalForToDo">
            <div class="toDoListContent" id="toDoListContent">
                <div class="toDoHead" id="toDoHead">

                    <a href="#" id="closeList"><img src="../assets/icons/close.png" alt="x" style="width: 40px; height: 40px; flex:1;"></a>
                    <div id="right">
                        <a><img src="../assets/icons/setting.png" alt="" style="width: 35px; height:35px;"></a>
                    </div>
                </div>
                <div class="toDoBody" id="toDoBody">

                </div>
                <div class="toDoFooter">
                    <div class="leftSide">

                    </div>
                    <div class="rightSide">
                    </div>
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
                <form action="../controllers/createList.php" method="POST" class="addListInputs">
                    <input type="text" id="inputList" name="listName" placeholder="Enter list name" required minlength="3">
                    <input type="text" id="inputList" name="listBio" placeholder="Enter list bio">
                    <button type="submit" class="submitBtn">Create</button>
                </form>
            </div>
        </div>
    </div>
    <script src="../scripts/todo.js"></script>
    <script src="../style/bootstrap-5.0.2-dist/js/bootstrap.bundle.min.js"></script>
</body>

</html>