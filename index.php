<?php
include_once('Car.php');


$myCar = new Car('Ford','350','100','50');
//$myCar	->setModel('Trabant')
//		->helloCar();

echo $myCar->getModel();
echo $myCar-> getVMax();


