<?php
class Dog {
    private $name;
    private $sex;

    function createDogs($name, $sex){
        $this->name = $name;
        $this->sex = $sex;
    }
}

$dog1 = new Dog("Max", "male");
echo $dog1->createDogs();