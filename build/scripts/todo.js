var addListModal = document.getElementById('addListCard')
var closeAddBtn = document.querySelector('#closeModalAdd')
var addListInputs = document.querySelectorAll('#inputList')

function openAddList(){
    addListModal.style.display = 'block';
}

closeAddBtn.addEventListener('click', ()=>{
    addListInputs.forEach(input => input.value = '');
    addListModal.style.display = 'none';
});