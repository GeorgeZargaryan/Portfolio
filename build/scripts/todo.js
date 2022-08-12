var addListModal = document.getElementById('addListCard')
var closeAddBtn = document.querySelector('#closeModalAdd')
var addListInputs = document.querySelectorAll('#inputList')

var toDoAlert = document.querySelector('#toDoCreateAlert')
var toDoAlertDiv = document.querySelector('#toDoCreateAlertDiv')

var modalList = document.querySelector('#modalForToDo')
var ListHeader = document.getElementById('toDoHead')
var CloseList = document.getElementById('closeList')
var listBody = document.getElementById('toDoBody')

var ListItems = document.querySelectorAll('#listItem')

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
    console.log(id);
    let name = document.getElementById(id)
    let Lname = document.createElement('h3')
    Lname.classList.add('toDoName')
    Lname.innerText = name.innerText;
    ListHeader.appendChild(Lname)
}

if(ListItems){
    ListItems.forEach(inputItem =>{
        inputItem.addEventListener('onchange', function()
        {
            console.log('input changed to: ', input.value);
        });
    })
}