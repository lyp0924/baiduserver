<?php
$nonce     = $_GET['nonce'];
//        $token     = 'lypwechat';
$token     = 'LiuY0901';
$timestamp = $_GET['timestamp'];
$echostr   = $_GET['echostr'];
$signature = $_GET['signature'];
$array = array($nonce, $timestamp, $token);
sort($array);
$str = sha1( implode( $array ) );
//if( $str == $signature && $echostr ){
    echo  $echostr;
    exit;
//}