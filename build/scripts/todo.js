var addListModal = document.getElementById('addListCard')
var closeAddBtn = document.querySelector('#closeModalAdd')
var addListInputs = document.querySelectorAll('#inputList')

var toDoAlert = document.querySelector('#toDoCreateAlert')
var toDoAlertDiv = document.querySelector('#toDoCreateAlertDiv')

var modalList = document.querySelector('#modalForToDo')


function openAddList(){
    addListModal.style.display = 'block';
}

closeAddBtn.addEventListener('click', ()=>{
    addListInputs.forEach(input => input.value = '');
    addListModal.style.display = 'none';
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
function openToDo(listId){
    modalList.style.display = 'block'
}