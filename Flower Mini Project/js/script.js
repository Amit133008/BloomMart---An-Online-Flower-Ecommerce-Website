let userbox = document.querySelector('.header .flex .account-box');

document.querySelector('#user-btn').onclick = () =>{
    userbox.classList.toggle('active');
    navbar.classList.remove('active');
}

let navbar = document.querySelector('.header .flex .navbar');

document.querySelector('#menu-btn').onclick = () =>{
    navbar.classList.toggle('active');
    userbox.classList.remove('active');
}

window.onscroll = () =>{
    userbox.classList.remove('active');
    navbar.classList.remove('active');
}