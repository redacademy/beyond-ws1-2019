const searchForm = document.getElementsByClassName('search-input')[0];
const buttonClear = document.getElementById('clear-search');

formClear();

function clearInput() {
    searchForm.value = "";
}

function formClear() {
    buttonClear.addEventListener('click', () => {
        clearInput();
    })
}

window.addEventListener('load', () => {
    clearInput();
})