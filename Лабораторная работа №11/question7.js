const r = 100,
  w = window.innerWidth / 2,
  h = window.innerHeight / 2;
let t = 0,
    x = 0,
    y = 0;
 
const squareByCircle = () => {
  square.style.left = (w + r * Math.cos(Math.PI * t)) + 'px';
  square.style.top = (h + r * Math.sin(Math.PI * t)) + 'px';
 
  t = t + 0.01;
  if (t > 2) {t = 0}
};
setInterval(squareByCircle, 10);

