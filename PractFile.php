<?php

/**
 * 
 */
class PractFile
{
	public $name;
	
	function __construct($argument)
	{
		$this->name = $argument;
	}

	public function show(){
		echo $this->name;
	}
}