<?php
    $errors = [];

    if ($_SERVER["REQUEST_METHOD"] == "POST") {
     
        $name = $_POST['name'] ?? '';
        if (empty($name)) { 
            $errors[] = "Name cannot be empty.";
        } elseif (str_word_count($name) < 2) { 
            $errors[] = "Name must contain at least two words.";
        } elseif (!preg_match("/^[a-zA-Z]/", $name)) { 
            $errors[] = "Name must start with a letter.";
        } elseif (!preg_match("/^[a-zA-Z.- ]*$/", $name)) { 
            $errors[] = "Name can only contain letters, periods, and dashes.";
        }

        // 2. EMAIL VALIDATION 
        $email = $_POST['email'] ?? '';
        if (empty($email)) { 
            $errors[] = "Email cannot be empty.";
        } elseif (!filter_var($email, FILTER_VALIDATE_EMAIL)) {
            $errors[] = "Must be a valid email address.";
        }

        // 3. DATE OF BIRTH VALIDATION 
        $dd = $_POST['dd'] ?? '';
        $mm = $_POST['mm'] ?? '';
        $yyyy = $_POST['yyyy'] ?? '';
        if (empty($dd) || empty($mm) || empty($yyyy)) { 
            $errors[] = "Date of Birth fields cannot be empty.";
        } elseif (!($dd >= 1 && $dd <= 31) || !($mm >= 1 && $mm <= 12) || !($yyyy >= 1953 && $yyyy <= 1998)) { 
            $errors[] = "Invalid Date: dd (1-31), mm (1-12), yyyy (1953-1998).";
        }

        // 4. GENDER VALIDATION 
        if (!isset($_POST['gender'])) { 
            $errors[] = "At least one gender must be selected.";
        }

        // 5. DEGREE VALIDATION 
        if (!isset($_POST['degree']) || count($_POST['degree']) < 2) { // 
            $errors[] = "At least two degrees must be selected.";
        }

        // 6. BLOOD GROUP VALIDATION 
        if (empty($_POST['blood_group'])) { 
            $errors[] = "Blood group must be selected.";
        }

        if (empty($errors)) {
            echo "<p style='color:green;'>Validation Successful!</p>";
        } else {
            foreach ($errors as $error) { echo "<p style='color:red;'>$error</p>"; }
        }
    }
?>

<form method="post" action="">
    <fieldset>
        <legend>NAME</legend>
        <input type="text" name="name">
        <hr><input type="submit" value="Submit">
    </fieldset>

    <fieldset>
        <legend>EMAIL</legend>
        <input type="text" name="email">
        <hr><input type="submit" value="Submit">
    </fieldset>

    <fieldset>
        <legend>DATE OF BIRTH</legend>
        dd <br> <input type="text" name="dd" size="2"> / 
        mm <input type="text" name="mm" size="2"> / 
        yyyy <input type="text" name="yyyy" size="4">
        <hr><input type="submit" value="Submit">
    </fieldset>

    <fieldset>
        <legend>GENDER</legend>
        <input type="radio" name="gender" value="Male"> Male
        <input type="radio" name="gender" value="Female"> Female
        <input type="radio" name="gender" value="Other"> Other
        <hr><input type="submit" value="Submit">
    </fieldset>

    <fieldset>
        <legend>DEGREE</legend>
        <input type="checkbox" name="degree[]" value="SSC"> SSC
        <input type="checkbox" name="degree[]" value="HSC"> HSC
        <input type="checkbox" name="degree[]" value="BSc"> BSc
        <input type="checkbox" name="degree[]" value="MSc"> MSc
        <hr><input type="submit" value="Submit">
    </fieldset>

    <fieldset>
        <legend>BLOOD GROUP</legend>
        <select name="blood_group">
            <option value=""></option>
            <option value="A+">A+</option>
            <option value="B+">B+</option>
            <option value="O+">O+</option>
        </select>
        <hr><input type="submit" value="Submit">
    </fieldset>
</form>