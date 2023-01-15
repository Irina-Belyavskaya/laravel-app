const showComputers = document.querySelectorAll('.show-computer');

const modalPrice = document.querySelector('.modal-price');

const closeModalBtn = document.querySelector('.close-modal');
const checkboxes = document.querySelectorAll('.checkbox-btn');
const totalPrice = document.querySelector('.modal-total-price');

let price = 0;

showComputers.forEach(computer => computer.addEventListener('click',() => {
    const modalTitle = document.querySelector('.modal-title');
    modalTitle.textContent = computer.dataset.name;

    const modalDescription = document.querySelector('.modal-description');
    modalDescription.textContent = 'Описание: ' + computer.dataset.description;

    const modalProducer = document.querySelector('.modal-producer');
    modalProducer.textContent = 'Производитель: ' + computer.dataset.producer;

    const modalDate = document.querySelector('.modal-date');
    modalDate.textContent = 'Дата выпуска: ' + computer.dataset.date;

    modalPrice.dataset.price = computer.dataset.price;
    modalPrice.textContent = 'Цена: ' + computer.dataset.price + ' BYN';

    totalPrice.textContent = 'Итоговая цена: ' + Number(modalPrice.dataset.price) + ' BYN';
    price = Number(modalPrice.dataset.price);
}));

checkboxes.forEach(checkbox => checkbox.addEventListener('click',() => {

    if (checkbox.checked) {
        price = price + Number(checkbox.dataset.price);
        totalPrice.textContent = 'Итоговая цена: ' + price + ' BYN';
    }

    if (!checkbox.checked && price !== modalPrice.dataset.price) {
        price = price - Number(checkbox.dataset.price);
        totalPrice.textContent = 'Итоговая цена: ' + price + ' BYN';
    }
}));

closeModalBtn.addEventListener('click',() => {
    checkboxes.forEach(checkbox => {
        totalPrice.textContent = '';
        checkbox.checked = false;
    });
});


