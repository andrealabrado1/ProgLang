<?php 
//echo ' {"response":true,"pid":"57cdc4815e1e5"}';
define('STRATEGY', 'strategy'); // constant
//$strategies = array("Smart", "Random"); // supported strategies
//if (!array_key_exists(STRATEGY, $_GET)) { /* write code here */  exit; }
//$strategy = $_GET[STRATEGY];


$file = 'pid.txt';
$pid = uniqid();
$notSpecified = "Strategy not specified";
$notStrat = "Unknown Strategy";
$result = false; //json = "result:false;

if (array_key_exists(STRATEGY,$_GET)) { /* write code here */ 
    $result = true;
    file_put_contents($file, $pid);
    $arr= array('response'=>$result, 'pid'=> $pid);
    $json = json_encode($arr);
    echo $json;
    exit; }
if(array_key_exists(STRATEGY,$_GET)){
    //$result = false;
    $arr1 = array('response'=> $result, 'reason'=>$notSpecified);
    $json = json_encode($arr1);
    echo $json;
    exit;}
else{
    
    $arr2 = array('response'=> $result, 'reason'=>$notStrat);
    $json = json_encode($arr2);
    echo $json;
}
//$json=json_encode($arr);
//echo $json;


