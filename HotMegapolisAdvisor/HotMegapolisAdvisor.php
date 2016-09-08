<?php

namespace HotMegapolisAdvisor;

use TripAdvisor\TripAdvisor;
use MajorCity\MajorCity;

class HotMegapolisAdvisor implements TripAdvisor {
	public function rate($city) {
		if ($city instanceof City) {
			return sprintf ( 'The rate for this city is: %s', $city->maxTemp );
		} elseif ($city instanceof MajorCity) {
			return sprintf ( 'The rate for this city is: %s', $city->maxTemp * 1.5 );
		}
	}
}