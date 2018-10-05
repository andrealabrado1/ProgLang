<?php 
  
//Acknowledgement and the outcome of the requested move of the player
$pid = $_GET['pid'];
$theState = file_get_contents("../new/".$pid.'pid.json');
$stateJson = json_decode($theState, true);
include 'MoveStrategy.php';
//moves

//echo $theState;
?>