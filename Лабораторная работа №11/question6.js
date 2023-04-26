const canvas = document.querySelector('#canvas');
const ctx = canvas.getContext('2d');
const aElem = document.querySelector('#a');
const bElem = document.querySelector('#b');
const btn = document.querySelector('#button');
const centerX = canvas.width / 2;
const centerY = canvas.height / 2;

btn.onclick = function() {
  let a = +aElem.value;
  let b = +bElem.value;
  ctx.clearRect(0, 0, canvas.width, canvas.height);
  for (let t = 0; t <= 2 * Math.PI; t += 0.01) {
    let x = a * Math.cos(t);
    let y = b * Math.sin(t);
    ctx.fillRect(x + centerX, y + centerY, 1, 1);
  }
}