<?php
class Student {
    public $name;
    public $age;

    public function setData($name, $age) {
        $this->name = $name;
        $this->age = $age;
    }

    public function display() {
        echo "Name: $this->name <br>";
        echo "Age: $this->age";
    }
}

// Creating object
$student1 = new Student();
$student1->setData("Shilpy Rauniyar", 20);
$student1->display();
?>
