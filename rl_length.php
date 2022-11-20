<?php

ini_set('display_errors', 1);
ini_set('display_startup_errors', 1);
error_reporting(E_ALL);

$chars = str_split("uaaabbcccfdQQQIpppAAAAAACH5BAEKAAEALAAAAAAADAABAAEAAAAAAAA");
$count = 1;
$res = "";
$r = "";

for ($i = 0; $i < count($chars); $i++) {

    if ($i+1 < count($chars) && $chars[$i] == $chars[$i+1]) {
        $count++;
    }

    else {
        $r = $count . $chars[$i];
        $res = $res . $r . " ";
        $count = 1;
    }  
}  

 echo $res;


