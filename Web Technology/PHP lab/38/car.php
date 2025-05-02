<?php
// Defining a Class
class Car {
    // Properties (attributes)
    public $make;
    public $model;
    public $year;

    // Constructor (to initialize the object)
    public function __construct($make, $model, $year) {
        $this->make = $make;
        $this->model = $model;
        $this->year = $year;
    }

    // Method (function inside a class)
    public function displayCarInfo() {
        echo "Car Info: " . $this->year . " " . $this->make . " " . $this->model;
    }
}

// Creating an Object (instance) of the Class
$myCar = new Car("Toyota", "Corolla", 2021);

// Accessing properties of the object
echo "<br>My Car's Make: " . $myCar->make;
echo "<br>My Car's Model: " . $myCar->model;
echo "<br>My Car's Year: " . $myCar->year;

// Calling a method of the object
echo "<br><br>";
$myCar->displayCarInfo(); // Outputs: Car Info: 2021 Toyota Corolla

?>
