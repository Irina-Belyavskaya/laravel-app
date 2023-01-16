const formLaptop = document.querySelector('.form-laptop');
const inputDate = document.getElementById('date');
const inputPrice = document.getElementById('price');

formLaptop.onsubmit = evt => {
    evt.preventDefault();

    if (!submitValid (inputDate, inputPrice))
        return;

    HTMLFormElement.prototype.submit.call(formLaptop);
};


function submitValid (inputDate, inputPrice) {
    return !!Number(inputDate.value) && !!Number(inputPrice.value);
}
