

passwordCheck = () => {
  let p1 = document.getElementById('pass').value;
  let p2 = document.getElementById('check').value;
  if (p1.length < 8)
  alert("Yikes! The password must be more than 8 characters.");
  else if (p1 !== p2)
    alert("Oh, nuts. The passwords don't match. :(");
  else
    alert("Hooray! The passwords match! :)");
};
