const headerButton = document.querySelector("#header-button");
const footerButton = document.querySelector("#footer-button");
const modal = document.querySelector(".modal");
const close = document.querySelector(".close");

headerButton.addEventListener("click", function (event) {
    modal.classList.add("is-open");
});

footerButton.addEventListener("click", function (event) {
    modal.classList.add("is-open");
});

close.addEventListener("click", function (event) {
    modal.classList.remove("is-open");
})