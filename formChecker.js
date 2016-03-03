
  function validateForm() {
    var email=document.getElementById("email").value;
    var pass = document.getElementById("password").value;

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
