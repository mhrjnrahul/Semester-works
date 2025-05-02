<!DOCTYPE html>
<html>
<head>
    <title>PHP Array Display</title>
</head>
<body>
    <h2>Indexed Array</h2>
    <ul>
        <?php
        $fruits = ["Apple", "Banana", "Orange", "Mango"];
        foreach ($fruits as $fruit) {
            echo "<li>$fruit</li>";
        }
        ?>
    </ul>

    <h2>Associative Array</h2>
    <ul>
        <?php
        $person = [
            "name" => "John Doe",
            "age" => 25,
            "email" => "john@example.com",
            "country" => "Nepal"
        ];
        foreach ($person as $key => $value) {
            echo "<li><strong>$key:</strong> $value</li>";
        }
        ?>
    </ul>
</body>
</html>
