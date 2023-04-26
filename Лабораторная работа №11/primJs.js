a="background-color:#00ffff; color:#ff00ff;"; 
a+="font-size:24pt; font-family: 'Times New Roman'"; 
naim='Сеть магазинов "ВСЁ ДЛЯ ДОМА"';
let da = new Date();
d = da.getDate() + "." + (da.getMonth () +1) + "." + da.getFullYear()
document.write('<p align=center style = "' + a +'">'+ naim + '</p><p>Сегодня ' + d + '</p>');