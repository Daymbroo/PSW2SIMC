document.addEventListener("DOMContentLoaded", function() {
    const loginLink = document.querySelector(".login-link");
    const popupLogin = document.querySelector(".popup-login");
    const closePopup = document.querySelector(".close-popup");

    loginLink.addEventListener("click", function(event) {
      event.preventDefault();
      popupLogin.style.display = "block";
    });

    closePopup.addEventListener("click", function() {
      popupLogin.style.display = "none";
    });
  });