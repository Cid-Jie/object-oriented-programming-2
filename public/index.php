<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>

<?php

    require_once 'Bicycle.php';

    $bicycle = new Bicycle('blue', 1);
    echo $bicycle->forward();
    var_dump($bicycle);

    //Instance of new bike
    $bike = new Bicycle('orange', 2);
    var_dump($bike);

    //Charge element of this bike
    $bike->setCurrentSpeed = 30;
    var_dump($bike);

    //Moving bike and stop it
    echo $bike->forward();
    echo '<br> Vitesse du vélo : '.$bike->getCurrentSpeed(). ' km/h.'.'<br>';
    echo $bike->brake();
    echo '<br> Vitesse du vélo : '.$bike->getCurrentSpeed(). ' km/h.'.'<br>';
    echo $bike->brake();

    //Instance of a new bike
    $tornado = new Bicycle ('yellow', 2);
    $tornado->setCurrentSpeed = 5;
    $tornado->forward();
    var_dump($tornado);
    echo $tornado->forward();

    require_once 'GarageCar.php';
    $car = new GarageCar('green', 4, 'electric');
    echo $car->forward();
    var_dump($car);

    var_dump(GarageCar::ALLOWED_ENERGIES);

    //Instance of new car
    $car = new GarageCar('black', 4, 60);
    $car->getCurrentSpeed = 30;
    $car->getEnergyLevel = 45;

    var_dump($car).'<br>';

    //Instance new car
    $car2= new GarageCar('orange', 3, 60);
    echo $car2->getColor().'<br>';

    require_once 'Truck.php';
    $truck = new Truck('green', 3, 'fuel', 5);
    
    $truck->getLoading = 40;
    $truck->setCurrentSpeed = 20;

    //$truck->setloading = 5;
    echo $truck->fullLoading().'<br>';
    echo $truck->forward();
    echo $truck->brake();
    var_dump($truck);

?>

</body>
</html>