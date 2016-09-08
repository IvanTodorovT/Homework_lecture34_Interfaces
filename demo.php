<?php
use City\City;
use MajorCity\MajorCity;
use HotMegapolisAdvisor\HotMegapolisAdvisor;
use ClimateInfo\ClimateInfo;
use TouristsGuide\TouristsGuide;

require_once 'autoload.php';

$data1 = new ClimateInfo ( - 12, 35 );
$data2 = new ClimateInfo ( 10, 40 );
$data3 = new ClimateInfo ( 14, 20 );

$grad1 = new City ( "Sofia", "ABC", 1, $data1 );
$grad2 = new City ( "Pleven", "CFG", 0, $data2 );
$grad3 = new MajorCity ( "Pernik", "GMO", 1, $data3, 1000 );

$touristGuide = new TouristsGuide ( 15 );
$touristGuide->addCity ( $grad1 );
$touristGuide->addCity ( $grad2 );
$touristGuide->addCity ( $grad3 );

$touristGuide->isFahrenheit ( false );

$advisor = new HotMegapolisAdvisor ();

echo PHP_EOL;

echo $touristGuide->getBest ( $advisor );

echo "First code  " . $grad1->countryCode . PHP_EOL;