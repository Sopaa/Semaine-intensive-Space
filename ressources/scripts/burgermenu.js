var btn = document.getElementById("burgerMenu");
var menuEl = document.getElementById("topMenu");

function slide() {
  "use strict";
  menuEl.classList.toggle("menu-active");
}

function btnActive() {
  "use strict";
  btn.classList.toggle("active");
}

btn.addEventListener("click", function () { "use strict"; btnActive(); slide(); }, false);
