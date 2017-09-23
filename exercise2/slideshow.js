//each index corresponds to an image
let slides = {
  0: "jigglypuff",
  1: "squirtle",
  2: "snorlax",
  3: "ghosts",
  4: "pikachu"
};

//index for each slide
let index = 0;

//sets the image at id=slide to the approriate image
setImage = (i) => {
  if (i < 0)
    index = 4;
  else if (i > 4)
    index = 0;
  slide.src = slides[index] + ".jpg"
}

//check if out of bounds, if so then reset index
next = () => {
  setImage(++index);
};

//same logic as next()
back = () => {
  setImage(--index);
}
