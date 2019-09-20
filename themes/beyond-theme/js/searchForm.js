const searchForm = document.getElementsByClassName('search-input')[0];

function clearInput() {
    searchForm.value = "";
    }

window.addEventListener('load', () => {
    clearInput();
})