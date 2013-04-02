<?php 
require_once("client/request.php");
$url = 'test.ben.dev.jinpu.com/server/interface.php?';
$firstRequst = new Request($url,'GET',array('a'=>'aaaaaaaaaaaaa'));
$firstRequst->execute();
print_r($firstRequst->getResponseBody());
