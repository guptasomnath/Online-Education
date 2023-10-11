const searchIcon = document.getElementById('searchIcon');
const courseCloseIcon = document.getElementById('courseCloseIcon');
const searchBox = document.getElementById('searchBox');

searchIcon.onclick = () => {
    searchBox.classList.remove('hidden');
    searchBox.classList.add('flex');

    courseCloseIcon.classList.remove('hidden');

    searchIcon.classList.add('hidden');

}

courseCloseIcon.onclick = () => {

    searchBox.classList.remove('flex');
    searchBox.classList.add('hidden');

    courseCloseIcon.classList.add('hidden');

    searchIcon.classList.remove('hidden');
}

