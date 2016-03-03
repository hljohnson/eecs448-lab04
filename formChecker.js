
function validateForm() {
  // Extract email and password from html
  var email=document.getElementById("email").value;
  var pass = document.getElementById("password").value;

  // Check if email or password fields were empty and
  // display appropriate message
  if(pass == "" || email == "") {
    if(email == "") {
      alert("Blank email is not allowed!");
    }
    if(pass == "") {
      alert("Blank password is not allowed!");
    }
    return false;
  }
  else {
    return true;
  }
}
