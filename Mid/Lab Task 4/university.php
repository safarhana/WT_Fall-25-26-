<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>University Admission Form</title>
</head>
<body>

    <h1>University Admission Form</h1>

    <form action="#" method="post" enctype="multipart/form-data">

        <!-- Personal Information Section -->
        <fieldset>
            <legend>Personal Information</legend>

            <label for="fname">First Name:</label><br>
            <input type="text" id="fname" name="fname" required maxlength="30"><br><br>

            <label for="lname">Last Name:</label><br>
            <input type="text" id="lname" name="lname" required maxlength="30"><br><br>

            <label for="email">Email:</label><br>
            <input type="email" id="email" name="email" required><br><br>

            <label for="dob">Date of Birth:</label><br>
            <input type="date" id="dob" name="dob" required><br><br>

            <label>Gender:</label><br>
            <input type="radio" id="male" name="gender" value="Male" required>
            <label for="male">Male</label><br>

            <input type="radio" id="female" name="gender" value="Female" required>
            <label for="female">Female</label><br>

            <input type="radio" id="other" name="gender" value="Other" required>
            <label for="other">Other</label><br><br>
        </fieldset>

        <br>

        <!-- Academic Information Section -->
        <fieldset>
            <legend>Academic Information</legend>

            <label for="hs">High School Name:</label><br>
            <input type="text" id="hs" name="highschool" required maxlength="50"><br><br>

            <label for="grade">High School Grade (%):</label><br>
            <input type="text" id="grade" name="grade" required maxlength="5"><br><br>

            <label for="dept">Preferred Department:</label><br>
            <select id="dept" name="department" required>
                <option value="">--Select Department--</option>
                <option value="Computer Science">Computer Science</option>
                <option value="Electrical Engineering">Electrical Engineering</option>
                <option value="Business Administration">Business Administration</option>
                <option value="Biotechnology">Biotechnology</option>
            </select><br><br>

            <label>Interests:</label><br>
            <input type="checkbox" id="sports" name="interests" value="Sports">
            <label for="sports">Sports</label><br>

            <input type="checkbox" id="music" name="interests" value="Music">
            <label for="music">Music</label><br>

            <input type="checkbox" id="reading" name="interests" value="Reading">
            <label for="reading">Reading</label><br><br>
        </fieldset>

        <br>

        <!-- Document Upload Section -->
        <fieldset>
            <legend>Document Upload</legend>

            <label for="transcript">Upload Transcript:</label><br>
            <input type="file" id="transcript" name="transcript" required><br><br>

            <label for="photo">Upload Passport Size Photo:</label><br>
            <input type="file" id="photo" name="photo" required><br><br>

        </fieldset>

        <br>

        <!-- Buttons -->
        <button type="submit">Submit</button>
        <button type="reset">Reset</button>

    </form>

</body>
</html>
