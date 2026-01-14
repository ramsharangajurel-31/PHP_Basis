<!-- 9. PHP Class and Object -->
<?php
// -----------------------------
// 1. Define a Class
// -----------------------------
class Student {
    // Properties
    public $name;
    public $age;
    public $grade;

    // Constructor method to initialize properties
    public function __construct($name, $age, $grade) {
        $this->name = $name;
        $this->age = $age;
        $this->grade = $grade;
    }

    // Method to display student info
    public function displayInfo() {
        echo "Name: " . $this->name . "<br>";
        echo "Age: " . $this->age . "<br>";
        echo "Grade: " . $this->grade . "<br>";
    }

    // Method to update grade
    public function updateGrade($newGrade) {
        $this->grade = $newGrade;
        echo "Grade updated to: " . $this->grade . "<br>";
    }
}

// -----------------------------
// 2. Instantiate Objects
// -----------------------------
$student1 = new Student("Ramsharan", 25, "A");
$student2 = new Student("Sita", 23, "B");

// -----------------------------
// 3. Access Class Members
// -----------------------------
echo "<h3>Student 1 Info:</h3>";
$student1->displayInfo();

echo "<br><h3>Student 2 Info:</h3>";
$student2->displayInfo();

// -----------------------------
// 4. Update Properties using Methods
// -----------------------------
echo "<br><h3>Updating Grades:</h3>";
$student1->updateGrade("A+");
$student2->updateGrade("A");
?>

