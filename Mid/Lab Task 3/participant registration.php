<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Participant Registration Form </title>

  <style>

    body{
      background-color: white;
      font-family: Arial;
    }

    .box{
          width: 350px;
          margin: 30px auto;
          background-color:white;
          padding:20px;
          border: 1px solid black;
    }

    input,textarea,select{
      width:95%;
      margin-top:5px;

    }
  #output{
    margin-top:10px;
    colour:black;
    background-color:green;
  }
  
  </style>

  




<script>
    function validateForm() {
      var FullName = document.getElementById("FullName").value;
      var Email = document.getElementById("Email").value;
      var PhoneNumber = document.getElementById("PhoneNumber").value;
      var Password = document.getElementById("Password").value;
      var ConfirmPassword = document.getElementById("ConfirmPassword").value;

    
    if (FullName === "" || Email === "" || PhoneNumber === "" || Password === "" || ConfirmPassword ==="") {
        alert("Please fill in all fields.");
        return false;
      }

    
    if(Email == "" && Email !="@") {
      alert("email should have appropriate words. Please fill it!");
      return false;
    }
     if(PhoneNumber == "" && PhoneNumber != 0||1||2||3||4||5||6||7||8||9) {
      alert("email should have appropriate words. Please fill it!");
      return false;
    }

     if(Password != ConfirmPassword ) {
      alert("did not match!");
      return false;
    }

    document.getElemementById("output").
    innerHTML = "Full Name:" + FullName + "<br>"+
                "Email:" + Email + "<br>"+
                "Phone:"+ PhoneNumber;
                return false;
  }

  </script>
  </head>

  <body>

      <div class="box">
      <center>     <h2>Participant Registration</h2> </center>

        <form onsubmit = "return validateForm()">
              FullName :<br>
              <input type = "text" id = "name"> 
              <br> <br>

              Email :<br>
              <input type = "email" id = "email"> 
              <br> <br>

              PhoneNumber :<br>
              <input type = "number" id = "PhoneNumber"> 
              <br> <br>

              
              Password :<br>
              <input type = "text" id = "Password"> 
              <br> <br>

              ConfirmPassword :<br>
              <input type = "text" id = "ConfirmPassword"> 
              <br> <br>

              <input type  = "submit" value = "Registration">
 
</form>
        <div id = "output">
</div>
        
</div>
</body>
</html>