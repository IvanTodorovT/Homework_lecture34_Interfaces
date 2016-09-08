<?php

namespace MajorCity;

class MajorCity extends City {
	
	protected $residents;
	
	public function __construct($name, $code, $index, $data, $residents) {
		parent::__construct ( $name, $code, $index, $data );
		
		$this->residents = $residents;
	}
	
	public function __get($field) {
		return isset ( $this->$field ) ? $this->$field : null;
	}
	
	public function __set($field, $value) {
		$this - $field = $value;
	}
	
	public function __toString() {
		return sprintf ( '%s city, with %s code, index: %s, climate data: %s , number of residents: %s. ', $this->name, $this->code, $this->index, $this->data, $this->residents );
	}
}