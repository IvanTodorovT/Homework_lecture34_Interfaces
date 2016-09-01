<?php

use City\City;
use MajorCity\MajorCity;
use HotMegapolisAdvisor\HotMegapolisAdvisor;

require_once 'autoload.php';

$grad1 = new City("Sofia", 365, 6, $data);

$grad2 = new City("Pleven", 063, 3, $data);

$grad1 = new MajorCity("Pernik", 666, 10, $data, 1000);

$advisor = new HotMegapolisAdvisor();