<!DOCTYPE html>
<html>
<head>
    <title>PHP Age Checker</title>
</head>
<body>
    <h2>User Information Form</h2>
    <form method="POST" action="">
        Full Name: <input type="text" name="fname" required><br><br>
        Age: <input type="number" name="age" required><br><br>
        <input type="submit" value="Submit">
    </form>

    <?php
    if ($_SERVER["REQUEST_METHOD"] == "POST") {
        $name = $_POST['fname'];
        $age = (int)$_POST['age'];

        echo "<h3>Welcome $name!</h3>";

        if ($age % 2 == 0) {
            echo "<h4>Multiplication Table of $age:</h4>";
            echo "<ul>";
            for ($i = 1; $i <= 10; $i++) {
                $result = $age * $i;
                echo "<li>$age × $i = $result</li>";
            }
            echo "</ul>";
        } else {
            $vowels = 0;
            $consonants = 0;
            $lowerName = strtolower($name);
            for ($i = 0; $i < strlen($lowerName); $i++) {
                $char = $lowerName[$i];
                if (ctype_alpha($char)) {
                    if (in_array($char, ['a', 'e', 'i', 'o', 'u'])) {
                        $vowels++;
                    } else {
                        $consonants++;
                    }
                }
            }

            echo "<p>Number of Vowels in '$name': $vowels</p>";
            echo "<p>Number of Consonants in '$name': $consonants</p>";
        }
    }
    ?>
</body>
</html>
