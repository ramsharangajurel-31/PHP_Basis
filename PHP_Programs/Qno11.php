<?php
// Parent class
class Person {
    public $name;           // public property
    protected $age;         // protected property
    private $citizenship;   // private property

    public function setData($name, $age, $citizenship) {
        $this->name = $name;
        $this->age = $age;
        $this->citizenship = $citizenship;
    }

    public function showPublic() {
        echo "Name (Public): $this->name <br>";
    }

    protected function showProtected() {
        echo "Age (Protected): $this->age <br>";
    }

    private function showPrivate() {
        echo "Citizenship (Private): $this->citizenship <br>";
    }

    // Public method to access private method
    public function showAll() {
        $this->showProtected();
        $this->showPrivate();
    }
}

// Child class (Inheritance)
class Student extends Person {

    public function display() {
        echo "Accessing from Child Class:<br>";
        echo "Name: $this->name <br>";   // public → accessible
        $this->showProtected();          // protected → accessible
        // private members are NOT accessible here
    }
}

// Object creation
$student = new Student();
$student->setData("Shilpy Rauniyar", 20, "Nepali");

$student->showPublic();
$student->display();
$student->showAll();
?>
