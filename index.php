<?php
require_once 'Bicycle.php';
require_once 'Car.php';
require_once 'Truck.php';
require_once 'HighWay.php';
require_once 'MotorWay.php';
require_once 'PedestrianWay.php';
require_once 'ResidentialWay.php';
require_once 'Skateboard.php';


//part bicycle
$bicycle = new Bicycle('blue', 1);
echo $bicycle->forward();
var_dump($bicycle);

//part voiture
$car = new Car('green', 4, 'electric');
echo $car->forward();
var_dump($car);
var_dump(Car::ALLOWED_ENERGIES);

//part camion
$truck = new Truck(6000,'black',1, 'fuel'); //camion1
var_dump($truck);
echo $truck->forward();

//intenciation chargement Truck 
$truck->setShipment(5000);
$truck->getShipment();
var_dump($truck);
echo '<br> Le chargement fait ' . $truck->shipment . ' kg alors que sa capacité maximum est de '. $truck->storageCapacity . ' kg.' . '<br>';
echo $truck->isFullOrNot();

//part skateboard
$skateboard = new Skateboard('pink', 4);


//part pedestrianWay
$pedestrian = new PedestrianWay(1, 10);
	$pedestrian->addVehicle($bicycle);
	$pedestrian->addVehicle($car);

	var_dump($pedestrian);

//part residentialWay
$residential = new ResidentialWay(2, 50);
    $residential->addVehicle($skateboard);
    $residential->addVehicle($car);    

    var_dump($residential);

//part motorWay
$motorway = new MotorWay(1, 130);
	$motorway->addVehicle($car);
	$motorway->addVehicle($bicycle);

	var_dump($motorway);

//instance de car pour l'exception

$mini = new Car('red',4,'electric');

$mini->setParkBrake(true);
	try{
		$mini->start();
	} catch (Exception $exception){
		$mini->setParkBrake(false);
		echo $exception->getMessage();
	}finally {
		echo "My car runs like a donut ";
	}

//methodes statiques

echo Speedometer::convertKmToMiles(10);
