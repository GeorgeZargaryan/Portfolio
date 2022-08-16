<?php 
    require_once('../model/db.php');
    session_start();

    if(isset($_POST['toDoList'])) 
    {
        $value = $_POST['itemContent'];
        $state = $_POST['toDoState'];
        $Lid = $_POST['toDoList'];

        $sql = "INSERT INTO ToDoItems (`toDoItem_content`, `toDoItem_state`, `toDoItem_list`) VALUES( '$value', $state, $Lid )";
        mysqli_query($conn,$sql);
        mysqli_close($conn);
    }
?>