<?php
 class HandlerRequestFromVoitingClass{
 	var $countVoite;
 	var $response;
 	var $arrayHaddens;
 	var $request;
 	var $file;
 	var $currentSateVoiting;
	function __construct($gets)
	{	
		$this->countVoite = $gets["countVoite"];
    	$this->response = $gets["voit"];
    	$this->file = $gets["link"];
    	$arr;
    	//echo $this->file;
    	$this->file = basename($this->file);
    	$this->file = "../html/currentVotings/".$this->file;
    	//if (preg_match('/.*(0-9*).*/sei', $this->file, $arr)) $this->file = $arr[1];
   		//else $this->file ='' ;
   		//echo $this->file;
		for($i = 0; $i < $this->countVoite ; $i++){
			if (preg_match('/=(\d+)/s', $gets["voit".$i], $arr)) $this->arrayHaddens[] = $arr[1];
   			else $this->arrayHaddens[] ='';
   			echo $this->arrayHaddens[$i];
   			//echo $gets["voit".$i];
    		//$this->arrayHaddens[] = $gets["voit".$i];
    		$this->request["voit".(string)$i] = intval($gets["voit".(string)$i]);
    		//echo;
		}

	}
	function getJson(){
		//$stringKey = json_encode(array_keys($this->request));
		//$stringVal = json_encode(array_values($this->request));
		$stringVal = preg_replace("/(\})/si","]}",$stringVal);
		$stringVal = preg_replace("/(\{)/si","[",$stringVal);
		//return $stringKey . $stringVal;
		return  json_encode($this->request);

	}
	function writeInFile(){
		//echo $this->file;
		$str = file_get_contents($this->file);
		$numberVoite = '';
		if (preg_match('/(\d+)/s', $this->response, $arr)) $numberVoite = $arr[1];
   		else $numberVoite ='' ;
   		echo $numberVoite;
   		$name = "voit". $numberVoite;
   		//echo '<--currentNumberVoit'.$numberVoite.'='.$this->arrayHaddens[$numberVoite].'-->';
   		$str = preg_replace('/<--currentNumberVoit'.$numberVoite.'=\d+-->/si','<--currentNumberVoit'.$numberVoite.'='.$this->arrayHaddens[$numberVoite].'-->',$str);
   		//echo $str;
   		$tmpFile = fopen($this->file, 'r+');
   		fwrite($tmpFile, $str);
		fclose($tmpFile);

	}
	function getCurrentStatistic(){
		//$str;
		$sum;
		for($i = 0; $i < $this->countVoite ; $i++){
			if($this->response == "radioButtonVote" . (string)$i){
				$this->arrayHaddens[$i]++;
				$this->request["voit".(string)$i]++;
			}
			$sum = $sum + $this->arrayHaddens[$i];
			//echo $this->arrayHaddens[$i];
		}
		$ar;
		$this->writeInFile();
		$str;
		for($i = 0; $i < $this->countVoite ; $i++){
			//echo $sum." ".$this->arrayHaddens[$i].'\n';
			$this->request["voitProc".(string)$i] = ($this->arrayHaddens[$i] / $sum) * 100;
			$str = $str .' '. ($this->arrayHaddens[$i] / $sum) * 100;
			$this->currentSateVoiting[] = $this->request["voitProc".(string)$i];
			//echo $this->request["voitProc".(string)$i];
		}
		$ar = $this->request; //print_r($this->request);
		return $str;
		//return $this->currentSateVoiting; 
		//return  $this->getJson();;
	}
 }
 ?>