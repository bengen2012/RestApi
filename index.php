<?php 
require_once("client/request.php");
$url = 'test.ben.dev.jinpu.com/server/interface.php?';
$url = $url.$_SERVER['QUERY_STRING'];
$firstRequst = new Request($url);
$firstRequst->execute();
print_r($firstRequst->getResponseBody());
