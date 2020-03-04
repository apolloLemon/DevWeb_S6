<?php
// lève une exception si erreur de typage à l'appel de fonctions/méthodes
// 1 déclaration par fichier incluant Employee.php !
declare(strict_types=1);
require_once 'Employee.php';

$employees = array();
$employees[] = new Employee(1,"superman",1.27,2012-1932);
$employees[] = new Employee(2,"batman",1.00,2012-1939);
$employees[] = new Employee(3,"spiderman",0.82,2012-1962);
print_r($employees);
foreach($employees as $emp) echo $emp."\n";

// 4 méthodes d'affichage avec fonction de rappel (call-backs)
// option 1 : use external getter
function getEmployeeSalary(Employee $emp) : float { return $emp->getSalary(); }
$salaries = array_map("getEmployeeSalary",$employees);
print_r($salaries);

// option 2 : use static class method
$salaries = array_map(array('Employee',"sGetSalary"),$employees);
print_r($salaries);

// option 3 - use inline anonymous function
$salaries = array_map(create_function('$e','{ return $e->getSalary(); }'),$employees);
print_r($salaries);

// option 4 - use closure (anonymous function)
$closure = function(Employee $e) : float { return $e->getSalary(); };
$salaries = array_map($closure,$employees);
print_r($salaries);

echo "mean salary = ".array_sum($salaries)/count($salaries)."\n";
?>