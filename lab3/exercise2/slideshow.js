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
  //check if within bounds
  if (i < 0)
    index = 4;
  else if (i > 4)
    index = 0;
  slide.src = slides[index] + ".jpg"
}

//increment index, then do a check
next = () => {
  setImage(++index);
};

//decrement index. then do a check
back = () => {
  setImage(--index);
}
