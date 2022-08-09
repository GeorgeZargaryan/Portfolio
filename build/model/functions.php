<?php 

// function changeTheme($userId,$theme){
//     $sql
// }

function openList($conn, $listId){

    $sql = "SELECT toDoItem_id, toDoItem_content, toDoItem_state FROM ToDoItems WHERE toDoItem_list = $listId";
    $result = mysqli_query($conn,$sql);

    return mysqli_fetch_assoc($result);
}

?>