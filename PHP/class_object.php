<!-- 9. PHP Class and Object -->
<?php
class Student {
    public $name;
    public $age;

    public function greet() {
        return "Hello, my name is $this->name";
    }
}

// Creating object
$student1 = new Student();
$student1->name = "Ram";
$student1->age = 20;

echo $student1->greet() . "<br>";
echo "Age: " . $student1->age . "<br>";
?>
