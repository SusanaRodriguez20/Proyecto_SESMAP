
  document.addEventListener("DOMContentLoaded", function () {
    const btnMenu = document.getElementById("btn_menu");
    const menu = document.querySelector(".menu");

    btnMenu.addEventListener("click", function () {
      menu.classList.toggle("active");
    });

    // Cierra el menú al hacer clic en un enlace
    const menuLinks = document.querySelectorAll(".menu a");
    menuLinks.forEach(function (link) {
      link.addEventListener("click", function () {
        menu.classList.remove("active");
      });
    });
  });