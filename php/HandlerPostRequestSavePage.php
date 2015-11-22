<?php
/**
* 
*/
class HandlerPostRequestSavePage {
	var $name;
	var $arrayVariants;
	var $sizeArray;
	var $id; 
	var $link = "http://localhost/voting";
	function __construct($post)
	{	
		$this->name = $post["title"];

		$this->sizeArray = count($post);
		$arrayVariants = $post;
		unset($arrayVariants["title"]);

	}
	function getName(){
		return $this->name;
	}
	function getArray(){
		return $this->arrayVariants;
	}
	function getSize(){
		return $this->sizeArray;
	}
	function getFileVoiting(){
		$this->id = fopen("config.txt","r+");
		$idf = fgets($this->id);
		fclose($this->id);
		$fileName = "../html/currentVotings/".intval($idf).".php";
		$file = fopen($fileName, "x+");
		$baseName =  basename($fileName);
		$idf++;
		$this->id = fopen("config.txt","r+");
		fwrite($this->id, (string)$idf);
		fclose($this->id);
		$link =   $this->link .'/html/currentVotings/' . $baseName; 
		return $link;
	}

}
?>