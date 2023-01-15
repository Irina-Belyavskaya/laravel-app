const addBtnLaptop = document.querySelector('.btn-submit-laptop');
const addBtnServices = document.querySelector('.btn-submit-service');
const formAddLaptop = document.querySelector('.form-laptop');
const formAddService = document.querySelector('.form-service');

addBtnLaptop.addEventListener('click', () => {

    HTMLFormElement.prototype.submit.call(formAddLaptop);
});

addBtnServices.addEventListener('click', () => {

    HTMLFormElement.prototype.submit.call(formAddService);
});
