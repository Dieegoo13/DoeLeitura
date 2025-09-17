const menuToggle = document.getElementById("menu-toggle");
const areaMenu = document.querySelector(".area-menu");

menuToggle.addEventListener("click", () => {
  areaMenu.classList.toggle("show");
});
