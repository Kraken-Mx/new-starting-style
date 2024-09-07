const btn = document.getElementById("new_button");
const btn2 = document.getElementById("new_color");
const sectionElem = document.getElementById("new_section");
const colorOne = document.getElementById("row_one");
const colorTwo = document.getElementById("row_two");

btn.addEventListener("click", createColumn);
btn2.addEventListener("click", createColor);

function randomColor() {
  function randomNum() {
    return Math.floor(Math.random() * 255);
  }

  return `rgb(${randomNum()} ${randomNum()} ${randomNum()})`;
}

function createColor() {
  const td = document.createElement("td"); 
  const divElem = document.createElement("div");

  divElem.className = "principal-color d-flex flex-column justify-content-center align-items-center new2"; 
  divElem.style.backgroundColor = randomColor();

  const closeBtn = document.createElement("button");
  closeBtn.className = "new2";
  closeBtn.textContent = "❌";
  closeBtn.setAttribute("aria-label", "close");
  divElem.append(closeBtn);

  td.append(divElem);

  if (colorOne.getElementsByClassName("new2").length < 10) {colorOne.append(td);}
  else if (colorTwo.getElementsByClassName("new2").length < 10) {colorTwo.append(td);}

  //colorOne.append(td);

  //console.log(colorOne.getElementsByClassName("new2").length);

  closeBtn.addEventListener("click", () => {
    td.classList.add("fade-out");

    setTimeout(() => {
      td.remove();
    }, 1000);
  });
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
