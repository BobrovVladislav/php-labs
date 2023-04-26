const trigForm = document.querySelector('.trigForm');
const resultTrig = document.querySelector('.result__trig_text');

trigForm.addEventListener('submit',  function(e) { 
    e.preventDefault();
    
    let ugol = document.querySelector('.ugol').value;
    let selectFunction = document.querySelector('.select__function').value;

    switch(selectFunction) {
        case 'sin':
            resultTrig.innerText = Math.sin(ugol);
            break;
        case 'cos': 
            resultTrig.innerText = Math.cos(ugol);
            break;
        case 'tan': 
            resultTrig.innerText = Math.tan(ugol);
            break;
    }
});

