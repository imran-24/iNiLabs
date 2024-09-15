
<?php

class Employee {
    private $name;
    private $position;
    private $salary;

    public function __construct($name, $position) {
        $this->name = $name;
        $this->position = $position;
    }

    public function getName() {
        return $this->name;
    }

    public function getPosition() {
        return $this->position;
    }

    public function getSalary() {
        return $this->salary;
    }

    public function setSalary($salary) {
        if ($salary < 0) {
            throw new Exception("Salary cannot be negative.");
        }
        $this->salary = $salary;
    }
}

try {
    $employee = new Employee("Imran Syam", "Software Intern");
    
    $employee->setSalary(7000);
    
    echo "Employee: " . $employee->getName() . "\n";
    echo "Position: " . $employee->getPosition() . "\n";
    echo "Salary: $" . $employee->getSalary() . "\n";
 
    $employee->setSalary(-1000); 
    
} catch (Exception $e) {
    echo "Error: " . $e->getMessage();
}

?>




