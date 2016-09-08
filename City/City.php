<?php

namespace City;

class City {
	
	protected $name;
	protected $code;
	protected $index;
	protected $data;
	
	public function __construct($name, $code, $index, $data) {
		$this->name = $name;
		$this->code = $this->checkCode ( $code );
		$this->index = $this->checkIndex ( $index );
		$this->data = $data;
	}
	
	public function __get($field) {
		return isset ( $this->$field ) ? $this->$field : null;
	}
	
	public function __set($field, $value) {
		if (field == $index && is_numeric ( $this->checkIndex ( $value ) )) {
			$this->$field = $value;
		} else if (field == $code && checkCode ( $value )) {
			$this->$field = $value;
		} else if (property_exists ( $this, $field )) {
			$this->$field = $value;
		}
	}
	
	private function checkIndex($index) {
		if ($index >= 0 && $index <= 1) {
			return $index;
		} else {
			throw new \Exception ( 'Index must be between 0 and 1!' );
		}
	}
	
	private function checkCode($code) {
		$pattern = "/^[A-Z]{3}$/";
		preg_match ( $pattern, $code, $matches );
		if ($matches) {
			return $code;
		} else {
			throw new \Exception ( 'Key must be of 3 upper engl letters!' );
		}
	}
	
	public function __toString() {
		return sprintf ( '%s city, with %s code, index: %s, climate data: %s .', $this->name, $this->code, $this->data, $this->index );
	}
}
