<?php
class Label{
	private $content;
	public function __construct($content){
		$this->$content;
	}
	public function render(){
		$out = "<label>{$this->content}</label>";
		return $out;
	}
}
?>
