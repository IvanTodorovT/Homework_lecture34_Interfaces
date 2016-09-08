<?php

namespace TouristsGuide;

class TouristsGuide {
	
	protected $cityArr = [ ];
	protected $maxCities;
	
	public function __construct($maxCities) {
		$this->count ( cityArr ) = $max;
		$this->maxCities = $maxCities;
	}
	
	public static function convertToFahrenheit($degrees) {
		return ($degrees * 9 / 5 + 32);
	}
	
	public function isFahrenheit($isFahrenheit) {
		if ($isFahrenheit) {
			foreach ( $this->cities as $key => $value ) {
				echo "Name: " . $value->name . " min temperature: " . static::convertToFahrenheit ( $value->climateData->minTemp ) . "F" . " max temperature: " . static::convertToFahrenheit ( $value->climateData->maxTemp ) . "F" . PHP_EOL;
			}
		} else {
			foreach ( $this->cities as $key => $value ) {
				echo "Name: " . $value->name . " min temperature: " . $value->climateData->minTemp . "C" . " max temperature: " . $value->climateData->maxTemp . "C" . PHP_EOL;
			}
		}
	}
	
	public function getBest(TripAdvisor $advisor) {
		$bestRate = 0;
		$townName = '';
		$town = $this->cities;
		
		foreach ( $this->cities as $key => $city )
			if ($advisor->rate ( $town [$key] ) > $bestRate) {
				$bestRate = $advisor->rate ( $town [$key] );
				$townName = $town [$key]->name;
			}
		
		return $townName . ' with best rate : ' . $bestRate;
	}
	
	public function addCity(City $city) {
		if (count ( $this->cities ) < $this->maxCities) {
			$this->cities [] = $city;
		} else {
			echo 'No more free space!' . PHP_EOL;
		}
	}
}