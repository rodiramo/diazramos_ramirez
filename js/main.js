const hamburger = document.querySelector(".hamburger");
const navLinks = document.querySelector(".nav-links");
const links = document.querySelectorAll(".nav-links li");
const addCart = document.querySelector("#add-to-cart");










hamburger.addEventListener('click', ()=>{
   //Animate Links
    navLinks.classList.toggle("open");
    links.forEach(link => {
        link.classList.toggle("fade");
    });

    //Hamburger Animation
    hamburger.classList.toggle("toggle");
});


// Switch form Login SignUp
$(document).ready(function () {

  'use strict';

  // Detect browser for css purpose
  if (navigator.userAgent.toLowerCase().indexOf('firefox') > -1) {
      $('.form form label').addClass('fontSwitch');
  }

  // Label effect
  $('input').focus(function () {

      $(this).siblings('label').addClass('active');
  });

  // Form validation
  $('input').blur(function () {

      // User Name
      if ($(this).hasClass('name')) {
          if ($(this).val().length === 0) {
              $(this).siblings('span.error').text('Please type your full name').fadeIn().parent('.form-group').addClass('hasError');
              usernameError = true;
          } else if ($(this).val().length > 1 && $(this).val().length <= 6) {
              $(this).siblings('span.error').text('Please type at least 6 characters').fadeIn().parent('.form-group').addClass('hasError');
              usernameError = true;
          } else {
              $(this).siblings('.error').text('').fadeOut().parent('.form-group').removeClass('hasError');
              usernameError = false;
          }
      }
      // Email
      if ($(this).hasClass('email')) {
          if ($(this).val().length == '') {
              $(this).siblings('span.error').text('Please type your email address').fadeIn().parent('.form-group').addClass('hasError');
              emailError = true;
          } else {
              $(this).siblings('.error').text('').fadeOut().parent('.form-group').removeClass('hasError');
              emailError = false;
          }
      }

      // PassWord
      if ($(this).hasClass('pass')) {
          if ($(this).val().length < 8) {
              $(this).siblings('span.error').text('Please type at least 8 charcters').fadeIn().parent('.form-group').addClass('hasError');
              passwordError = true;
          } else {
              $(this).siblings('.error').text('').fadeOut().parent('.form-group').removeClass('hasError');
              passwordError = false;
          }
      }

      // PassWord confirmation
      if ($('.pass').val() !== $('.passConfirm').val()) {
          $('.passConfirm').siblings('.error').text('Passwords don\'t match').fadeIn().parent('.form-group').addClass('hasError');
          passConfirm = false;
      } else {
          $('.passConfirm').siblings('.error').text('').fadeOut().parent('.form-group').removeClass('hasError');
          passConfirm = false;
      }

      // label effect
      if ($(this).val().length > 0) {
          $(this).siblings('label').addClass('active');
      } else {
          $(this).siblings('label').removeClass('active');
      }
  });


  // form switch

  $('a.switch').click(function (e) {
      $(this).toggleClass('active');
      e.preventDefault();

      if ($('a.switch').hasClass('active')) {
          $(this).parents('.form-peice').addClass('switched').siblings('.form-peice').removeClass('switched');
      } else {
          $(this).parents('.form-peice').removeClass('switched').siblings('.form-peice').addClass('switched');
      }
  });





});





//offline- online

document.addEventListener("DOMContentLoaded", function () {
  let body = document.getElementById("body-modify");
  let nav = document.getElementById("nav-modify");

  let content = document.getElementById("onlineOffline");
  let textContent = `Your Connection ${
    navigator.onLine ? "Online" : "Offline"
  } `;
  if (navigator.onLine === true) {
    textContent = "You are connected 🥰!";
    content.style.color = "green";
    content.style.background = "white";
  } else {
    textContent = "You are offline 😓";
    content.style.color = "red";
    content.style.background = "black";
    body.style.background = "#C24328";
    nav.style.background = "#C24328";
  }
  content.textContent = textContent;
});


// Service
if ("serviceWorker" in navigator) {
  navigator.serviceWorker
    .register("sw.js")
    .then((res) => console.log("SW Registrado"))
    .catch((err) => console.error("SW No Registrado", err));
}

// Share

if (navigator.share) {

  console.log("yeah...please continue");
 
 } else {
 
  console.log("Oops...I don't support this");
 
 }
document.querySelector(".share").addEventListener("click", async () => {
  try {
    await navigator.share({
      title: "Blomma",
      text: "Sharing our app",
      url: "localhost/diaz-ramos-rocio/index.php",
    });
    console.log("All good you shared the app");
  } catch (err) {
    console.error("It didnt work!:", err.message);
  }
});
