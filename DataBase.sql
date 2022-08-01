CREATE TABLE USERS(
    user_id INT PRIMARY KEY AUTO_INCREMENT NOT NULL,
    user_email TEXT,
    user_password TEXT,
    user_bio TEXT,
    user_theme INT,
    user_icon INT
);
CREATE TABLE ToDoLists(
    toDoList_id INT PRIMARY KEY AUTO_INCREMENT NOT NULL,
    toDoList_name TEXT,
    toDoList_bio TEXT,
    toDoList_color INT
);
CREATE TABLE stateToDoItems(
 	stateToDoItems_id INT PRIMARY KEY AUTO_INCREMENT NOT NULL,
    stateName TEXT
);
CREATE TABLE ToDoItems(
	toDoItem_id INT PRIMARY KEY AUTO_INCREMENT NOT NULL,
    toDoItem_content TEXT,
    toDoItem_state INT,
    FOREIGN KEY (toDoItem_state) REFERENCES stateToDoItems (stateToDoItems_id) 
);