let menu=document.querySelector('#menu-btn');

let navbar=document.querySelector('.header .navbar');

menu.onclick = () =>{
    menu.classList.toggle('fa-times');
    navbar.classList.toggle('active');
};

windows.onclick = () =>{
    menu.classList.remove('fa-times');
    navbar.classList.remove('active');
};