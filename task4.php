<?php

class Animal {
    public function makeSound() {
        echo "Unknown animal sound";
    }
}

class Dog extends Animal {
    public function makeSound() {
        echo "Dog makes sound: Bark" . "\n";
    }
}

class Cat extends Animal {
    public function makeSound() {
        echo "Cat makes sound: Meow" . "\n";
    }
}

class Cow extends Animal {
    public function makeSound() {
        echo "Cow makes sound: Moo" . "\n";
    }
}



$dog = new Dog();
$dog->makeSound();
$cat = new Cat();
$cat->makeSound();
$cow = new Cow();
$cow->makeSound();

?>


