<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Login Form</title>
    <link rel="stylesheet" href="Css/loginform.css">
    <link rel="stylesheet" href="Css/style.css">
</head>
<body>
<?php require_once "header.php" ?>
    <div class="container">
        <h2>Login</h2>
        <form action="login.php" method="post">
            <div class="form-group">
                <label for="username">Username:</label>
                <input type="text" id="username" name="username" required>
            </div>
            <div class="form-group">
                <label for="password">Password:</label>
                <input type="password" id="password" name="password" required>
            </div>
            <button type="submit">Login</button>
            <p>Not registered yet?</p>
            <a href="registrationform.php" class="btn-signup">Sign Up</a>
            </form>
    </div>
    
    <?php require_once "footer.php" ?>
</body>
</html>
