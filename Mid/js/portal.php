<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Registration Form with POST</title>
</head>
<body>

  <h2>Registration Form</h2>

  <form id="regForm" method="post" onsubmit="handleSubmit(event)">
    <label>First Name: </label>
    <input type="text" id="firstName" placeholder="Enter first name"><br><br>

    <label>Last Name: </label>
    <input type="text" id="lastName" placeholder="Enter last name"><br><br>

    <label>Course: </label>
    <select id="course">
      <option value="">Select course</option>
      <option value="BSc CS">BSc CS</option>
      <option value="BSc IT">BSc IT</option>
      <option value="BCA">BCA</option>
      <option value="MSc CS">MSc CS</option>
    </select><br><br>

    <label>DOB: </label>
    <input type="date" id="dob"><br><br>

    <label>Gender: </label>
    <input type="radio" name="gender" value="Male"> Male
    <input type="radio" name="gender" value="Female"> Female
    <input type="radio" name="gender" value="Other"> Other<br><br>

    <label>Phone: </label>
    <input type="tel" id="phone" placeholder="Enter phone number"><br><br>

    <label>Email: </label>
    <input type="email" id="email" placeholder="Enter email"><br><br>

    <label>Password: </label>
    <input type="password" id="password" placeholder="Enter password"><br><br>

    <label>Confirm Password: </label>
    <input type="password" id="confirmPassword" placeholder="Confirm password"><br><br>

    <button type="submit">Submit</button>
  </form>

  <h2>Registered Users</h2>
  <table border="1" cellpadding="8" id="userTable">
    <thead>
      <tr>
        <th>First Name</th>
        <th>Last Name</th>
        <th>Course</th>
        <th>DOB</th>
        <th>Gender</th>
        <th>Phone</th>
        <th>Email</th>
        <th>Password</th>
      </tr>
    </thead>
    <tbody>
      <!-- Rows will appear here -->
    </tbody>
  </table>

  <script>
    function handleSubmit(event) {
      event.preventDefault(); // Prevent actual POST

      // Get values
      let firstName = document.getElementById('firstName').value.trim();
      let lastName = document.getElementById('lastName').value.trim();
      let course = document.getElementById('course').value;
      let dob = document.getElementById('dob').value;
      let phone = document.getElementById('phone').value.trim();
      let email = document.getElementById('email').value.trim();
      let password = document.getElementById('password').value;
      let confirmPassword = document.getElementById('confirmPassword').value;

      let gender = '';
      let genders = document.getElementsByName('gender');
      for(let i=0; i<genders.length; i++){
        if(genders[i].checked){
          gender = genders[i].value;
        }
      }

      // Validation
      if(!firstName || !lastName || !course || !dob || !gender || !phone || !email || !password || !confirmPassword){
        alert("Please fill all fields!");
        return;
      }

      if(password !== confirmPassword){
        alert("Passwords do not match!");
        return;
      }

      // Add to table
      let table = document.getElementById('userTable').getElementsByTagName('tbody')[0];
      let newRow = table.insertRow();
      newRow.insertCell(0).textContent = firstName;
      newRow.insertCell(1).textContent = lastName;
      newRow.insertCell(2).textContent = course;
      newRow.insertCell(3).textContent = dob;
      newRow.insertCell(4).textContent = gender;
      newRow.insertCell(5).textContent = phone;
      newRow.insertCell(6).textContent = email;
      newRow.insertCell(7).textContent = password;

      // Clear form
      document.getElementById('regForm').reset();
    }
  </script>

</body>
</html>
