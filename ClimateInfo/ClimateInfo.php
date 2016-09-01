<?php

namespace ClimateInfo;

class ClimateInfo {
	
	protected $minTemp;
	protected $maxTemp;
	
	public function __construct($minTemp,$maxTemp){
		
		$this->minTemp=$minTemp;
		$this->maxTemp=$maxTemp;
	
	}
	
	public function __get($field)
	{
		return isset($this->$field) ? $this->$field: null;

	}
	
public function __set($field, $value)
	{
		$this-$field = $value;
	}
	

	public function __toString(){
		return sprintf('Min temp in Celsius is: %s, Max temp in Celsius is: %s',
				$this->minTemp,
				$this->maxTemp);
	}
	
}