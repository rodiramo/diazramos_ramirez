const hamburger = document.querySelector(".hamburger");
const navLinks = document.querySelector(".nav-links");
const links = document.querySelectorAll(".nav-links li");

hamburger.addEventListener("click", () => {
  //Animate Links
  navLinks.classList.toggle("open");
  links.forEach((link) => {
    link.classList.toggle("fade");
  });

  //Hamburger Animation
  hamburger.classList.toggle("toggle");
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
