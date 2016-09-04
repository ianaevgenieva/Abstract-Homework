<?php

namespace Page;

class SecuredNotepad extends SimpleNotepad
{
   private $myPass;
	
	public function __construct($pass)
	{
		parent::__construct();
		if (preg_match("/[A-Z]{1}[a-z]{1}[0-9]{1}[A-Za-z]+[A-ZA-Z]+/", $pass)){
		$this->myPass =$pass;
		} else {
			echo "cannot create this obj";
		}
	}
	
	public function getPass()
	{
		return $this->myPass;
	}
	
}