var addListModal = document.getElementById('addListCard')
var closeAddBtn = document.querySelector('#closeModalAdd')
var addListInputs = document.querySelectorAll('#inputList')

var toDoAlert = document.querySelector('#toDoCreateAlert')
var toDoAlertDiv = document.querySelector('#toDoCreateAlertDiv')

var modalList = document.querySelector('#modalForToDo')
var ListHeader = document.getElementById('toDoHead')
var CloseList = document.getElementById('closeList')
var listBody = document.getElementById('toDoBody')

var ListItems = document.querySelectorAll('.listItem')
var rightHeader = document.getElementById('right')

function openAddList(){
    addListModal.style.display = 'block';
}

closeAddBtn.addEventListener('click', ()=>{
    addListInputs.forEach(input => input.value = '');
    addListModal.style.display = 'none';
});

CloseList.addEventListener('click' ,()=>{
    modalList.style.display = 'none';
    listBody.innerHTML = ' '
    ListHeader.removeChild(ListHeader.children[1])
});

if(toDoAlertDiv){
    toDoAlertDiv.addEventListener('mouseout', closeAlert());
}

function closeAlert(){
    setTimeout(() => {
        toDoAlert.style.animationName = "animatebot";
    }, 7000);
    setTimeout(()=>{
        toDoAlertDiv.style.display = 'none';
    },7100)
}

function openToDo(id){
    modalList.style.display = 'block'
    // console.log(id);
    let name = document.getElementById(id)
    let Lname = document.createElement('h3')
    Lname.classList.add('toDoName')
    Lname.innerText = name.innerText;
    ListHeader.insertBefore(Lname,rightHeader)
}

function ChangeInsertValue(event){
    let id = event.id
    id = id.substr(7)
    let insert = document.getElementById('listNum'+id);
    let valueToChange = insert.value;
    // insert.value = valueToChange;

    $.ajax({
        type: 'POST',
        url: "../controllers/insertChanges.php",
        data: {newValue: valueToChange, itemId: id},
        success: function(result){
        }
  })
}

// ListItems.forEach((element)=>{
//     element.valueChanges.subscribe(value => {
//         element.style.height = 'auto';
//         element.style.height = `${element.scrollHeight}px`;
//         console.log('1')
//     });
// })