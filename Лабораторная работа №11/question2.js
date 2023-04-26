// 2 задание

const image = document.querySelector('.image');
const title = document.querySelector('.title');

const files = [
    [
        0,
        "imageTask2/1.jpeg",
        "Надпись 1"
    ],
    [
        1,
        "imageTask2/2.jpg",
        "Надпись 2"
    ],
    [
        2,
        "imageTask2/3.jpg",
        "Надпись 3"
    ],
    [
        3,
        "imageTask2/4.jpg",
        "Надпись 4"
    ],
    [
        4,
        "imageTask2/5.jpeg",
        "Надпись 5"
    ]
]

image.setAttribute('data-info', files[0][0]);
image.src = files[0][1];
title.innerText = files[0][2];

const defaultNum = image.getAttribute('data-info');

title.addEventListener('click', function() {
    if(title.style.color == 'orange') {
        title.style.color = 'red';
    } else if(title.style.color == 'red') {
        title.style.color = 'blue';
    } else if(title.style.color == 'blue') {
        title.style.color = 'orange';
    }
});

image.addEventListener('click', function(e) {

    let elAttr = image.getAttribute('data-info');
    elAttr++;

    for(let i = 0; i < files.length; i++) {
        if(elAttr == '0') {
            image.setAttribute('data-info', elAttr);
            image.src = files[0][1];
            title.innerText = files[0][2];
        } else if (elAttr == '1') {
            image.setAttribute('data-info', elAttr);
            image.src = files[1][1];
            title.innerText = files[1][2];
        } else if(elAttr == '2') {
            image.setAttribute('data-info', elAttr);
            image.src = files[2][1];
            title.innerText = files[2][2];
        } else if(elAttr == '3') {
            image.setAttribute('data-info', elAttr);
            image.src = files[3][1];
            title.innerText = files[3][2];
        } else if (elAttr == '4') {
            image.setAttribute('data-info', elAttr);
            image.src = files[4][1];
            title.innerText = files[4][2];
        } else {
            image.setAttribute('data-info', defaultNum);
            image.src = files[0][1];
            title.innerText = files[0][2];
        }
    }
});


