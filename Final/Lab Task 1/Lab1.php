<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>PHP Form Validation Lab</title>
    <style>
        body { font-family: sans-serif; margin: 20px; }
        .container { display: flex; flex-wrap: wrap; gap: 20px; }
        .form-box { border: 1px solid #333; padding: 15px; width: 300px; }
        .error { color: red; font-size: 0.9em; display: block; margin-top: 5px; }
        .success { color: green; font-weight: bold; }
        fieldset { border: 1px solid #ccc; padding: 10px; margin-bottom: 10px; }
        legend { font-weight: bold; }
    </style>
</head>
<body>

<h1>Web Technologies - Lab 4.2 Validation</h1>
<div class="container">

    <div class="form-box">
        <h3>1. NAME</h3>
        <?php
        if (isset($_POST['submit_name'])) {
            $name = trim($_POST['name']);
            $msg = "";
            
            // Rules:
            if (empty($name)) {
                $msg = "Cannot be empty.";
            } elseif (str_word_count($name) < 2) {
                $msg = "Must contain at least two words.";
            } elseif (!ctype_alpha($name[0])) {
                $msg = "Must start with a letter.";
            } elseif (!preg_match('/^[a-zA-Z .-]*$/', $name)) {
                $msg = "Can contain a-z, A-Z, period, dash only.";
            } else {
                echo "<p class='success'>Name is valid!</p>";
            }
            if ($msg) echo "<span class='error'>Error: $msg</span>";
        }
        ?>
        <form method="post" action="">
            <input type="text" name="name" value="<?php echo isset($_POST['name']) ? $_POST['name'] : ''; ?>">
            <hr>
            <input type="submit" name="submit_name" value="Submit">
        </form>
    </div>

    <div class="form-box">
        <h3>2. EMAIL</h3>
        <?php
        if (isset($_POST['submit_email'])) {
            $email = trim($_POST['email']);
            $msg = "";

            // Rules:
            if (empty($email)) {
                $msg = "Cannot be empty.";
            } elseif (!filter_var($email, FILTER_VALIDATE_EMAIL)) {
                $msg = "Must be a valid email address.";
            } else {
                echo "<p class='success'>Email is valid!</p>";
            }
            if ($msg) echo "<span class='error'>Error: $msg</span>";
        }
        ?>
        <form method="post" action="">
            <input type="text" name="email" value="<?php echo isset($_POST['email']) ? $_POST['email'] : ''; ?>">
            <button title="hint" type="button" style="border:none; background:none; cursor:help;">i</button>
            <hr>
            <input type="submit" name="submit_email" value="Submit">
        </form>
    </div>

    <div class="form-box">
        <h3>3. DATE OF BIRTH</h3>
        <?php
        if (isset($_POST['submit_dob'])) {
            $dd = $_POST['dd'];
            $mm = $_POST['mm'];
            $yyyy = $_POST['yyyy'];
            $msg = "";

            // Rules:
            if (empty($dd) || empty($mm) || empty($yyyy)) {
                $msg = "Cannot be empty.";
            } elseif (!is_numeric($dd) || !is_numeric($mm) || !is_numeric($yyyy)) {
                $msg = "Must be valid numbers.";
            } elseif ($dd < 1 || $dd > 31) {
                $msg = "Day must be between 1-31.";
            } elseif ($mm < 1 || $mm > 12) {
                $msg = "Month must be between 1-12.";
            } elseif ($yyyy < 1953 || $yyyy > 1998) {
                $msg = "Year must be between 1953-1998.";
            } else {
                echo "<p class='success'>Date of Birth is valid!</p>";
            }
            if ($msg) echo "<span class='error'>Error: $msg</span>";
        }
        ?>
        <form method="post" action="">
            <fieldset>
                <legend>Date of Birth</legend>
                <table>
                    <tr>
                        <td align="center">dd</td>
                        <td align="center">mm</td>
                        <td align="center">yyyy</td>
                    </tr>
                    <tr>
                        <td><input type="text" name="dd" size="2" value="<?php echo isset($_POST['dd']) ? $_POST['dd'] : ''; ?>"> /</td>
                        <td><input type="text" name="mm" size="2" value="<?php echo isset($_POST['mm']) ? $_POST['mm'] : ''; ?>"> /</td>
                        <td><input type="text" name="yyyy" size="4" value="<?php echo isset($_POST['yyyy']) ? $_POST['yyyy'] : ''; ?>"></td>
                    </tr>
                </table>
                <hr>
                <input type="submit" name="submit_dob" value="Submit">
            </fieldset>
        </form>
    </div>

    <div class="form-box">
        <h3>4. GENDER</h3>
        <?php
        if (isset($_POST['submit_gender'])) {
            // Rules:
            if (!isset($_POST['gender'])) {
                echo "<span class='error'>Error: At least one must be selected.</span>";
            } else {
                echo "<p class='success'>Valid! Selected: " . $_POST['gender'] . "</p>";
            }
        }
        ?>
        <form method="post" action="">
            <fieldset>
                <legend>Gender</legend>
                <input type="radio" name="gender" value="Male"> Male
                <input type="radio" name="gender" value="Female"> Female
                <input type="radio" name="gender" value="Other"> Other
                <hr>
                <input type="submit" name="submit_gender" value="Submit">
            </fieldset>
        </form>
    </div>

    <div class="form-box">
        <h3>5. DEGREE</h3>
        <?php
        if (isset($_POST['submit_degree'])) {
            // Rules:
            if (!isset($_POST['degree'])) {
                echo "<span class='error'>Error: None selected.</span>";
            } elseif (count($_POST['degree']) < 2) {
                echo "<span class='error'>Error: At least two must be selected.</span>";
            } else {
                echo "<p class='success'>Valid! Selected: " . implode(", ", $_POST['degree']) . "</p>";
            }
        }
        ?>
        <form method="post" action="">
            <fieldset>
                <legend>Degree</legend>
                <input type="checkbox" name="degree[]" value="SSC"> SSC
                <input type="checkbox" name="degree[]" value="HSC"> HSC
                <input type="checkbox" name="degree[]" value="BSc"> BSc
                <input type="checkbox" name="degree[]" value="MSc"> MSc
                <hr>
                <input type="submit" name="submit_degree" value="Submit">
            </fieldset>
        </form>
    </div>

    <div class="form-box">
        <h3>6. BLOOD GROUP</h3>
        <?php
        if (isset($_POST['submit_bg'])) {
            $bg = $_POST['bloodGroup'];
            // Rules:
            if (empty($bg)) {
                echo "<span class='error'>Error: Must be selected.</span>";
            } else {
                echo "<p class='success'>Valid! Selected: $bg</p>";
            }
        }
        ?>
        <form method="post" action="">
            <fieldset>
                <legend>Blood Group</legend>
                <select name="bloodGroup">
                    <option value="">--Select--</option>
                    <option value="A+">A+</option>
                    <option value="A-">A-</option>
                    <option value="B+">B+</option>
                    <option value="B-">B-</option>
                    <option value="O+">O+</option>
                    <option value="O-">O-</option>
                    <option value="AB+">AB+</option>
                    <option value="AB-">AB-</option>
                </select>
                <hr>
                <input type="submit" name="submit_bg" value="Submit">
            </fieldset>
        </form>
    </div>

</div>
</body>
</html>