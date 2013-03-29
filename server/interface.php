<?php 
require_once 'rest_utils.php';
    $data 		= RestUtils::processRequest(); 
   	$httpaccept = $data->getHttpAccept();
   	$params		= $data->getRequestVars();
   	$filename 	= 'user';

   	switch($data->getMethod()){
   		case 'get':
   			getMethodResult($filename,'get',$params,$httpaccept);
   			break;
   		case 'post':
   			getMethodResult($filename,'post',$params,$httpaccept);
   			break;
   		case 'put':
   			getMethodResult($filename,'put',$params,$httpaccept);
   			break;
   		case 'delete':
   			getMethodResult($filename,'delete',$params,$httpaccept);
   			break;
   	}

	function getMethodResult($filename,$method,$params,$httpaccept){
		require '../application/'.$filename.'.php';
		$class = new $filename;
		$result = call_user_func_array(array($class,$method),$params);
		RestUtils::sendResponse(200, json_encode($result), 'application/json');
		
		/* 
		if($httpaccept == 'json'){
		}else if ($httpaccept == 'xml'){
			RestUtils::sendResponse(200, RestUtils::arr2xml($result), 'application/xml');
		}
		*/
	}
   	
