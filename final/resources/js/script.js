let nums = [];

// Nested array with image, title and links
const getRandomPosition = (function() {
    nums = [[1, `Abandonded`, `./projects/abandoned.html`], [2, `Dearly Beloved`, `./projects/dearly-beloved.html`], [3, `Guydance`, `./projects/guydance.html`], [4, `Cafe Molo`, `./projects/cafe-molo.html`], [5, `Inverse`, `./projects/inverse.html`], [6, `Tractor Tipping`, `./projects/tractor-tipping.html`], [7, `Our Hidden Hills`, `./projects/our-hidden-hills.html`], [8, `SKI-SONS`, `./projects/ski-sons.html`], [9, `SPEED`, `./projects/speed.html`], [10, `Contactless Control`, `./projects/contactless-control.html`], [11, `Haptic-Freq`, `./projects/haptic-freq.html`], [12, `-> (Direction)`, `./projects/direction.html`]];
    let current = [];
    
    function rand(n) {
        return (Math.random() * n)|0;
    }
    return function() {
      if (!current.length) current = nums.slice();
      return current.splice(rand(current.length), 1);
    }
}());


const images = document.querySelectorAll('#gallery img');
const title = document.querySelectorAll('#gallery h5');
const link = document.querySelectorAll('#gallery a');

// Loops through the images
getRandomProject = () => {   
    const information = [];
    
    for (let i = 1; i < nums.length; i++) {
        information.push(getRandomPosition());
    }
    
    images.forEach((img, index) => {
        img.src = `./resources/images/index/${information[index][0][0]}.jpg`
    })
    
    title.forEach((h5, index) => {
        h5.innerHTML = information[index][0][1];
    })
    
    link.forEach((a, index) => {
        a.href = information[index][0][2];
    })
}

// Changes the position of each project image every 10 seconds.
setInterval(() => {
    getRandomProject()
}, 10000);