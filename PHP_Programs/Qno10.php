<?php
class Demo {

    public function __construct() {
        echo "Constructor is called<br>";
    }

    public function showMessage() {
        echo "Welcome Shilpy Rauniyar<br>";
    }

    public function __destruct() {
        echo "Destructor is called";
    }
}

$obj = new Demo();
$obj->showMessage();
?>
