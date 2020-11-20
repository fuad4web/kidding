const decrease = document.querySelector('.decrease');
const increase = document.querySelector('.increase');
const number = document.querySelector('.number');

decrease.addEventListener('click', removeProduct);
let count = 1;
function removeProduct() {
    count--;
    number.value = count;
}

increase.addEventListener('click', increaseProduct)
function increaseProduct() {
    count++;
    number.value = count;
}