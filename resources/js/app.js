import './bootstrap';

document.addEventListener("DOMContentLoaded", () => {

    const button = document.getElementById("menu-button");
    const menu = document.getElementById("mobile-menu");

    if(button){

        button.addEventListener("click", () => {

            menu.classList.toggle("hidden");

        });

    }

});