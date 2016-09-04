<?php

namespace Page;

trait traitFunction 
{
	public function addPage(Page $value)
	{
		return $this->pages[]=$value;
	}
	
	public function addText($number,$text)
	{
		for($i = 0;$i<count($this->pages);$i++) {
			if ($i == $number) {
				$this->pages[$number]->setText($this->pages[$number]->getText().$text);
			}
		}
	}
	
	public function changeText($number ,$text)
	{
		for ($i = 0;$i<count($this->pages);$i++)	{
			if ($i == $number) {
				$this->pages[$i]->setText($text);
			}
		}
	}
	
	public function  deleteText($number)
	{
		for($i = 0; $i < count($this->pages); $i++) {
			if ($i == $number) {
				$this->pages[$number]->setText(null);
			}
		}
	}
	
	public function  seeAllPage()
	{
		foreach($this->pages as $key) {
			echo "title: ". $key->getTitle(). "text: ".$key->getText().PHP_EOL;
		}
	}
	
	public function searchWord($word)
	{
		for ($i = 0; $i <count($this->pages); $i++) {
			$result = $this->pages[$i]->searchWord($word);
			if ($result == "this page have this word") {
				return "notepad have this word";
			}
		}
		return "notepad dont have this word";
	}
	
	public function printAllPagesWithDigits()
	{
		for($i = 0; $i <count($this->pages);$i++) {
			$result = $this->pages[$i]->containsDigits();
			if ($result == "this page contain digits") {
				return "notepad pages have digits";
			}
		}
		return "notepad pages dont have digits";
	}
	
}