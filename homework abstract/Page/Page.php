<?php

namespace Page;

class Page
{

	protected $title;
	protected $text;
	

	public function __construct($title,$text)
	{
		$this->title= $title;
		$this->text = $text;
		
	}
	
	public function getTitle()
	{
		return $this->title;
	}
	
	public function getText()
	{
		return $this->text;
	}
	
	public function getNumber()
	{
		return $this->number;
	}
	public function setText($value)
	{
		return $this->text=$value;
	}
	
	public function deleteText() 
	{
		$this->setText(null);
	}
	public function seeText()
	{
		echo "title:". $this->getTitle().PHP_EOL."text:".$this->getText().PHP_EOL;
	}
	
	public function searchWord($word) 
	{   
		$array = [];
		$answer = "dont have this word";
		$array= explode(" ", $this->text);
		for($i = 0; $i< count($array);$i++) {
			  if ($word == $array[$i]) {
			  	return "this page have this word";
			  }
		}  
		 return $answer;
	}
	
	public function containsDigits()
	{
		$array = [];
		$array= explode(" ", $this->text);
		for($i = 0; $i <count($array); $i++) {
			if(is_numeric($array[$i])) {
				return "this page contain digits";
			}
		}
		return "this page doesnt contain digit";
	}
	
	
}