let select = function () {
    let selectHeader = document.querySelectorAll('.select__header');
    let selectItem = document.querySelectorAll('.select__item');

    selectHeader.forEach(item => {
        item.addEventListener('click', selectToggle)
    });

    selectItem.forEach(item => {
        item.addEventListener('click', selectChoose)
    });

    function selectToggle() {
        this.parentElement.classList.toggle('active');
    }

    function selectChoose() {
        let text = this.innerHTML,
            select = this.closest('.select'),
            currentText = select.querySelector('.select__current');
        currentText.innerHTML = text;
        select.classList.remove('active');
    }

};

select();

let user = function () {
    let userHeader = document.querySelectorAll('.user__header');
    let userItem = document.querySelectorAll('.user__item');

    userHeader.forEach(item => {
        item.addEventListener('click', userToggle)
    });

    userItem.forEach(item => {
        item.addEventListener('click', userChoose)
    });

    function userToggle() {
        this.parentElement.classList.toggle('active');
    }

    function userChoose() {
        let text = this.innerText,
            user = this.closest('.user'),
            currentText = select.querySelector('.user__current');
        currentText.innerText = text;
        select.classList.remove('active');
    }

};

user();

let verify = document.querySelector('.verify');
let closeVerify = document.querySelector('.verify-close');

closeVerify.onclick = function() {
    verify.style.display = 'none';
};

