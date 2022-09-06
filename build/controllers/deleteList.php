<?php
require_once('../model/db.php');
session_start();

if (isset($_POST['lI'])) {
    $listId = $_POST['lI'];
    $user = $_SESSION['userId'];

    $sql = "SELECT toDoList_id From toDoLists Where toDoList_owner = $user AND toDoList_id = $listId";
    $result = mysqli_query($conn, $sql);

    if (mysqli_num_rows($result) > 0) {
        $sql = "DELETE FROM ToDoItems WHERE toDoItem_list = $listId";
        mysqli_query($conn, $sql);
        $sql = "DELETE FROM ToDoLists WHERE toDoList_id = $listId";
        mysqli_query($conn, $sql);
        var_dump('1');
    }
}
?>
