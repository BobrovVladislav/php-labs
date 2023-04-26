let btnBr = document.getElementById('btn-browser');

btnBr.onclick = function() {
    let browser = window.navigator.userAgent;
    let paragraph = document.getElementById('p1');
    paragraph.innerHTML = "Браузер = " + browser;
};
