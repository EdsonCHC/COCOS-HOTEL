// Input name
let inputName = document.getElementById("frt-name");
let err1 = document.getElementById("err1");

var elem1 = document.createElement("div");
elem1.id = "notify";
elem1.style.display = "none";
err1.appendChild(elem1);

inputName.addEventListener("invalid", function (event) {
  event.preventDefault();
  if (!event.target.validity.valid) {
    elem1.textContent =
      "The name can't have numbers";
    elem1.className = "error";
    elem1.style.display = "block";
    inputName.className = "invalid";
  }
});

inputName.addEventListener("input", function (event) {
  if ("block" === elem1.style.display) {
    inputName.className = "";
    elem1.style.display = "none";
  }
});


//input lastName
let inputLast = document.getElementById("lst-name");
let err2 = document.getElementById("err2");

var elem2 = document.createElement("div");
elem2.id = "notify";
elem2.style.display = "none";
err2.appendChild(elem2);

inputLast.addEventListener("invalid", function (event) {
  event.preventDefault();
  if (!event.target.validity.valid) {
    elem2.textContent =
      "The last name can't have numbers";
    elem2.className = "error";
    elem2.style.display = "block";
    inputLast.className = "invalid";
  }
});

inputLast.addEventListener("input", function (event) {
  if ("block" === elem2.style.display) {
    inputLast.className = "";
    elem2.style.display = "none";
  }
});

// input phone number

let inputPhone = document.getElementById("phone");
let err3 = document.getElementById("err3");

var elem3 = document.createElement("div");
elem3.id = "notify";
elem3.style.display = "none";
err3.appendChild(elem3);

inputPhone.addEventListener("invalid", function (event) {
  event.preventDefault();
  if (!event.target.validity.valid) {
    elem3.textContent =
      "The phone number only can have numbers";
    elem3.className = "error";
    elem3.style.display = "block";
    inputPhone.className = "invalid";
  }
});

inputPhone.addEventListener("input", function (event) {
  if ("block" === elem3.style.display) {
    inputPhone.className = "";
    elem3.style.display = "none";
  }
});

// input date 

const hoy = new Date().toISOString().split("T")[0];
document.getElementsByName("date")[0].setAttribute('min', hoy);