var addListModal = document.getElementById("addListCard");
var closeAddBtn = document.querySelector("#closeModalAdd");
var addListInputs = document.querySelectorAll("#inputList");

var toDoAlert = document.querySelector("#toDoCreateAlert");
var toDoAlertDiv = document.querySelector("#toDoCreateAlertDiv");

var deleteList = document.querySelectorAll(".deleteList");

var modalList = document.querySelector("#modalForToDo");
var ListHeader = document.getElementById("toDoHead");
var CloseList = document.getElementById("closeList");
var listBody = document.getElementById("toDoBody");

var ListItems = document.querySelectorAll(".listItem");
var rightHeader = document.getElementById("right");

deleteList.forEach((element) => {
  element.addEventListener("click", {});
});

function openAddList() {
  addListModal.style.display = "block";
}

closeAddBtn.addEventListener("click", () => {
  addListInputs.forEach((input) => (input.value = ""));
  addListModal.style.display = "none";
});

CloseList.addEventListener("click", () => {
  modalList.style.display = "none";
  listBody.innerHTML = " ";
  ListHeader.removeChild(ListHeader.children[1]);
});

if (toDoAlertDiv) {
  toDoAlertDiv.addEventListener("mouseout", closeAlert());
}

function closeAlert() {
  setTimeout(() => {
    toDoAlert.style.animationName = "animatebot";
  }, 7000);
  setTimeout(() => {
    toDoAlertDiv.style.display = "none";
  }, 7100);
}

function openToDo(id) {
  modalList.style.display = "block";
  // console.log(id);
  let name = document.getElementById(id);
  let Lname = document.createElement("h3");
  Lname.classList.add("toDoName");
  Lname.innerText = name.innerText;
  ListHeader.insertBefore(Lname, rightHeader);
}

function ChangeInsertValue(event) {
  let id = event.id;
  id = id.substr(7);
  let insert = document.getElementById("listNum" + id);
  let valueToChange = insert.value;
  // insert.value = valueToChange;

  $.ajax({
    type: "POST",
    url: "../controllers/insertChanges.php",
    data: { newValue: valueToChange, itemId: id },
    success: function (result) {},
  });
}
function changeState(event) {
  let id = event.name;
  let insert = document.getElementById("listNum" + id);
  let text = insert.value.replace(/\s/g, "");
  console.log(text);
  text != ""
    ? event.checked == true
      ? insert.classList.replace("undone", "done")
      : insert.classList.replace("done", "undone")
    : "";
  $.ajax({
    type: "POST",
    url: "../controllers/changeState.php",
    data: { id: event.name, state: event.checked },
    success: function () {
      console.log("success!!!!!!!!");
    },
  });
}

window.onload = () => {
  let lists = document.querySelectorAll('.toDoClickable');
  lists.forEach((element)=>{
    element.addEventListener('mouseover',()=>{
      document.getElementById('DltL' + element.id).style.display = "block";
    })
    element.addEventListener('mouseout',()=>{
      document.getElementById('DltL' + element.id).style.display = "none";

    })
  })
  $("a#openList").click(function () {
    var listID = $(this).attr("name");

    $.ajax({
      url: "../controllers/getListInfo.php?list=" + listID,
      data: "",
      dataType: "JSON",
      success: function (data) {
        let listBody = document.getElementById("toDoBody");

        if (data.length > 1) {
          data.forEach((element) => {
            let listItem = document.createElement("div");
            let inputText = document.createElement("textarea");
            let inputCheck = document.createElement("input");
            listItem.classList.add("item_content", "d-flex");
            inputCheck.setAttribute("type", "checkbox");
            inputCheck.setAttribute("name", element.toDoItem_id);
            inputCheck.setAttribute("class", "listCheckbox");
            inputCheck.setAttribute("onChange", "changeState(this)");
            inputCheck.checked = element.toDoItem_state == 1 ? false : true;
            inputText.setAttribute("class", "listItem");
            inputText.setAttribute("onChange", "ChangeInsertValue(this)");
            inputText.setAttribute("id", "listNum" + element.toDoItem_id);
            inputText.innerText = element.toDoItem_content;
            inputText.value != ""
              ? inputCheck.checked == true
                ? inputText.classList.add("done")
                : inputText.classList.add("undone")
              : "";
            listItem.appendChild(inputCheck);
            listItem.appendChild(inputText);
            listBody.appendChild(listItem);
          });
        } else if (data.length == 1) {
          let listItem = document.createElement("div");
          let inputText = document.createElement("textarea");
          let inputCheck = document.createElement("input");
          listItem.classList.add("item_content", "d-flex");
          inputCheck.setAttribute("type", "checkbox");
          inputCheck.setAttribute("name", data[0].toDoItem_id);
          inputCheck.setAttribute("class", "listCheckbox");
          inputCheck.setAttribute("onChange", "changeState(this)");
          inputCheck.checked = data[0].toDoItem_state == 1 ? false : true;
          inputText.setAttribute("class", "listItem");
          inputText.setAttribute("onChange", "ChangeInsertValue(this)");
          inputText.setAttribute("id", "listNum" + data[0].toDoItem_id);
          inputText.innerText = data[0].toDoItem_content;
          inputText.value != ""
            ? inputCheck.checked == true
              ? inputText.classList.add("done")
              : inputText.classList.add("undone")
            : "";
          listItem.appendChild(inputCheck);
          listItem.appendChild(inputText);
          listBody.appendChild(listItem);
        }

        let addItemBtn = document.createElement("a");
        let plusIcon = document.createElement("img");
        let addItem = document.createElement("div");
        plusIcon.setAttribute("src", "../assets/icons/plus.png");
        addItemBtn.setAttribute("href", "#");
        addItemBtn.setAttribute("id", "addItemBtn");
        addItem.classList.add("item_content", "d-flex");
        addItem.setAttribute("id", "createItem");
        plusIcon.classList.add("plusIcon");
        addItemBtn.innerText = "Add New";
        addItem.appendChild(plusIcon);
        addItem.appendChild(addItemBtn);
        listBody.appendChild(addItem);
        setTimeout(() => {
          addItemBtn.setAttribute("onclick", "createNew(" + listID + ")");
        }, 0001);
      },
    });
  });
};

function createNew(listId) {
  $.ajax({
    type: "POST",
    url: "../controllers/addItem.php",
    data: { itemContent: " ", toDoState: "1", toDoList: listId },
    success: function () {},
  }).done(() => {
    $.ajax({
      type: "GET",
      url: "../controllers/getListItem.php?lI=" + listId,
      dataType: "JSON",
      data: "",
      success: function (data) {
        let createBtn = document.getElementById("createItem");
        let listBody = document.getElementById("toDoBody");
        let listItem = document.createElement("div");
        let inputText = document.createElement("textarea");
        let inputCheck = document.createElement("input");
        listItem.classList.add("item_content", "d-flex");
        inputCheck.setAttribute("type", "checkbox");
        inputCheck.setAttribute("class", "listCheckbox");
        inputText.setAttribute("class", "listItem");
        inputText.setAttribute("onChange", "ChangeInsertValue(this)");
        inputText.setAttribute("id", "listNum" + data.toDoItem_id);
        inputText.innerText = data.toDoItem_content;
        listItem.appendChild(inputCheck);
        listItem.appendChild(inputText);
        listBody.insertBefore(listItem, createBtn);
        inputText.focus();
      },
      error: function () {
        console.log("error");
      },
    });
  });
}

// ListItems.forEach((element)=>{
//     element.valueChanges.subscribe(value => {
//         element.style.height = 'auto';
//         element.style.height = `${element.scrollHeight}px`;
//         console.log('1')
//     });
// })
