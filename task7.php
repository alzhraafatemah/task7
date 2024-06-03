
<?php
if ($_SERVER['REQUEST_METHOD'] === "POST") {
    $first_name = $_POST['fname'];
    $email = $_POST['mail'];
    $password = $_POST['pw'];

    echo "<h3>welcome $first_name</h3>";
    echo "<h4>Your email is: $email</h4>";

}

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>form</title>
<head>

<body>
<form method="post" action="<?php echo $_SERVER['PHP_SELF']; ?>">
         <label for="fname">First Name:</label>
         <input type="text" id="fname" name="fname"><br><br>
         <label for="email">Email:</label>
         <input type="email" id="email" name="mail"><br><br>
         <label for="pw">password:</label>
         <input type="password" id="pw" name="pw"><br><br>
         <input type="submit" value="sign up">


</form>


</body>
</html>
