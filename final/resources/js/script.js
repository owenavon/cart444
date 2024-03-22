// Change position of each project cover image.
const getRandomNumber = (function() {
    let nums = [1,2,3];
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

getRandomImages = () => {   
    const imagesNums = [];
    for (let i = 1; i < 4; i++) {
        imagesNums.push(getRandomNumber());
    }
    images.forEach((img, index) => {
        img.src = `./resources/images/index/${imagesNums[index]}.jpg`
    })
}

// Makes the images change order every 10 seconds.
setInterval(() => {
    getRandomImages()
}, 10000);