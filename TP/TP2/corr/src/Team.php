<?php
require_once('Manager.php');

class Team {
	protected $arrEmployees;	
	public function __construct() {
		$this->arrEmployees=array();
	}	
	public function add(int $employee) {
		$this->arrEmployees[]=$employee;
	}	
	public function __toString() : string {
		$arr=array();
		foreach($this->arrEmployees as $employee) {
			if (get_class($employee)=="Employee") {
				$arr[]= $employee->__toString();
			} else {
			    $s = $employee->__toString() . "subordinates=[";
				foreach($employee->getArrEmployeesId() as $id) {
					$s .= $this->arrEmployees[$id]->getName()." ";
				}
				$s .= "]\n";
				$arr[]= $s;
			}
		}
		return implode("\n", $arr);
	}
}

$team=new Team();
$e1 = new Employee(1,"superman",1.27,2012-1932);
$e2 = new Employee(2,"batman",1.00,2012-1939);
$e3 = new Employee(3,"spiderman",0.82,2012-1962);
$team->add($e1);
$team->add($e2);
$team->add($e3);
$m = new Manager(4,"wonder woman",3.14,2012-1941);
$m->add(0);
$m->add(1);
$m->add(2);
$team->add($m);

echo $team;
?>