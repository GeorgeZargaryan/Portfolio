<?php
    require_once('../model/db.php');
    session_start();
    $userId = $_SESSION['userId'];
    $listId = $_GET['list'];
    $sql = "SELECT toDoItem_id, toDoItem_content, toDoItem_state FROM ToDoItems where toDoItem_list = (Select toDoList_id From ToDoLists where toDoList_id = $listId And toDoList_owner = $userId)";
    $result = mysqli_query($conn, $sql);
    mysqli_close($conn);

    echo json_encode(mysqli_fetch_assoc($result));  
?>