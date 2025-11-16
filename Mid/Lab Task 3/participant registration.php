<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Participant Registration Form </title>

  <style>
    body{
      background-color: grey;
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
      color:black; 
      padding: 10px; 
      background-color:lightgreen;
      border:1px solid green;
      border-radius:5px;
    }

    #activityList div{
      padding: 5px;
      margin-top: 5px;
      border:1px solid black;
      background:white;
    }

    button{
      margin-top: 5px;
    }
  </style>

<script>
    function validateForm() {
      var FullName = document.getElementById("FullName").value;
      var Email = document.getElementById("Email").value;
      var PhoneNumber = document.getElementById("PhoneNumber").value;
      var Password = document.getElementById("Password").value;
      var ConfirmPassword = document.getElementById("ConfirmPassword").value;

      if (FullName === "" || Email === "" || PhoneNumber === "" || Password === "" || ConfirmPassword === "") {
        alert("fill in all fields");
        return false;
      }

      if (Email.indexOf("@") === -1) {
        alert("enter a valid email address");
        return false;
      }

      if (isNaN(PhoneNumber)) {
        alert("number should contain only digits");
        return false;
      }

      if (Password !== ConfirmPassword) {
        alert("password do not match!");
        return false;
      }

      document.getElementById("output").innerHTML = 
        "Full Name: " + FullName + "<br>" +
        "Email: " + Email + "<br>" +
        "Phone: " + PhoneNumber;

      return false;
    }

    function addActivity() {
      var activityName = document.getElementById("activityInput").value;

        if(activityName =="") {
          alert("enter an activity name");
          return;
        }

            var activityDiv = document.createElement("div");
            activityDiv.innerHTML = activityName ;


            var removeBtn = document.createElement("button");
            removeBtn.innerHTML = "Remove";


            removeBtn.onclick = function() {
              activityDiv.remove();
            };

            activityDiv.appendChild(removeBtn);

            document.getElementById("activityList").appendChild(activityDiv);

            document.getElementById("activityInput").value = "";

    }
</script>
</head>

<body>
    <div class="box">
      <center><h2>Participant Registration</h2></center>

        <form onsubmit = "return validateForm()">
              FullName :<br>
              <input type = "text" id = "FullName"><br>
              Email :<br>
              <input type = "email" id = "Email"><br>
              Phone Number :<br>
              <input type = "number" id = "PhoneNumber"><br>
              Password :<br>
              <input type = "password" id = "Password"><br>
              Confirm Password :<br>
              <input type = "password" id = "ConfirmPassword"><br><br>

              <input type="submit" value="Register">
        </form>
        <div id="output"></div>

        <h3>Activity Selection</h3>

          Activity Name:<br>
            <input type = "text" id="activityInput">
             <br>
             
             <button onclick = "addActivity()">Add Activity</button>
             
             <div id = "activityList"></div>
    </div>
</body>
</html>
