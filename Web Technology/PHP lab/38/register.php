<!DOCTYPE html>
<html>
<head>
    <title>Simple Registration Form</title>
</head>
<body>
    <h2>Registration Form</h2>
    <form method="POST" action="">
        Full Name: <input type="text" name="fullname" required><br><br>
        Email: <input type="text" name="email" required><br><br>
        Password: <input type="password" name="password" required><br><br>
        Age: <input type="number" name="age" required><br><br>
        <input type="submit" value="Register">
    </form>

    <?php
    if ($_SERVER["REQUEST_METHOD"] == "POST") {
        $fullname = trim($_POST['fullname']);
        $email = trim($_POST['email']);
        $password = $_POST['password'];
        $age = (int)$_POST['age'];

        $errors = [];

        // Full name validation (non-empty, at least 3 characters)
        if (strlen($fullname) < 3) {
            $errors[] = "Full name must be at least 3 characters long.";
        }

        // Email validation using REGEX
        if (!preg_match("/^[a-zA-Z0-9._%+-]+@[a-zA-Z0-9.-]+\.[a-z]{2,}$/", $email)) {
            $errors[] = "Invalid email format.";
        }

        // Password validation using REGEX (at least 6 characters, one letter and one digit)
        if (!preg_match("/^(?=.*[A-Za-z])(?=.*\d).{6,}$/", $password)) {
            $errors[] = "Password must be at least 6 characters long and contain at least one letter and one number.";
        }

        // Age validation
        if ($age < 18 || $age > 60) {
            $errors[] = "Age must be between 18 and 60.";
        }

        // Output
        if (count($errors) > 0) {
            echo "<h3>Validation Errors:</h3><ul>";
            foreach ($errors as $error) {
                echo "<li>$error</li>";
            }
            echo "</ul>";
        } else {
            echo "<h3>Registration Successful!</h3>";
            echo "<p>Welcome, $fullname!</p>";
        }
    }
    ?>
</body>
</html>
