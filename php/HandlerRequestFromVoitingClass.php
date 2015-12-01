<?php
 class HandlerRequestFromVoitingClass{
 	var $countVoite;
 	var $response;
 	var $arrayHaddens;
 	var $request;
	function __construct($gets)
	{	
		$this->countVoite = $gets["countVoite"];
    	$this->response = $gets["voit"];
		for($i = 0; $i < $this->countVoite ; $i++){
    		$this->arrayHaddens[] = $gets["voit".(string)$i];
    		$this->request["voit".(string)$i] = $gets["voit".(string)$i];
    		//echo $this->arrayHaddens[$i];
		}

	}
	function getCurrentStatistic(){
		$str;
		$sum;
		for($i = 0; $i < $this->countVoite ; $i++){
			if($this->response == "radioButtonVote" . (string)$i){
				$this->arrayHaddens[$i]++;
				$this->request["voit".(string)$i]++;
			}
			$sum = $sum + $this->arrayHaddens[$i];
		}
		for($i = 0; $i < $this->countVoite ; $i++){
			$this->request["voitProc".(string)$i] = ($this->request["voit".(string)$i] /$sum) * 100;
			//echo $this->request["voitProc".(string)$i];
		}
		//print_r($this->request);
		return  $this->request;
}
 }
 ?>