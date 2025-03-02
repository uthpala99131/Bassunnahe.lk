let searchform = document.querySelector('.search-form');

document.querySelector('#search-btn').onclick = () => {
    searchform.classList.toggle('active');
};

let profileForm = document.querySelector('.profile-form');

document.querySelector('#login-btn').onclick = () => {
    profileForm.classList.toggle('active');
};

let navbar = document.querySelector('.navbar');

document.querySelector('#menu-btn').onclick = () => {
    navbar.classList.toggle('active');
};

let laborCart = document.querySelector('.labor-cart');

document.querySelector('#cart-btn').onclick = () => {
    laborCart.classList.toggle('active');
};
