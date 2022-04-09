const editnamebtn = document.getElementById('edit-name');
const deleteuserbtn = document.getElementById('delete-user');
const nameform = document.getElementById('inner_wrapper');
const deleteform = document.getElementById('delete_wrapper')
editnamebtn.onclick = function(){
    nameform.classList.toggle('show');
    deleteform.classList.remove('show');
}

deleteuserbtn.onclick = function(){
    deleteform.classList.toggle('show');
    nameform.classList.remove('show');
    
}