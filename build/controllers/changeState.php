<?php 
    require_once('../model/db.php');
    session_start();

    if(isset($_POST['state']) && isset($_POST['id'])){
        $state = $_POST['state'];
        $id = $_POST['id'];

        $state === 'false' ? $sql = "UPDATE ToDoItems SET toDoItem_state = 1 WHERE toDoItem_id = $id" : $sql = "UPDATE ToDoItems SET toDoItem_state = 2 WHERE toDoItem_id = $id";
        mysqli_query($conn,$sql);
        mysqli_close($conn);
    }
?>