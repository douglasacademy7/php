<?php

require_once("Car.php");
require_once("Motorcycle.php");

$ferrari = new Car("Ferrari","Red");

$ferrari->engine = 488;
$ferrari->setDoors(2);

$mustang = new Car("Mustang","Yellow");
$mustang->engine = 300;
$mustang->setDoors(4);

$m = new Motorcycle("Honda","Blue");
$m->engine = 150;


echo "Modelo de veiculo--------------------------------: ".$ferrari->getBrand();
echo '<br>';
echo "Cor do veiculo-------------------------------------: ".$ferrari->getColor();
echo '<br>';
echo "N° de portas do veiculo--------------------------: ".$ferrari->getDoors();
echo '<br>';
echo "Quantas unidades de potencia tem o motor---: ".$ferrari->getEngine();
echo '<br>' . '<hr>';

echo "Modelo de veiculo--------------------------------: ".$mustang->getBrand();
echo '<br>';
echo "Cor do veiculo-------------------------------------: ".$mustang->getColor();
echo '<br>';
echo "N° de portas do veiculo--------------------------: ".$mustang->getDoors();
echo '<br>';
echo "Quantas unidades de potencia tem o motor---: ".$mustang->getEngine();
echo '<br>' . '<hr>';

echo "Modelo de veiculo--------------------------------: ".$m->getBrand();
echo '<br>';
echo "Cor do veiculo-------------------------------------: ".$m->getColor();
echo '<br>';
echo "Quantas unidades de potencia tem o motor---: ".$m->getEngine();
echo '<br>' . '<hr>';