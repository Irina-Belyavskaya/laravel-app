const deleteBtnsLaptop = document.querySelectorAll('.delete-btn-laptop');
const deleteBtnsServices = document.querySelectorAll('.delete-btn-service');
const formDelete = document.querySelector('.hidden-form');
const inputDelete = document.getElementById('hiddenId');
const inputName = document.getElementById('name');

deleteBtnsLaptop.forEach(deleteBtn => {
    deleteBtn.addEventListener('click', () => {
        formDelete.action = 'admin/delete';
        inputName.value = 'laptop';
        inputDelete.value = deleteBtn.dataset.id;
        HTMLFormElement.prototype.submit.call(formDelete);
    });
});

deleteBtnsServices.forEach(deleteBtn => {
    deleteBtn.addEventListener('click', () => {
        formDelete.action = 'admin/delete';
        inputName.value = 'service';
        inputDelete.value = deleteBtn.dataset.id;
        HTMLFormElement.prototype.submit.call(formDelete);
    });
});



