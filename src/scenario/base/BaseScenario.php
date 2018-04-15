<?php

namespace yii2lab\designPattern\scenario\base;

abstract class BaseScenario {
	
	private $data;
	public $isEnabled = true;
	
	/**
	 * @return void
	 */
	abstract public function run();
	
	public function isEnabled() {
		return $this->isEnabled;
	}
	
	public function setData($value) {
		$this->data = $value;
	}
	
	public function issetData() {
		return isset($this->data);
	}
	
	public function getData() {
		return $this->data;
	}
	
}
