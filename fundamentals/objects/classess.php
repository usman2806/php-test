<?php

class Person
{
    //     public string $name;
//     public int $age;

    public function __construct(public string $name, public int $age)
    {
        //     $this->name = $name;
        //     $this->age = $age;
    }
    public function introduce(): string
    {
        return "Hi, I'm {$this->name} and I'm {$this->age} years old.";
    }
}

$person = new Person("Alice", 30);

// echo $person->introduce();

$person2 = new Person("Salman", 33);
// echo $person2->introduce();



// Polymorphism
class Employee extends Person
{
    public function __construct(public string $name, public int $age, public string $position)
    {
    }
    public function introduce(): string
    {
        return
            parent::introduce() . "I work as a {$this->position}";
    }
}

$people = [new Employee("Jerry", 45, "Manager"), new Person("Peter", 43)];


function introduce(Person $person)
{
    echo $person->introduce() . "\n";
}

foreach ($people as $person) {
    introduce($person);
}