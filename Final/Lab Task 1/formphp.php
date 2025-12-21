<!DOCTYPE html>
<html>
<head>
<title>
This is PHP
</title>
</head>
<body>  
<h1> Welcome to Registration</h1>
</body>
 
<?php
$name="";
$nameerr="";
 
if ($_SERVER["REQUEST_METHOD"] == "POST") {

    if (empty($_POST["name"])) {
        $nameerr = "Name is req"; // start with not empty
    } else {
        $name = test_input($_POST["name"]);
        if (!preg_match("/^[a-zA-Z ]*$/", $name)) {
            $nameerr = "Only letter and Space is allowed";
        }
    }
}
?>
 
<form method="post" action="">
Name: <input type="text" name="name" value="<?php echo $name; ?>">
<?php echo $nameerr; ?>
 
<input type="submit" name="submit" value="Submit">
</form>
<?php
 
function test_input($data)
{
    $data = trim($data);
    return $data;
}
 
 
if ($_SERVER["REQUEST_METHOD"] == "POST" && empty($nameerr)) {
    echo "<h3>Your Input:</h3>";
    echo "Name: " . $name;
}
 
?>
 
</html>
