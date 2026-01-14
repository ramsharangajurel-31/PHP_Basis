<!-- 10. Constructor and Destructor -->
 <?php
// -----------------------------
// Example: Constructor and Destructor
// -----------------------------
class Student {
    public $name;
    public $age;

    // Constructor: called automatically when object is created
    public function __construct($name, $age) {
        $this->name = $name;
        $this->age = $age;
        echo "Constructor called: Student object for {$this->name} created.<br>";
    }

    // Method to display student info
    public function displayInfo() {
        echo "Name: {$this->name}, Age: {$this->age}<br>";
    }

    // Destructor: called automatically when object is destroyed
    public function __destruct() {
        echo "Destructor called: Student object for {$this->name} destroyed.<br>";
    }
}

// -----------------------------
// Creating Objects
// -----------------------------
$student1 = new Student("Ramsharan", 25);
$student2 = new Student("Sita", 23);

echo "<h3>Student Information:</h3>";
$student1->displayInfo();
$student2->displayInfo();

// -----------------------------
// End of script (destructors will be called automatically)
// -----------------------------
?>

