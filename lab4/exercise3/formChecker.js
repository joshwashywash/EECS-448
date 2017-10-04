// by setting some fields in the HTML,
// some functionality does not need to be implemented in the formChecker.js file
// such as the number checker and if a checkbox is checked.

const invalidUsername = (username) => {
  //really simple email check using a regular expression.
  return !(/\S+@\S+\.\S+/).test(username);
};

document.getElementById('form').addEventListener('submit', action => {
  if (invalidUsername(document.querySelector('input[type=text]').value)) {
    alert("Yikes! We got ourselves a bad username!");
    action.preventDefault(); //stops php from running
  } else if (document.querySelector('input[type=password]').value === "") {
    alert("Password can not be blankity-blank-blank.");
    action.preventDefault();
  }
});

document.querySelector('input[type=button]').addEventListener('click', reset => {
  location.reload(); //reloads the webpage which resets all inputs
});
