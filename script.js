const editnamebtn = document.getElementById('edit-name');
const nameform = document.getElementById('newnameform');
editnamebtn.onclick = function(){
    nameform.classList.toggle('show');
}