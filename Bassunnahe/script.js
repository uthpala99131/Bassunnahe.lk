let searchform = document.querySelector('.search-form');

document.querySelector('#search-btn').onclick = () => {
    searchform.classList.toggle('active');
};

let loginForm = document.querySelector('.login-form');

document.querySelector('#login-btn').onclick = () => {
    loginForm.classList.toggle('active');
};

let navbar = document.querySelector('.navbar');

document.querySelector('#menu-btn').onclick = () => {
    navbar.classList.toggle('active');
};

let laborCart = document.querySelector('.labor-cart');

document.querySelector('#cart-btn').onclick = () => {
    laborCart.classList.toggle('active');
};












var swiper = new Swiper(".review-slider", {
    loop: true,
    spaceBetween: 20,
    autoplay: {
        delay: 7500,
        disableOnInteraction: false,
    },
    centeredSlides: true,
    breakpoints: {
        0: {
            slidesPerView: 1,
        },
        768: {
            slidesPerView: 2,
        },
        1024: {
            slidesPerView: 3,
        },
    },
});

document.addEventListener("DOMContentLoaded", function () {
    const otpInputs = document.querySelectorAll('input[type="number"]');
    const verifyButton = document.getElementById('verifyButton');
    const mobileNumber = document.getElementById('mobile');
    const expireSpan = document.getElementById('expire');
    const notification = document.getElementById('notification');

    const otpLength = otpInputs.length;

    // Function to generate a random OTP
    function generateOTP() {
        let otp = '';
        for (let i = 0; i < otpLength; i++) {
            otp += Math.floor(Math.random() * 10);
        }
        return otp;
    }

    // Display initial OTP and start countdown
    let otp = generateOTP();
    mobileNumber.textContent = otp;
    let timeLeft = 30;
    expireSpan.textContent = timeLeft;

    const timer = setInterval(() => {
        timeLeft--;
        expireSpan.textContent = timeLeft;
        if (timeLeft === 0) {
            clearInterval(timer);
            otp = generateOTP();
            mobileNumber.textContent = otp;
            timeLeft = 30;
            expireSpan.textContent = timeLeft;
        }
    }, 1000);

    // Event listener for OTP input fields
    otpInputs.forEach((input, index) => {
        input.addEventListener('input', (e) => {
            if (e.data !== null) {
                if (e.target.value.length === 1) {
                    if (index < otpInputs.length - 1) {
                        otpInputs[index + 1].focus();
                    }
                }
            }
        });

        input.addEventListener('keydown', (e) => {
            if (e.keyCode === 8 && e.target.value.length === 0) {
                if (index > 0) {
                    otpInputs[index - 1].focus();
                }
            }
        });
    });

    // Function to verify OTP
    function verifyOTP() {
        let enteredOTP = '';
        otpInputs.forEach(input => {
            enteredOTP += input.value;
        });
        if (enteredOTP === otp) {
            alert('OTP Verified Successfully!');
            clearInterval(timer);
        } else {
            alert('Incorrect OTP. Please try again.');
            // Clear OTP input fields
            otpInputs.forEach(input => {
                input.value = '';
            });
        }
    }

    // Event listener for the verify button
    verifyButton.addEventListener('click', verifyOTP);

    // Display notification for sending OTP
    notification.textContent = `A verification code has been sent to ${otp}.`;
});
