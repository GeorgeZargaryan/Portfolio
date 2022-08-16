<?php 
    require_once('../model/db.php');
    session_start();

    if(isset($_GET['lI'])){
        $Lid = $_GET['lI'];
        $sql = "SELECT * FROM toDoItems WHERE toDoItem_list = $Lid ORDER BY toDoItem_id DESC LIMIT 1";

        $result = mysqli_query($conn,$sql);
        echo json_encode(mysqli_fetch_assoc($result));
    }
?>
