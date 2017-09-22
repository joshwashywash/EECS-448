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
set = (i) => {
  slide.src = slides[i] + ".jpg"
}

//check if out of bounds, if so then reset index
next = () => {
  if (++index > 4)
    index = 0;
  set(index);
};

//same logic as next()
back = () => {
  if (--index < 0)
    index = 4;
  set(index);
}
