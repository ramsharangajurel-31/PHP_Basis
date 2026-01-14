<!-- 10. Constructor and Destructor -->
 <?php
class Car {
    public $brand;

    // Constructor
    public function __construct($brandName) {
        $this->brand = $brandName;
        echo "Car object created: $this->brand<br>";
    }

    // Destructor
    public function __destruct() {
        echo "Car object destroyed: $this->brand<br>";
    }

    public function drive() {
        echo "$this->brand is driving<br>";
    }
}

$car1 = new Car("Toyota");
$car1->drive();
?>
