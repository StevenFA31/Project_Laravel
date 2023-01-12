/*
See on github: https://github.com/muhammederdem/credit-card-form
*/

/*************** NAVBAR *****************/

const buttons = document.querySelectorAll(".project");
const overlay = document.querySelector(".overlay");
const overlayImage = document.querySelector(".overlay__inner img");

// function open(e) {
//   overlay.classList.add("open");
//   const src = e.currentTarget.querySelector("img").src;
//   overlayImage.src = src;
// }

function close() {
    overlay.classList.remove("open");
}

buttons.forEach((button) => button.addEventListener("click", open));
overlay.addEventListener("click", close);

document.querySelector("#contact-form").addEventListener("submit", (e) => {
    e.preventDefault();
    e.target.elements.name.value = "";
    e.target.elements.email.value = "";
    e.target.elements.message.value = "";
});

/********************* ODOJNDofjnS *****************/
