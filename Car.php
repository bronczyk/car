<?php

include_once('CarInterface.php');
include_once('RaceCarInterface.php');
include_once('EngineInterface.php');


class Car{
	private $engine;
	public $model;
	protected $wheel;
	public $vmax;
	public $acceleration;
	public $hp;
	
	public function _construct(){
		$this -> model = $model;
		$this -> vmax = $vmax;
		$this -> acceleration = $acceleration;
		$this -> hp = $hp;
	
	}
	
	public function helloCar(){
	echo "Hello Car!";

}

	public function setModel($model){
		$this->model = $model;
		return $this;
	}
	
	public function getModel(){
		return $this->model;
	}


	public function getVMax(){
		return $this->model;
	}
	
	
}