// Assigns each image to a position in the array
const getRandomNumber = (function() {
    let nums = [[1, `Abandonded`, `./projects/abandoned.html`], [2, `Dearly Beloved`, `./projects/dearly-beloved.html`], [3, `Guydance`, `./projects/guydance.html`], [4, `Cafe Molo`, `./projects/cafe-molo.html`], [5, `Inverse`, `./projects/inverse.html`], [6, `Tractor Tipping`, `./projects/tractor-tipping.html`], [7, `Our Hidden Hills`, `./projects/our-hidden-hills.html`], [8, `Ski-Sons`, `./projects/ski-sons.html`], [9, `SPEED`, `./projects/speed.html`], [10, `Contactless Control`, `./projects/contactless-control.html`], [11, `Haptic-Freq`, `./projects/haptic-frew.html`], [12, `-> (Direction)`, `./projects/direction.html`]];
    let current = [];
    
    function rand(n) {
        return (Math.random() * n)|0;
    }
    return function() {
      if (!current.length) current = nums.slice();
      return current.splice(rand(current.length), 1);
    }
}());
const images = document.querySelectorAll('#gallery-fade img');
//const title = document.querySelectorAll('#gallery-fade h5');
//const link = document.querySelectorAll('#gallery-fade a');

// Loops through the 12 images
getRandomImages = () => {   
    const imagesNums = [];
    
    for (let i = 1; i < 13; i++) {
        imagesNums.push(getRandomNumber());
    }
    
    images.forEach((img, index) => {
        img.src = `./resources/images/index/${imagesNums[index][0]}.jpg`
    })
    
//    title.forEach((h5, index) => {
//        h5.innerHTML(imagesNums[index][1]); // innerText
//    })
    
//    link.forEach((a, index) => {
//        a.innerHTML(imagesNums[index][2]);
//    })
}

// Changes the position of each project image every 10 seconds.
setInterval(() => {
    getRandomImages()
}, 10000);