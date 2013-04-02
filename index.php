<?php 
require_once("client/request.php");
$url = 'test.ben.dev.jinpu.com/server/interface.php?';
$url = $url.$_SERVER['QUERY_STRING'];
$firstRequst = new Request($url,'GET',array('a'=>'aaaaaaaaaaaaa'));
$firstRequst->execute();
print_r($firstRequst->getResponseBody());
