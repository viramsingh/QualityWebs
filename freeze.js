let modali = document.querySelector(".modali");
let pageCover = document.querySelector(".pageCover");
let main = document.querySelector("main");

document.getElementById("open").addEventListener("click", function () {
    
    modali.classList.remove("hidden");
    pageCover.classList.remove("hidden");
    main.addEventListener("focus", preventFocus);
});


document.getElementById("close").addEventListener("click", function () {
    modali.classList.add("hidden");
    pageCover.classList.add("hidden");
    main.removeEventListener("focus", preventFocus);
});

function preventFocus(evt) {
    evt.preventDefault();
}