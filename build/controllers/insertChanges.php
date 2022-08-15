<?php 
    require_once('../model/db.php');
    session_start();

    if(isset($_POST['newValue'])&& isset($_POST['itemId'])) 
    {
        $value = $_POST['newValue'];
        $id = $_POST['itemId'];
        $sql = "UPDATE ToDoItems SET toDoItem_content = '$value' WHERE toDoItem_id = $id";
        mysqli_query($conn,$sql);
        mysqli_close($conn);
    }
?>