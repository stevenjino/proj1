<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Test Form</title>
</head>
<body>
<h2>PHP Validating Form Example</h2>
<p>*Required Field</p>
<form method="post" action="<?php echo htmlspecialchars($_SERVER["PHP_SELF"]);?>">
    Name: <input type="text" name="name">*<br><br>
    E-mail: <input type="text" name="email">*<br><br>
    Website: <input type="text" name="website"><br><br>
    Comment: <textarea name="comment" rows="5" cols="40"></textarea><br><br>
    Gender:
    <input type="radio" name="gender" value="female">Female
    <input type="radio" name="gender" value="male">Male
    <input type="radio" name="gender" value="other">Other*<br><br>
    <input type="submit"><br><br>

    <h2>Your Input:</h2>
    Your Name is: <?php echo $_POST['name']?><br>
    Your Email Address is: <?php echo $_POST['email']?><br>
    <?php echo $_POST['website']?><br>
    <?php echo $_POST['comment']?><br>
    You identify as <?php echo $_POST['gender']?><br>
</form>
</body>
</html>