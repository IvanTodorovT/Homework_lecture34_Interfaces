<?php

namespace City;

class City {
	
	protected $name;
	protected $code;
	protected $index;
	protected $data; 
	
	public function __construct($name,$code,$index,$data){
		$this->name=$name;
		$this->code=$code;
		$this->index=$index;
		$this->data=$data;
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
		return sprintf('%s city, with %s code, index: %s, climate data: %s .',
				$this->name,
				$this->code,
				$this->data,
				$this->index);
	}
	
}
