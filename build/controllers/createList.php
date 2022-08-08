<?php
    require_once("../model/db.php");   
    session_start();
    if(isset($_SESSION['userId'])) {
        $userId = $_SESSION['userId'];
        if(isset($_POST['name']) && isset($_POST['bio'])){
            $listName=$_POST['name'];
            $listBio=$_POST['bio'];
        }
    }


    $sql = "INSERT INTO ToDoLists(toDoList_name, toDoList_bio, toDoList_owner) Values('$listName', '$listBio' , $userId)";
    mysqli_query($conn, $sql);
    mysqli_close($conn);
?>