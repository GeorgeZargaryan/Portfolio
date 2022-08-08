<?php 

// function changeTheme($userId,$theme){
//     $sql
// }

function AddList($conn, $userId, $listName, $listBio){
    $sql = "INSERT INTO ToDoLists(toDoList_name, toDoList_bio, toDoList_owner) Values('$listName', '$listBio' , $userId)";
    mysqli_query($conn, $sql);
}

?>