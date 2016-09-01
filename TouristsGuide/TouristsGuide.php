<?php

namespace TouristsGuide;

class TouristsGuide {
	protected $cityArr = [];
	
	public function __construct($max){
		$this -> count(cityArr) = $max;
	}
	
	public static function convertToFahrenheit($degrees){
		return $degrees*9/5+32;
	}
	
	public function  isFahrenheit (City $city){
		return sprintf('Name of city: %s, tempretures: %s .',$city->name,$city->data);
	}
	
	public function getBest(TripAdvisor $advisor){
		
	}
	
	public function addCity(){
		
	}
}