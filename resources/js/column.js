//const passwordField = document.getElementById("password")
const btn = document.getElementById("new_button");
const sectionElem = document.getElementById("new_section");

btn.addEventListener("click", createColumn);

function randomColor() {
  function randomNum() {
    return Math.floor(Math.random() * 255);
  }

  return `rgb(${randomNum()} ${randomNum()} ${randomNum()})`;
}

function createColumn() {
  const divElem = document.createElement("div");
  divElem.className = "principal-superior d-flex flex-column justify-content-center align-items-center new1"; 
  divElem.style.backgroundColor = randomColor();

  const closeBtn = document.createElement("button");
  closeBtn.className = "new1";
  closeBtn.textContent = "✖";
  closeBtn.setAttribute("aria-label", "close");
  divElem.append(closeBtn);
  sectionElem.append(divElem);

  closeBtn.addEventListener("click", () => {
    divElem.classList.add("fade-out");

    setTimeout(() => {
      divElem.remove();
    }, 1000);
  });
}
