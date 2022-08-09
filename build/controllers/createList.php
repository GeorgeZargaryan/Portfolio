<?php
    require_once("../model/db.php");   
    session_start();
    if(isset($_SESSION['userId'])) {
        $userId = $_SESSION['userId'];
        if(isset($_POST['listName']) && isset($_POST['listBio'])){
            $listName = $_POST['listName'];
            $listBio = $_POST['listBio'];
            $sql = "INSERT INTO ToDoLists(toDoList_name, toDoList_bio, toDoList_owner) Values('$listName', '$listBio' , $userId)";
            mysqli_query($conn, $sql);
            mysqli_close($conn);
        }
        elseif(isset($_POST['listName'])){
            $listName = $_POST['listName'];
            $sql = "INSERT INTO ToDoLists(toDoList_name, toDoList_owner) Values('$listName', $userId)";
            mysqli_query($conn, $sql);
            mysqli_close($conn);
        }
        else{
            header("Location: ../views/to-do.php?id=2");
            exit();
        }
    }
    else{
        header("Location: ../views/to-do.php?id=1");
        exit();
    }
    
    
    header("Location: ../views/to-do.php?id=0");
    exit();
?>