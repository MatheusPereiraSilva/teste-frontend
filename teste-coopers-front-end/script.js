function slide() {
  const balls = document.querySelectorAll(".ball");
  const sliders = document.querySelectorAll(".slider-items");

  balls.forEach((ball, index) => {
    ball.addEventListener("click", () => {
      sliders.forEach((slider) => slider.classList.add("block"));
      sliders[index].classList.remove("block");

      balls.forEach((ball, idx) => {
        ball.src = `<?php echo get_stylesheet_directory_uri()?>img/Ellipse${idx === index ? "3" : "4"}.png`;
      });
    });
  });
}
document.addEventListener("DOMContentLoaded", function () {
  slide();
});

// Event Forms
const form = document.querySelector("#form");
const username = document.querySelector('#username');
const email = document.querySelector("#email");
const errorEmail = document.querySelector(".alertEmail");
const phone = document.querySelector("#phone");
const errorPhone = document.querySelector('.alertPhone');
const message = document.querySelector("#message");
const errorMessage = document.querySelector('.alertMessage');
const success = document.querySelector("#valid");

function isEmailValid(email) {
  const emailRegex = new RegExp(
    /^[a-zA-Z0-9._-]+@[a-zA-Z0-9_-]+\.[a-zA-Z]{2,}$/
  );
  if (emailRegex.test(email)) {
    return true;
  } else {
    return false;
  }
}

form.addEventListener("submit", (event) => {
  event.preventDefault();
  if (email.value === "" || !isEmailValid(email.value)) {
    errorEmail.classList.remove("block");
    errorEmail.classList.add("error");
    success.classList.remove('success');
  } else {
    errorEmail.classList.remove("error");
    errorEmail.classList.add("block");
  }
  if(message.value === ''){
    errorMessage.classList.remove('block');
    errorMessage.classList.add('error');
    success.classList.remove('success');
  } else {
    errorMessage.classList.remove('error');
    errorMessage.classList.add('block');
  }
  if(phone.value === ''){
    errorPhone.classList.remove('block');
    errorPhone.classList.add('error');
    success.classList.remove('success');
  } else{
    errorPhone.classList.remove('error');
    errorPhone.classList.add('block');
  }
  if(email.value && message.value && phone.value){
    success.classList.add('success');
    username.value = ''
    email.value = '';
    phone.value = '';
    message.value = '';
  }
});

console.log(email, phone);
