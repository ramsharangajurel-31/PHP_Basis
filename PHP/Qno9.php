<?php
// Define a class
class Car {
    // Properties
    public $brand;
    public $color;
    public $price;

    // Method to display car info
    public function displayInfo() {
        echo "Brand: $this->brand\n";
        echo "Color: $this->color\n";
        echo "Price: $this->price\n";
    }

    // Method to apply discount
    public function applyDiscount($discount) {
        $this->price = $this->price - $discount;
        echo "Price after discount: $this->price\n";
    }
}

// Instantiate objects
$car1 = new Car();
$car1->brand = "Toyota";
$car1->color = "Red";
$car1->price = 25000;

$car2 = new Car();
$car2->brand = "Honda";
$car2->color = "Blue";
$car2->price = 22000;

// Access methods
echo "Car 1 details:\n";
$car1->displayInfo();
$car1->applyDiscount(2000);

echo "\nCar 2 details:\n";
$car2->displayInfo();
$car2->applyDiscount(1500);
?>
