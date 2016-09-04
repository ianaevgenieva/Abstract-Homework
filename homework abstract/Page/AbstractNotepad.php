<?php

namespace Page;
use Page\Page;

abstract class AbstractNotepad 
{
  	 protected $pages = [];
  	 protected $pass;
  	
  	 
  
	
	abstract public  function addText($number,$text);
	abstract public function changeText($number ,$text);
	abstract public function  deleteText($number);
	abstract public function  seeAllPage();
	abstract public function searchWord($word);
	abstract public function printAllPagesWithDigits();
}