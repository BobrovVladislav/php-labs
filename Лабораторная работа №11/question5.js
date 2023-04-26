
const selectImage = document.querySelector('.select__image');
const imageSelect = document.querySelector('.image__select');

    selectImage.addEventListener('change',  function() {
    let imageName = selectImage.value;

    switch(imageName) {
        case 'озеро':
            imageSelect.src = 'imageTaks5/ozero.jpg';
            break;
        case 'горы':
            imageSelect.src = 'imageTaks5/gora.jpg';
            break;
        case 'море':
            imageSelect.src = 'imageTaks5/more.jpg';
            break;
        case 'река':
            imageSelect.src = 'imageTaks5/reka.jpg';
            break;
    }
});