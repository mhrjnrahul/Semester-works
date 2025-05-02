<?php
session_start();

// Dummy credentials
$valid_username = "admin";
$valid_password = "password123";

// Handle form submission
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $username = $_POST['username'];
    $password = $_POST['password'];
    $remember = isset($_POST['remember']);

    if ($username === $valid_username && $password === $valid_password) {
        $_SESSION['username'] = $username;

        if ($remember) {
            // Set cookies for 7 days
            setcookie("username", $username, time() + (7 * 24 * 60 * 60));
            setcookie("password", $password, time() + (7 * 24 * 60 * 60));
        }

        header("Location: dashboard.php");
        exit();
    } else {
        $error = "Invalid credentials!";
    }
}

// Get values from cookie if present
$saved_username = isset($_COOKIE['username']) ? $_COOKIE['username'] : "";
$saved_password = isset($_COOKIE['password']) ? $_COOKIE['password'] : "";
?>

<!DOCTYPE html>
<html>
<head><title>Login</title></head>
<body>
    <h2>Login Page</h2>
    <?php if (isset($error)) echo "<p style='color:red;'>$error</p>"; ?>
    <form method="POST">
        Username: <input type="text" name="username" value="<?php echo $saved_username; ?>" required><br><br>
        Password: <input type="password" name="password" value="<?php echo $saved_password; ?>" required><br><br>
        <input type="checkbox" name="remember" <?php if ($saved_username) echo "checked"; ?>> Remember Me<br><br>
        <input type="submit" value="Login">
    </form>
</body>
</html>
