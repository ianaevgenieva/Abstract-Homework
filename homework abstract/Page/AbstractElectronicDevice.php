<?php

namespace Page;

abstract class AbstractElectronicDevice extends AbstractNotepad
{ 
	protected $password;
	protected $isStarted;
	
	abstract public function start();
	abstract public function stop();
	abstract public function isStarted();
}