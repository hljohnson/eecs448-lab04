<script>

  function validateForm() {
    var email=document.getElementById(email).value;
    var password = document.getElementById(password).value;

    if(password == "" || email == "") {
      alert("Blank field is not allowed!");
      return false;
    }
    return true;

  }



</script>
