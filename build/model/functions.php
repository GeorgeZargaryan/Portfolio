<?php 

// function changeTheme($userId,$theme){
//     $sql
// }

function getListInfo($conn, $listId){

    $sql = "SELECT toDoItem_id, toDoItem_content, toDoItem_state FROM ToDoItems WHERE toDoItem_list = $listId";
    $result = mysqli_query($conn,$sql);

    return $List = mysqli_fetch_assoc($result);
}

?>