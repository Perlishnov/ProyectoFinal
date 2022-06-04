// Logica del menu y el formulario
const menu = document.querySelector(".navbar");
const loginForm = document.querySelector(".login-form");

document.querySelector("#menu-btn").onclick = () => {
  menu.classList.toggle("active");
  loginForm.classList.remove("active");
};
document.querySelector("#login-btn").onclick = () => {
  loginForm.classList.toggle("active");
  menu.classList.remove("active");
};

window.onscroll = () => {
  menu.classList.remove("active");
  loginForm.classList.remove("active");
};

//Mensaje de inicio
alert("Bienvenido a nuestra pagina")

//Fecha actual
document.getElementById("demo").textContent = Date();

//Pagina de promocion
setTimeout(() => window.open("./Promocion.html"), 2000);
