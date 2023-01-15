const changeBtnsLaptop = document.querySelectorAll('.change-btn-laptop');
const changeBtnsServices = document.querySelectorAll('.change-btn-service');
const formChange = document.querySelector('.hidden-form');
const inputChange = document.getElementById('hiddenId');
const input = document.getElementById('name');

changeBtnsLaptop.forEach(changeBtn => {
    changeBtn.addEventListener('click', () => {
        formChange.action = 'admin/change';
        input.value = 'laptop';
        inputChange.value = changeBtn.dataset.id;
        HTMLFormElement.prototype.submit.call(formChange);
    });
});

changeBtnsServices.forEach(changeBtn => {
    changeBtn.addEventListener('click', () => {
        formChange.action = 'admin/change';
        input.value = 'service';
        inputChange.value = changeBtn.dataset.id;
        HTMLFormElement.prototype.submit.call(formChange);
    });
});
