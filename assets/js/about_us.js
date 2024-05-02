const dev1 = document.querySelector(".developer-1");
const yza = document.querySelector(".yza");

const dev2 = document.querySelector(".developer-2");
const nath = document.querySelector(".nath");

const dev3 = document.querySelector(".developer-3");
const jas = document.querySelector(".jas");

const overlay = document.querySelector(".overlay");

dev1.addEventListener("click", () => {
  yza.classList.remove("hidden");
  overlay.classList.remove("hidden");
});

dev2.addEventListener("click", () => {
  nath.classList.remove("hidden");
  overlay.classList.remove("hidden");
});

dev3.addEventListener("click", () => {
  jas.classList.remove("hidden");
  overlay.classList.remove("hidden");
});

overlay.addEventListener("click", () => {
  overlay.classList.add("hidden");
  jas.classList.add("hidden");
  nath.classList.add("hidden");
  yza.classList.add("hidden");
});


function closeModal(e) {
  e.parentElement.classList.add("hidden");
  overlay.classList.add("hidden");
}


