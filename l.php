<?php
session_start();

// Check if the form is submitted
if ($_SERVER['REQUEST_METHOD'] == 'POST') {
    // Perform authentication (replace this with your authentication logic)
    $username = $_POST['username'];
    $password = $_POST['password'];

    // Example: Check if the username and password match
    if ($username === 'example_user' && $password === 'password123') {
        $_SESSION['username'] = $username;
        header('Location: profile.php');
        exit;
    } else {
        $error_message = 'Invalid username or password';
    }
}
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Login</title>
    <!-- Your styles and other head elements here -->
    <style>
     

    body {
    font-family: Arial, sans-serif;
    margin: 0;
    padding: 0;
    background-color: #f4f4f4;
    display: flex;
    align-items: center;
    justify-content: center;
    height: 100vh;
}

.login-container {
    background-color: #ff;
    padding: 20px;
    border-radius: 8px;
    box-shadow: 0 0 10px rgba(0, 0, 0, 0.1);
}

form {
    display: flex;
    flex-direction: column;
}

label {
    margin-bottom: 8px;
}

input {
    padding: 8px;
    margin-bottom: 16px;
    border: 1px solid #ccc;
    border-radius: 4px;
}

input[type="submit"] {
    background-color: #333;
    color: #fff;
    cursor: pointer;
}
footer {
      text-align: center;
      padding: 10px;
      background-color: #333;
      color: #fff;
      position: fixed;
      bottom: 0;
      width: 100%;
    }
</style>
</head>
<body>

    <div class="login-container">
        <form action="profile.php" method="post">
            <h2>Login</h2>

            <label for="username">Username:</label>
            <input type="text" id="username" name="username" required>

            <label for="password">Password:</label>
            <input type="password" id="password" name="password" required>

            <input type="submit" value="Login">
            <input type="submit" value="New Registration">
        </form>
    </div>
<br>



    <?php if (isset($error_message)) : ?>
        <p><?php echo $error_message; ?></p>
    <?php endif; ?>



    <footer class="footer">

        &copy; kvn student developed <span> designer </span> | all rights reserved!
     
     
     </footer>

</body>
</html>
