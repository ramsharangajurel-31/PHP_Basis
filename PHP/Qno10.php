<?php
class Student {
    public $name;
    public $rollNo;

    // Constructor
    public function __construct($name, $rollNo) {
        $this->name = $name;
        $this->rollNo = $rollNo;
        echo "Student $this->name with Roll No $this->rollNo created.\n";
    }

    // Method
    public function display() {
        echo "Name: $this->name, Roll No: $this->rollNo\n";
    }

    // Destructor
    public function __destruct() {
        echo "Student $this->name object destroyed.\n";
    }
}

// Create objects
$student1 = new Student("Ram", 101);
$student2 = new Student("Sita", 102);

$student1->display();
$student2->display();

// Explicitly destroy an object
unset($student1);

echo "End of script.\n";
?>
