// popup open icons
const searchIcon = document.querySelector(".icon__search");
const insertIcon = document.querySelector(".icon__insert");
const deleteIcon = document.querySelector(".icon__delete");

// popup close icons
const closeIconSearch = document.querySelector(".icon__close-search");
const closeIconInsert = document.querySelector(".icon__close-insert");
const closeIconDelete = document.querySelector(".icon__close-delete");

// popups
const popupSearch = document.querySelector(".popup__search");
const popupInsert = document.querySelector(".popup__insert");
const popupDelete = document.querySelector(".popup__delete");


// for search
searchIcon.addEventListener("click", function () {
    popupSearch.style.opacity = 1;
    popupSearch.style.visibility = "visible";
});

closeIconSearch.addEventListener("click", function () {
    popupSearch.style.opacity = 0;
    popupSearch.style.visibility = "hidden";
});


// for insert
insertIcon.addEventListener("click", function () {
    popupInsert.style.opacity = 1;
    popupInsert.style.visibility = "visible";
});

closeIconInsert.addEventListener("click", function () {
    popupInsert.style.opacity = 0;
    popupInsert.style.visibility = "hidden";
});


// for delete
deleteIcon.addEventListener("click", function () {
    popupDelete.style.opacity = 1;
    popupDelete.style.visibility = "visible";
});

closeIconDelete.addEventListener("click", function () {
    popupDelete.style.opacity = 0;
    popupDelete.style.visibility = "hidden";
});