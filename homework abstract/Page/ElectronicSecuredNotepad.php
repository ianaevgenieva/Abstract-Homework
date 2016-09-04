<?php

namespace Page;

class ElectronicSecuredNotepad extends AbstractElectronicDevice
{ 
	use traitFunction;
	public function __construct($pas)
	{
		$this->password = $pas;
	}
	
	public function getPassWord()
	{
		return $this->password;
	}
	public function start()
	{
		$this->isStarted = true;
		return "electronic secured notepad is on";
	}
	
	public function stop()
	{
		$this->isStarted = false;
		return "electronic secured notepad is off";
	}
	
	public function isStarted()
	{
		if ($this->isStarted) {
			return "is started";
		} else {
			return "doesnt started";
		}
	}
	
}