alert('The HTML utilizes type="number" which may not work if you are using IE9 or earlier versions');
color = () => {
  //set color of background
  document.getElementById('p').style.backgroundColor = "rgb(" +
    document.getElementById('bgRed').value + ", " +
    document.getElementById('bgGreen').value + ", " +
    document.getElementById('bgBlue').value + ")";
};

border = () => {
  //set border width
  document.getElementById('p').style.borderWidth = document.getElementById('brdWidth').value + "px";
  //set border color
  document.getElementById('p').style.borderColor = "rgb(" +
    document.getElementById('brdRed').value + ", " +
    document.getElementById('brdGreen').value + ", " +
    document.getElementById('brdBlue').value + ")";
};
