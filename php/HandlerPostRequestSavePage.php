<?php
class HandlerPostRequestSavePage {
	var $name;
	var $arrayVariants;
	var $sizeArray;
	var $id; 
	var $link = "http://localhost/voting";
	var $file;
	var $onliFileName;
	function __construct($post)
	{	
		$this->name = $post["title"];
		$this->sizeArray = count($post);
		foreach ($post as $color) {
    		$this->arrayVariants[] = $color;
		}
	}	
	function createFile(){
		$this->id = fopen("config.txt","r+");
		$idf = fgets($this->id);
		fclose($this->id);
		$this->onliFileName = intval($idf).".php";
		$fileName = "../html/currentVotings/".intval($idf).".php";
		$fileNamePattern = "../html/currentVotings/pattern.php";
		if (!copy($fileNamePattern, $fileName)) {
    		echo "не удалось скопировать $file...\n";
		}
		$idf++;
		$this->id = fopen("config.txt","r+");
		fwrite($this->id, (string)$idf);
		fclose($this->id);
		$this->file = $fileName;
	}
	function alertPattern(){
		$this->createFile(); 
		//if($this->sizeArray > 3){
			//$this->addNewVariant();
			//$this->setStatistic();
		//}
		$currentFile = fopen($this->file, "r+");
		$string = ''; //= file_get_contents($this->file);
		//echo $this->file; 
		$i = 0;
		while(!feof($currentFile)){
	    $tmp = fgets($currentFile);
	    		if(preg_match("/(!@#%(.*?)@#%)/s",$tmp)){
			$tmp = preg_replace("/(!@#%(.*?)@#%)/si",$this->arrayVariants[$i],$tmp);
			$i++;
				}
		//echo $tmp;
		$string = $string . $tmp; 
		}
		//echo $string;
		$string = $this->setCountVariant($string);
		fclose($currentFile);
		return $string;
	}
	function setCountVariant($string){
		$string = preg_replace("/(<!--countElement-->)/si",($this->sizeArray - 1),$string);
		return $string;
	}
	function addNewVariant($str){
		//$str = file_get_contents($this->file);
		$countNewVariants = $this->sizeArray - 3;
		if(preg_match('/<!--!@#%start-->(.*?)<!--!@#%finish-->/si', $str, $arr))
			$title = $arr[1];
		else
			$title = "";
		//echo $title;
		$tmp = "";
		for($i = 0; $i < $countNewVariants; $i++ ){
				$tmp = $tmp . $title;
				$tmp = preg_replace("/(radioButtonVote0)/si","radioButtonVote" . ($i + 2),$tmp);
				$tmp = preg_replace("/id=\"(\d+)\"/si", "id=\"".($i+2)."\"", $tmp);
				$tmp = preg_replace("/span(\d+)/si", "span".($i+2), $tmp);
		}
		$str = preg_replace("/(<!--!@#%add-->)/si",$tmp,$str);
		return $str;
		//$this->wrieteFile($str);

	}
	function setStatistic($str){

		//$str = file_get_contents($this->file);
		$countNewVariants = $this->sizeArray - 3;
		if(preg_match('/<!--StartCountClick-->(.*?)<!--StartCountClick-->/si', $str, $arr))
			$title = $arr[1];
		else
			$title = "";
		//echo $title;
		$tmp = "";
		for($i = 0; $i < $countNewVariants; $i++ ){
				$tmp = $tmp . $title;
				$tmp = preg_replace("/(voit1)/si","voit" . (string)($i + 2),$tmp);
				$tmp = preg_replace("/(<--currentNumberVoit1=0-->)/si","<--currentNumberVoit".(string)($i + 2)."=0-->",$tmp);
		}
		$str = preg_replace("/(<!--addNewRadioButton-->)/si",$tmp,$str);
		return $str;
		//$this->wrieteFile($str);

	}
	function wrieteFile($str){
		$currentFile = fopen($this->file, "r+");
		fwrite($currentFile, $str);
		fclose($currentFile);
	}
	function setCurrentLink($str,$link){
		$str = preg_replace("/(<!--currentLink-->)/si",$link,$str);
		return $str;
	}
	function getFileVoiting(){

		$str = $this->alertPattern();
		if($this->sizeArray > 3){
			$str = $this->addNewVariant($str);
			$str = $this->setStatistic($str);
		}
		//$this->addNewVariant($str);
				//$filePattern = fopen("../html/currentVotings/pattern.php", 		
		
		//$baseName = basename($this->file);
		$link =   $this->link .'/html/currentVotings/' . $this->onliFileName;
		$str = $this->setCurrentLink($str,$link);
		$this->wrieteFile($str);
		//echo $link; 
		return $link;
	}

}
?>